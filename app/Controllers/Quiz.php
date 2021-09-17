<?php

namespace App\Controllers;

use Google\Service\Analytics\Resource\Data;
use phpDocumentor\Reflection\Types\This;

class Quiz extends BaseController
{
    protected $db;

    function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db = \Config\Database::connect();    
    }

    public function index(){
        if(!logged_in()){
            return redirect()->to(base_url());
        }

        $data = [
            'hasil' => $this->db->table('data_hasil_kuis')->where(['no_reg' => user()->no_reg])->get()->getResult(),
        ];

        return view('quiz-board', $data);
    }

    public function mulai(){
        $kuota = $this->db->table('data_kuota_soal')->where('no_reg', user()->no_reg)->get()->getRow();
        if($kuota == null){
            $this->db->table('data_kuota_soal')->insert(['no_reg' => user()->no_reg, 'kuota' => 3]);
            return redirect()->to(current_url());    
        }

        if(!logged_in() or $kuota->kuota <= 0){
            return redirect()->to(base_url('portal'));
        }

        $data['soal'] = $this->db->table('daftar_soal')->orderBy('RAND()')->get()->getResult();
        $data['pilihan'] = $this->db->table('daftar_pilihan')->get()->getResult();
        return view('quiz', $data);
    }

    public function submit(){
        if($this->request->getPost()){
            $soal = $this->request->getVar('soal');
            $pilihan = $this->request->getVar('jawaban');
            
            $quota = $this->db->table('data_kuota_soal')->getWhere(['no_reg' => user()->no_reg])->getRow();
            $quota = $quota->kuota;
            $percobaan = [
                '3' => '1',
                '2' => '2',
                '1' => '3',
            ];

            foreach($soal as $s){

                $records = [
                    'id_soal' => $s,
                    'id_pilihan' => $pilihan[$s],
                    'no_reg' => user()->no_reg,
                    'percobaan_ke' =>$percobaan[$quota],
                ];

                $query = $this->db->table('data_soal_pilihan')->insert($records);
            }

            $this->db->table('data_kuota_soal')->where('no_reg', user()->no_reg)->update(['kuota' => $quota - 1]);

            return redirect()->to(base_url('quiz/hitung/'.$percobaan[$quota]));
        } else {
            return redirect()->to(base_url('portal/kuis'));
        }
    }

    public function hitung($percobaan = null){
        $data_soal_jawaban = $this->db->table('data_soal_pilihan')
            ->join('daftar_soal', 'daftar_soal.id_soal = data_soal_pilihan.id_soal')
            ->join('daftar_pilihan', 'daftar_pilihan.id_pilihan = data_soal_pilihan.id_pilihan')
            ->where(['no_reg' => user()->no_reg, 'percobaan_ke' => $percobaan])->get()->getResult();

        $score = 0;
        $counter = 0;

        foreach($data_soal_jawaban as $data){
            $counter++;
            if($data->kode_pilihan == $data->kode_pilihan_benar){
                $score++;
            }
        }

        if($counter <= 0){
            $score = 0;
        } else {
            $score = $score / $counter * 100;
        }
        
        $result = $this->db->table('data_hasil_kuis')->insert(['no_reg' => user()->no_reg, 'nilai' => $score, 'percobaan_ke' => $percobaan]);

        return redirect()->to(base_url('portal/kuis'));
    }
}

?>
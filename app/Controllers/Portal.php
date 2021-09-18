<?php

namespace App\Controllers;

class Portal extends BaseController
{
    protected $db;

    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index(){
        if(! session()->has('no_reg')){
            return redirect()->to(base_url('akun/login'));
        }
        return view('portal');
    }

    public function acara($id = null){
        if(! session()->has('no_reg')){
            return redirect()->to(base_url('akun/login'));
        }
        if($id == null){
            $data = [
                'maba' => $this->db->table('data_user')->join('data_maba', 'data_maba.no_registrasi=data_user.no_reg')->get()->getResult(),
                'acara' => $this->db->table('daftar_acara')->get()->getResult(),
                'presensi' => $this->db->table('data_presensi')->join('daftar_acara', 'daftar_acara.id_acara=data_presensi.id_acara')->getWhere(['no_reg_maba' => user()->no_reg])->getResult(),
            ];
            
            return view('portal-acara', $data);
        } else {
            $data = [
                'acara' => $this->db->table('daftar_acara')->where(['id_acara' => $id])->get()->getRow(),
                'room' => $this->db->table('daftar_room')->where('FIND_IN_SET('. user()->no_reg .', daftar_room.no_reg)')->where(['id_acara' => $id])->get()->getRow(),
                'kehadiran' => $this->db->table('data_presensi')->where(['no_reg_maba' => user()->no_reg, 'id_acara' => $id])->get()->getResultArray(),
            ];

            if(empty($data['acara']) and empty($data['room'])){
                return redirect()->to(base_url('portal/acara'));
            }
            // dd($data);
            return view('portal-acara-single', $data);
        }
    }

    public function slides(){
        if(! session()->has('no_reg')){
            return redirect()->to(base_url('akun/login'));
        }
        return view('portal-slides');
    }

    public function videos(){
        if(! session()->has('no_reg')){
            return redirect()->to(base_url('akun/login'));
        }
        return view('portal-videos');
    }

    public function kuis(){
        if(! session()->has('no_reg')){
            return redirect()->to(base_url('akun/login'));
        }
        $data = [
            'hasil' => $this->db->table('data_hasil_kuis')->where(['no_reg' => user()->no_reg])->get()->getResult(),
        ];

        return view('portal-kuis', $data);
    }

    public function survey(){
        if(! session()->has('no_reg')){
            return redirect()->to(base_url('akun/login'));
        }
        $url= "https://api.apispreadsheets.com/data/18285/";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($curl);

        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($http_code == 200){
            // SUCCESS
            $result = json_decode($result);
        }
        else{
            // ERROR CODE
        }
        $data['sheet'] = $result->data;
        // dd($result);
        $data['attempt'] = 0;
        foreach($result->data as $d){
            if($d->no_reg == user()->no_reg){
                $data['attempt']++;
            }
        }
        
        curl_close($curl);
        return view('portal-survei', $data);
    }

    public function survey_submit(){
        if(! session()->has('no_reg')){
            return redirect()->to(base_url('akun/login'));
        }
        $url= "https://api.apispreadsheets.com/data/18285/";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $postJSON = json_encode(["data"=> ["no_reg"=>user()->no_reg,"nama"=>user()->nama_maba,"jaringan_baik"=>$this->request->getPost('pil_1'),"menggunakan_laptop"=>$this->request->getPost('pil_2'),"pilihan_skill"=>$this->request->getPost('pil_3')]]);
        curl_setopt($curl,CURLOPT_URL, $url);
        curl_setopt($curl,CURLOPT_POST, true);
        curl_setopt($curl,CURLOPT_POSTFIELDS, $postJSON);

        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));

        $result = curl_exec($curl);

        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($http_code == 201){
            // SUCCESS
        }
        else{
            // ERROR CODE
        }
        return redirect()->to(base_url('portal/survey'));
    }
}

?>
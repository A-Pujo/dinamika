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
        $data = [
            'maba' => $this->db->table('data_user')->join('data_maba', 'data_maba.no_registrasi=data_user.no_reg')->get()->getResult(),
            'acara' => $this->db->table('daftar_acara')->get()->getResult(),
            'room' => $this->db->table('daftar_room')->getWhere(['no_reg' => user()->no_reg])->getResult(),
            'presensi' => $this->db->table('data_presensi')->join('daftar_acara', 'daftar_acara.id_acara=data_presensi.id_acara')->getWhere(['no_reg_maba' => user()->no_reg])->getResult(),
        ];
        return view('portal', $data);
    }

    public function slides(){
        return view('portal-slides');
    }

    public function videos(){
        return view('portal-videos');
    }

    public function kuis(){
        $data = [
            'hasil' => $this->db->table('data_hasil_kuis')->where(['no_reg' => user()->no_reg])->get()->getResult(),
        ];

        return view('portal-kuis', $data);
    }

    public function survey(){
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
        $url= "https://api.apispreadsheets.com/data/18285/";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $postJSON = json_encode(["data"=> ["no_reg"=>user()->no_reg,"nama"=>user()->nama_maba,"pil_1"=>$this->request->getPost('pil_1'),"pil_2"=>$this->request->getPost('pil_2'),"pil_3"=>$this->request->getPost('pil_3')]]);
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
        return redirect()->to(base_url('portal'));
    }
}

?>
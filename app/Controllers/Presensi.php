<?php

namespace App\Controllers;

class Presensi extends BaseController
{
    protected $db;

    function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db = \Config\Database::connect();    
    }

    public function acara($id_acara = null){
        if(! logged_in()){
            return redirect()->to(base_url('akun/login'));
        }

        $acara = $this->db->table('daftar_acara')->where(['id_acara' => $id_acara])->get()->getRow();
        if(empty($acara) or $id_acara == null){
            return redirect()->to(base_url());
        }

        $data_kehadiran = $this->db->table('data_presensi')->where(['no_reg_maba' => user()->no_reg, 'id_acara' => $id_acara])->get()->getResultArray();
        if(count($data_kehadiran) > 0){
            return redirect()->to(base_url('portal'));
        }
        
        $data = [
            'acara' => $acara,
        ];

        return view('form', $data);
    }

    public function submit($id_acara = null){
        if($this->request->getPost()){
            $data = [
                'id_acara' => $id_acara,
                'no_reg_maba' => user()->no_reg,
                'resume' => $this->request->getVar('resume'),
                'password' => $this->request->getVar('password'),
            ];
    
            $query = $this->db->table('data_presensi')->insert($data);
        }

        return redirect()->to(base_url('portal/acara'));
    }
}

?>
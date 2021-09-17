<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $db;

    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index(){
        $data['acara'] = $this->db->table('daftar_acara')->select('*')->get()->getResult();
        if(session()->has('no_reg')){
            $data['kehadiran'] = $this->db->table('data_presensi')->join('daftar_acara', 'daftar_acara.id_acara = data_presensi.id_acara')->where(['no_reg_maba' => user()->no_reg])->get()->getResult();
        }
        return view('home', $data);
    }
}

?>
<?php

namespace App\Controllers;

class Akun extends BaseController
{
    protected $db;

    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function login(){
        return view('login');
    }

    public function login_attempt(){
        $reg = $this->request->getGet('no_reg');
        $pass = $this->request->getGet('password');
        $data = $this->db->table('data_user')->getWhere(['no_reg' => $reg, 'password' => $pass])->getRow();
        
        if(empty($reg) or empty($data)){
            return redirect()->to(base_url('akun/login'));
        }
        
        session()->set('no_reg', $reg);
        return redirect()->to(session()->get('previous_url'));
    }

    public function ganti_password(){
        if(!logged_in()){
            return redirect()->to(base_url('akun/login'));
        }
        return view('ganti-password');
    }

    public function attempt_ganti(){
        if($this->request->getPost()){
            $reg = $this->request->getVar('no_reg');
            $pass = $this->request->getVar('password');
        }
        
        if(session()->has('no_reg')){
            session()->remove('no_reg');
        }

        $this->db->table('data_user')->where(['no_reg' => $reg])->update(['password' => $pass]);
        
        return redirect()->to('akun/login');
    }

    public function logout(){
        if(session()->has('no_reg')){
            session()->remove('no_reg');
        }
        return redirect()->to(base_url());
    }
}

?>
<?php

function logged_in(){
    return session()->has('no_reg') ? true : false;
}

function user(){
    if(!logged_in()){
        return redirect()->to(base_url('akun/login'));
    }
    $db = \Config\Database::connect();
    return $db->table('data_maba')->join('data_user', 'data_user.no_reg = data_maba.no_registrasi')->getWhere(['no_registrasi' => session()->get('no_reg')])->getRow();
}

?>
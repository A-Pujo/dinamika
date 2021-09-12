<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){
        return view('home');
    }

    public function form_penugasan()
    {
        // if(! session()->has('upload_token')){
        //     return redirect()->to($this->client->createAuthUrl());
        // }
        return view('form');
    }

    public function upload(){
        if($this->request->getPost()){
            // $this->client->setAccessToken(session()->get('upload_token'));
            // // membaca token respon dari google drive
            // $this->client->getAccessToken();
    
            // // instansiasi obyek file yg akan diupload ke Google Drive
            // $file = new \Google\Service\Drive\DriveFile();
            // // set nama file di Google Drive disesuaikan dg nama file aslinya
            // $file->setName($_FILES["fileToUpload"]["name"]);
            // // proses upload file ke Google Drive dg multipart
            // $result = $this->service->files->create($file, array(
            //     'data' => file_get_contents($_FILES["fileToUpload"]["tmp_name"]),
            //     'mimeType' => 'application/octet-stream',
            //     'uploadType' => 'multipart'));
            // // menampilkan nama file yang sudah diupload ke google drive
            // $doc_url = 'https://drive.google.com/file/d/'.$result->id.'/view?usp=sharing';
            $url= "https://api.apispreadsheets.com/data/17925/";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $postJSON = json_encode(["data"=> ["nama"=>$this->request->getVar('nama'),"kelompok"=>$this->request->getVar('kelompok'),"dokumen"=>$this->request->getVar('dokumen')]]);
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
            curl_close($curl);
            return redirect()->to(base_url('formulir-penugasan'));
        } else {
            echo 'waho';
        }
    }

    public function oauth2callback(){
        if($code = $this->request->getGet('code')){
            $token = $this->client->fetchAccessTokenWithAuthCode($code);
            // simpan token ke session
            session()->set('upload_token', $token);
            return redirect()->to(base_url());
        }
    }

    public function sessiondes(){
        session_destroy();
        return redirect()->to(base_url());
    }
}

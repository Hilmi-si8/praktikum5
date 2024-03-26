<?php

class manusia {
    public $nama;
    public $email;
    public $pembayaran;
    public $alamat;



    public function __construct($nama, $email, $alamat,){
        $this->nama = $nama;
        $this->email = $email;
        $this->alamat = $alamat;
    }

    public function setNama(){
        return $this->nama;
    }

    public function setemail(){
        return $this->email;
    }

    public function alamat(){
        return $this->alamat;
    }

    public function proses(){
        return $this->pembayaran == 'Menunggu' ? : 'Sukses terbayar';
    }

    public function kode(){
        return $this->kode;
    }
    
   
}



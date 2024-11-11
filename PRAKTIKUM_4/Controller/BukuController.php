<?php

require_once 'Model/listbuku.php';

class BukuController{
    public function jalankan(){

        //menggunakan model
        $daftar_buku_model = new ListBuku();
        $daftar_buku = $daftar_buku_model->getData();

        //mengirum dan menaampilkn data ke view
        include_once "View/BukuView.php";
    }
}


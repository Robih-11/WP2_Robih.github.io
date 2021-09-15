<?php

namespace App\Controllers;

class Contoh1 extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "<h1> Perkenalkan </h1>";
        echo "Nama saya Robih Mahasiswa Universitas Bina Sarana Informatika<br>";
        echo "Kelas 12.3B.37<br>";
        echo "Jurusan Sistem Informasi";
    }
}
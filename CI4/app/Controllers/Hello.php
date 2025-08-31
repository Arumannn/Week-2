<?php

namespace App\Controllers;

class Hello extends BaseController
{
    public function index()
    {
        echo "<h1>Hello World dari CodeIgniter 4!</h1>";
        echo "<p>Selamat datang di pembelajaran CI4</p>";
        echo "<p>Database: mahasiswa, Tabel: biodata</p>";
    }
}
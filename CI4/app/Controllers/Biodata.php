<?php

namespace App\Controllers;

use App\Models\BiodataModel;

class Biodata extends BaseController
{
    protected $biodataModel;
    
    public function __construct()
    {
        $this->biodataModel = new BiodataModel();
    }
    
    public function index()
    {
        $data['biodata'] = $this->biodataModel->findAll();
        $data['title'] = 'Data Biodata Mahasiswa';
        
        return view('biodata/index', $data);
    }
}
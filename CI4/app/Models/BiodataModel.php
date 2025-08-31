<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table = 'biodata';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim', 'nama_lengkap', 'jenis_kelamin', 'tanggal_lahir'];
    protected $useTimestamps = false;
    
    // Method pencarian
    public function searchBiodata($keyword)
    {
        return $this->like('nama_lengkap', $keyword)
                    ->orLike('nim', $keyword)
                    ->findAll();
    }
}
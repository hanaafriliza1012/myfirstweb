<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $useTimestamps = true;
    protected $allowedFields = ['npm', 'nama', 'email', 'jurusan', 'foto'];

    public function getMahasiswa($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class KopiModel extends Model
{
    protected $table = 'kopi';

    public function getKopiController($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}

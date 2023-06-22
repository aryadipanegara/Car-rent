<?php

namespace App\Models;

use CodeIgniter\Model;

class Account_model extends Model
{
    protected $table = 'tabel_merk';
    protected $primaryKey = 'merk_id';
    protected $allowedFields = ['merk_nama', 'merk_create'];

    public function getMerk()
    {
        return $this->findAll();
    }

    public function saveMerk($data)
    {
        return $this->insert($data);
    }

    public function deleteMerk($id)
    {
        return $this->delete($id);
    }

    public function updateMerk($id, $data)
    {
        return $this->update($id, $data);
    }
}

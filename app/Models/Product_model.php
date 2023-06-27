<?php

namespace App\Models;

use CodeIgniter\Model;

class Product_model extends Model
{
    protected $table = 'tabel_mobil';

    public function getProduct()
    {
        return $this->db->table($this->table)
            ->join('tabel_merk', 'tabel_mobil.mobil_id_merk = tabel_merk.merk_id')
            ->join('tabel_jenis', 'tabel_mobil.mobil_id_jenis = tabel_jenis.jenis_id')
            ->get()->getResultArray();
    }

    public function getProductDetail($id)
    {
        return $this->db->table($this->table)
            ->join('tabel_merk', 'tabel_mobil.mobil_id_merk = tabel_merk.merk_id')
            ->join('tabel_jenis', 'tabel_mobil.mobil_id_jenis = tabel_jenis.jenis_id')
            ->where('mobil_id', $id)
            ->get()->getResultArray();
    }

    public function saveType($data)
    {
        $query = $this->db->table('tabel_jenis')->insert($data);
        return $query;
    }

    public function updateType($data, $id)
    {
        $query = $this->db->table('tabel_jenis')->update($data, ['jenis_id' => $id]);
        return $query;
    }

    public function deleteType($id)
    {
        $query = $this->db->table('tabel_jenis')->delete(['jenis_id' => $id]);
        return $query;
    }
}

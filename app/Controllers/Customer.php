<?php

namespace App\Controllers;

use App\Models\Customer_model;
use CodeIgniter\HTTP\IncomingRequest;

class Customer extends BaseController
{
    public function index()
    {
        $model = new Customer_model();
        $data['customer'] = $model->getCustomer()->getResultArray();
        echo view('backend/v_customer', $data);
    }

    public function save()
    {
        $model = new Customer_model();
        $data = [
            'penyewa_nama' => $this->request->getVar('name'),
            'penyewa_email' => $this->request->getVar('email'),
            'penyewa_password' => $this->request->getVar('password'),
            'penyewa_alamat' => $this->request->getVar('alamat'),
            'penyewa_no_telp' => $this->request->getVar('nohp')
        ];
        $model->saveCustomer($data);
        return redirect()->to('/product');
    }

    public function update()
    {
        $model = new Customer_model();
        $id = $this->request->getVar('id');
        $data = [
            'jenis_nama' => $this->request->getVar('name')
        ];
        $model->updateType($data, $id);
        return redirect()->to('/carstype');
    }

    public function delete()
    {
        $model = new Customer_model();
        $id = $this->request->getVar('id');
        $model->deleteType($id);
        return redirect()->to('/carstype');
    }
}

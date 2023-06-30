<?php

namespace App\Controllers;

use App\Models\Product_model;

class Checkout extends BaseController
{
    public function index($id)
    {
        $model = new Product_model();
        $data['db_rentalmobil'] = $model->getProductDetail($id);
        return view('v_checkout', $data);
    }
    
}

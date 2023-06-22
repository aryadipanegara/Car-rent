<?php

namespace App\Controllers;

use App\Models\Account_model;

class Account extends BaseController
{
    public function index()
{
    $model = new Account_model();
    $data['accounts'] = $model->findAll(); // Retrieve all rows from the "accounts" table
    return view('v_account', $data);
}

}

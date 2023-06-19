<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ManageUser extends Controller
{
    public function index()
    {
        return view('backend/v_manageuser');
    }
}

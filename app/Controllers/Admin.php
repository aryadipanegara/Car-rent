<?php

namespace App\Controllers;



class Admin extends BaseController
{
    public function index(){
        return view('Layout/v_beranda');
    }
}
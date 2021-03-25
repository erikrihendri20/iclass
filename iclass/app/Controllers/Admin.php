<?php

namespace App\Controllers;

use App\Models\Users_Model;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
    
}

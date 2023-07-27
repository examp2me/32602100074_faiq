<?php

namespace App\Controllers;

use CodeIgniter\controller;

class Pages extends Controller{
    public function profile()
    {
        return view('profile');
    }
}
?>
<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home/pages/home_pages');
    }
    public function user()
    {
        return view('santri/index');
    }
}

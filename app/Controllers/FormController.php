<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FormController extends BaseController
{
    public function index()
    {
        return view('home/pages/form_pages');
    }
}

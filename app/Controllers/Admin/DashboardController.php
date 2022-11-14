<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('admin/layout/header')
            . view('admin/layout/sidebar')
            . view('admin/dashboard/index')
            . view('admin/layout/footer');
    }
}

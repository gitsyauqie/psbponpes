<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'breadcrumbs_title' => 'Dashboard',
            'breadcrumbs_item' => 'Administrator',
            'breadcrumbs_item2' => 'Daftarkan Santri',
            'menu_active' => 'daftarkan_santri',
            'menu_dropdown_open' => 'validasi'
        ];

        return view('admin/layout/admin', $data);
    }
}

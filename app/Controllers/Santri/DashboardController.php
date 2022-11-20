<?php

namespace App\Controllers\Santri;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    

    {
        $data = [
            'breadcrumbs_title' => 'Halaman Profil',
            'breadcrumbs_item' => 'Santri',
            'breadcrumbs_item2' => 'Profil Saya',
            'menu_active' => 'profil-saya',
        ];
        return view('santri/pages/dashboard',$data);
    }
}

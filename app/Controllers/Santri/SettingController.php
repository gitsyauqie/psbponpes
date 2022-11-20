<?php

namespace App\Controllers\Santri;

use App\Controllers\BaseController;

class SettingController extends BaseController
{
    public function index()
    

    {
        $data = [
            'breadcrumbs_title' => 'Data Santri',
            'breadcrumbs_item' => 'Santri',
            'breadcrumbs_item2' => 'Pengaturan',
            'menu_active' => 'setting',
        ];
        return view('santri/pages/setting',$data);
    }
}

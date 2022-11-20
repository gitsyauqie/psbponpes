<?php

namespace App\Controllers\Santri;

use App\Controllers\BaseController;

class DataSantriController extends BaseController
{
    public function index()
    

    {
        $data = [
            'breadcrumbs_title' => 'Data Santri',
            'breadcrumbs_item' => 'Santri',
            'breadcrumbs_item2' => 'Data Santri',
            'menu_active' => 'data-santri',
        ];
        return view('santri/pages/data_santri',$data);
    }
}

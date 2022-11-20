<?php

namespace App\Controllers;

class Home extends BaseController
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

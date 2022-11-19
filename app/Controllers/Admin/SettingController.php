<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class SettingController extends BaseController
{
  public function index()
  {
    $data['breadcrumbs_title'] = 'Pangkalan Data';
    $data['breadcrumbs_item'] = 'Kelola';
    $data['breadcrumbs_item2'] = 'Setting Tahun Ajaran';
    $data['menu_active'] = 'tahunajaran';
    $data['menu_dropdown_open'] = 'kelola';
    $data['content'] = 'admin/dashboard/index';
    return view('admin/dashboard/index', $data);
  }
}

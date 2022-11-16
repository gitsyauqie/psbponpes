<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class SantriController extends BaseController
{
  public function mtsindex()
  {
    $data['breadcrumbs_title'] = 'Pendaftaran';
    $data['breadcrumbs_item'] = 'Validasi Data';
    $data['breadcrumbs_item2'] = 'Santri MTs';
    $data['menu_active'] = 'mts';
    $data['menu_dropdown_open'] = 'validasi';
    return view('admin/santri/mtsindex', $data);
  }

  public function maindex()
  {
    $data['breadcrumbs_title'] = 'Pendaftaran';
    $data['breadcrumbs_item'] = 'Validasi Data';
    $data['breadcrumbs_item2'] = 'Santri MA';
    $data['menu_active'] = 'ma';
    $data['menu_dropdown_open'] = 'validasi';
    return view('admin/santri/maindex', $data);
  }
}

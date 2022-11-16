<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class SantriController extends BaseController
{
  public function validasi($param)
  {
    $data['breadcrumbs_title'] = 'Pendaftaran';
    $data['breadcrumbs_item'] = 'Validasi Data';
    $data['breadcrumbs_item2'] = 'Santri ' . $param . '';
    $data['menu_active'] = 'validasi_' . $param;
    $data['menu_dropdown_open'] = 'validasi';
    return view('admin/santri/validasi' . $param . '', $data);
  }

  public function tahaptes($param)
  {
    $data['breadcrumbs_title'] = 'Pendaftaran';
    $data['breadcrumbs_item'] = 'Tahap Tes';
    $data['breadcrumbs_item2'] = 'Santri ' . $param . '';
    $data['menu_active'] = 'tahaptes_' . $param;
    $data['menu_dropdown_open'] = 'tahaptes';
    return view('admin/santri/tahaptes_' . $param . '', $data);
  }

  public function pembayaran($param)
  {
    $data['breadcrumbs_title'] = 'Pendaftaran';
    $data['breadcrumbs_item'] = 'Pembayaran';
    $data['breadcrumbs_item2'] = 'Santri ' . $param . '';
    $data['menu_active'] = 'pembayaran_' . $param;
    $data['menu_dropdown_open'] = 'pembayaran';
    return view('admin/santri/pembayaran_' . $param . '', $data);
  }

  public function kamar($param)
  {
    $data['breadcrumbs_title'] = 'Pendaftaran';
    $data['breadcrumbs_item'] = 'Penentuan Kamar';
    $data['breadcrumbs_item2'] = 'Santri ' . $param . '';
    $data['menu_active'] = 'kamar_' . $param;
    $data['menu_dropdown_open'] = 'kamar';
    return view('admin/santri/kamar_' . $param . '', $data);
  }
}

<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class UserListController extends BaseController
{
  public function index()
  {
    $data['breadcrumbs_title'] = 'Daftar User';
    $data['breadcrumbs_item'] = 'Pengaturan';
    $data['breadcrumbs_item2'] = 'Daftar User';
    $data['menu_active'] = 'user-list';
    return view('admin/dashboard/index', $data);
  }
}

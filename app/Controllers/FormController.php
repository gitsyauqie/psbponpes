<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SantriModel;


class FormController extends BaseController
{

    public function pendaftaran()
    {
        $validation = \Config\Services::validation();
        $data = [
            'title' => "Formulir Pendaftaran",
            'validation' => $validation
        ];

        return view('home/pages/form_pages', $data);
          
    }

    public function simpan(){

        helper(['form', 'url']);

        $validation = $this->validate([
            // 'nik' => [
            //     'rules'  => 'required',
            //     'errors' => [
            //         'required' => 'Masukkan Judul Post.'
            //     ]
            // ],
            'nama'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
        ]);

        if(!$validation) {

            return view('home/pages/form_pages', [
                'validation' => $this->validator
            ]);

        } else {

            $santriModel = new SantriModel();
            $santriModel->insert([
                'nama'   => $this->request->getVar('nama'),
                'no_wa' => $this->request->getVar('no_wa'),
            ]);

            session()->setFlashdata('message', 'data Berhasil Disimpan');

            return redirect()->to('/pendaftaran');
        }

    }
}

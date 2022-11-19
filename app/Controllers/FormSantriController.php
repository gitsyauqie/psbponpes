<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WaliModel;
use App\Models\SantriModel;
use CodeIgniter\Validation\StrictRules\Rules;

class FormSantriController extends BaseController
{
  
    
    public function santri()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('home/pages/santri_pages', $data);
          
    }


    public function simpanSantri(){

        $rules = [
            'nik' => [
                'rules'  => 'required|max_length[16]|is_unique[santri.nik]',
                'errors' => [
                    'required' => 'NIK harus di isi !',
                    'max_length' => 'NIK panjang maksimal 16 karakter !',
                    'is_unique' => 'NIK sudah terdaftar !',
                ],
            ],
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} harus di isi !',
                    
                ],
            ],
            'no_wa' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} harus di isi !',
                    
                ],
            ],
            'tmp_lahir' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} harus di isi !',
                    
                ],
            ],
            'tgl_lahir' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} harus di isi !',
                    
                ],
            ],
            'password' => [
                'rules'  => 'required|min_length[6]',
                'errors' => [
                    'required' => '{field} harus di isi !',
                    'min_length' => '{field} panjang minimal 6 karakter !',
                    
                ],
            ],
            'gol_darah' => [
                'rules'  => 'required|max_length[2]',
                'errors' => [
                    'required' => '{field} Harus Di isi !',
                    'max_length' => '{field} panjang maksimal 2 karakter !',
                    
                ],
            ],
            'gender' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} harus di isi !',
                    
                ],
            ],
            'email' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} harus di isi !',
                    
                ],
            ],
           
            
        ];

        if (!$this->validate($rules)) {
            $validation =  \Config\Services::validation();
            return redirect()->to('/pendaftaran/step-1')->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.jpg';
        }else{
            $namaFoto = $fileFoto->getRandomName();

            $fileFoto->move('img', $namaFoto);
        }


        $santriModel = new SantriModel();
        $santriModel->insert([
            'nik'   => $this->request->getVar('nik'),
            'nama'   => $this->request->getVar('nama'),
            'no_wa' => $this->request->getVar('no_wa'),
            'tmp_lahir' => $this->request->getVar('tmp_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'gol_darah' => $this->request->getVar('gol_darah'),
            'gender' => $this->request->getVar('gender'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'email' => $this->request->getVar('email'),
            // 'ref_jenjang_id' => $this->request->getVar('ref_jenjang_id'),
            'foto' => $namaFoto,
        ]);

        session()->setFlashdata('message', 'data Berhasil Disimpan');

        return redirect()->to('/pendaftaran/step-2');
        

    }

    
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PrestasiModel;
use App\Models\SantriModel;
use CodeIgniter\Validation\StrictRules\Rules;

class FormPrestasiController extends BaseController
{
  

    public function prestasi()
    {

        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('home/pages/prestasi_pages', $data);
          
    }


    public function simpanPrestasi(){

        $rules = [
            
            'prestasi' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} harus di isi !',
                    
                ],
            ],
            'juara' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} harus di isi !',
                    
                ],
            ],
            'file_prestasi' => [
                'rules' => 'max_size[file_prestasi,1000]',
                'errors' => [
                    'mime_in' => 'harus PDF',
                    

                ],
            ],
           
            
        ];

        if (!$this->validate($rules)) {
            $validation =  \Config\Services::validation();
            return redirect()->to('/pendaftaran/step-4')->withInput();
        }

        $filePrestasi = $this->request->getFile('file_prestasi');
        $namaPrestasi = $filePrestasi->getRandomName();
        $filePrestasi->move(WRITEPATH.'uploads/pdf', $namaPrestasi);
        

        $prestasi = new PrestasiModel();
        $prestasi->insert([
            // 'nik'   => $this->request->getVar('nik'),
            'prestasi'   => $this->request->getVar('prestasi'),
            'juara' => $this->request->getVar('juara'),
            'tingkat' => $this->request->getVar('tingkat'),
            'file_prestasi' => $namaPrestasi,
        ]);

        session()->setFlashdata('message', 'data Berhasil Disimpan');

        return redirect()->to('/pendaftaran/step-1');
        

    }

   
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WaliModel;
use App\Models\SantriModel;
use CodeIgniter\Validation\StrictRules\Rules;

class FormWaliController extends BaseController
{
  
    public function wali()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('home/pages/wali_pages',$data);
          
    }
    
    public function simpanWali(){

        $rules = [
            'nik_ayah' => [
                'rules'  => 'required|max_length[16]|is_unique[santri_ortu.nik_ayah]',
                'errors' => [
                    'required' => 'NIK harus di isi !',
                    'max_length' => 'NIK panjang maksimal 16 karakter !',
                    'is_unique' => 'NIK sudah terdaftar !',
                ],
            ],
            'nama_ayah' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} harus di isi !',
                    
                ],
            ],
            'telpon_ayah' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} harus di isi !',
                    
                ],
            ],
            'status_ayah' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} harus di isi !',
                    
                ],
            ],
           
            
        ];

        if (!$this->validate($rules)) {

            return redirect()->to('/pendaftaran/step-2')->withInput();
        }

        // $dataNik = $this->santriModel->find('nik');

        $fileFoto = $this->request->getFile('file_ktp_ayah');
        $fileFoto = $this->request->getFile('file_ktp_ibu');
    
        $namaFoto = $fileFoto->getRandomName();

        $fileFoto->move('img', $namaFoto);

        $waliModel = new WaliModel();
        $waliModel->insert([
            
            'nama_ayah'   => $this->request->getVar('nama_ayah'),
            'nik_ayah' => $this->request->getVar('nik_ayah'),
            'tgl_lahir_ayah' => $this->request->getVar('tgl_lahir_ayah'),
            'tmp_lahir_ayah' => $this->request->getVar('tmp_lahir_ayah'),
            'telpon_ayah' => $this->request->getVar('telpon_ayah'),
            'status_ayah' => $this->request->getVar('status_ayah'),
            'keadaan_ayah' => $this->request->getVar('keadaan_ayah'),
            'pendidikan_ayah' => $this->request->getVar('pendidikan_ayah'),
            'pekerjaan_ayah_id' => $this->request->getVar('pekerjaan_ayah_id'),
            'penghasilan' => $this->request->getVar('penghasilan'),
            'alamat_ayah' => $this->request->getVar('alamat_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'nik_ibu' => $this->request->getVar('nik_ibu'),
            'tgl_lahir_ibu' => $this->request->getVar('tgl_lahir_ibu'),
            'telpon_ibu' => $this->request->getVar('telpon_ibu'),
            'status_ibu' => $this->request->getVar('status_ibu'),
            'keadaan_ibu' => $this->request->getVar('keadaan_ibu'),
            'pendidikan_ibu' => $this->request->getVar('pendidikan_ibu'),
            'pekerjaan_ibu' => $this->request->getVar('pekerjaan_ibu'),
            'penghasilan_ibu' => $this->request->getVar('penghasilan_ibu'),
            'nama_wali' => $this->request->getVar('nama_wali'),
            'nik_wali' => $this->request->getVar('nik_wali'),
            'alamat_wali' => $this->request->getVar('alamat_wali'),
            'telpon_wali' => $this->request->getVar('telpon_wali'),
            'file_ktp_ayah' => $namaFoto,
            'file_ktp_ibu' => $namaFoto,
        ]);

        return redirect()->to('/pendaftaran/step-3');
        

    }
}

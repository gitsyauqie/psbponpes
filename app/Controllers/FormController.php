<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WaliModel;
use App\Models\SantriModel;
use CodeIgniter\Validation\StrictRules\Rules;

class FormController extends BaseController
{
  
    
    public function santri()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('home/pages/santri_pages', $data);
          
    }
    public function wali()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('home/pages/wali_pages',$data);
          
    }
    public function pendidikan()
    {
        return view('home/pages/pendidikan_pages');
          
    }

    public function prestasi()
    {
        return view('home/pages/prestasi_pages');
          
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
            'tgl_daftar' => [
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
            'tgl_daftar' => $this->request->getVar('tgl_daftar'),
            'ref_jenjang_id' => $this->request->getVar('ref_jenjang_id'),
            'ref_jenispendaftaran_id' => $this->request->getVar('ref_jenispendaftaran_id'),
            'foto' => $namaFoto,
        ]);

        session()->setFlashdata('message', 'data Berhasil Disimpan');

        return redirect()->to('/pendaftaran/step-2');
        

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

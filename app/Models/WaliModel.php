<?php

namespace App\Models;

use CodeIgniter\Model;

class WaliModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'santri_data_ortu';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nik','nama_ayah','nik_ayah','tgl_lahir_ayah','tmp_lahir_ayah','telpon_ayah','status_ayah','keadaan_ayah','file_ktp_ayah','pendidikan_ayah','pekerjaan_ayah_id','penghasilan','alamat_ayah','nama_ibu','nik_ibu','tgl_lahir_ibu','tmp_lahir_ibu','telpon_ibu','status_ibu','keadaan_ibu','file_ktp_ibu','pendidikan_ibu','pekerjaan_ibu','penghasilan_ibu','nama_wali','nik_wali','alamat_wali','telpon_wali','is_complate'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}

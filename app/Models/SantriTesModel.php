<?php

namespace App\Models;

use CodeIgniter\Model;

class SantriTesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'santri_tes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nik','jadwal_tes_id','status','nilai_quran','nilai_hafalan','nilai_kitab','nilai_fasholatan','nilai_psikotes','catatan_quran','catatan_hafalan','catatan_kitab','catatan_fasholatan','catatan_psikotes','status_quran','status_hafalan','status_kitab','status_kitab','status_kitab','status_kitab','rata'];

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

<?php
namespace App\EntityMaps;

use CodeIgniter\Model;

class OktatasiModMap extends Model
{
    protected $table      = 'oktatasi_mod';
    protected $primaryKey = 'id';

    protected $returnType     = '\App\Entities\OktatasiModEntity';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['megnevezes', 'idotartam_perc'];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomModel extends Model
{
    protected $DBGroup   = 'default';
    protected $table            = 'rooms';
    protected $primaryKey       = 'room_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'room_price',
        'room_category',
        'room_max_adults',
        'room_max_children'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'room_created_at';
    protected $updatedField  = 'room_updated_at';
    protected $deletedField  = 'room_deleted_at';

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

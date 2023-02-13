<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\RoomCategoryModel;

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
        'price',
        'roomcategory_id',
        'number',
        'status'
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


    public function getAllRooms() {
        return $this->db->table('rooms t1')->join('roomcategories t2', ' t1.roomcategory_id = t2.id')
        ->get()
        ->getResultArray();
    }

}

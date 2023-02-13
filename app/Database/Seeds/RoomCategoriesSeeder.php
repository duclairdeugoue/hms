<?php

namespace App\Database\Seeds;

use App\Models\RoomCategoryModel;
use CodeIgniter\Database\Seeder;

class RoomCategoriesSeeder extends Seeder
{
    public function run()
    {
        $roomcategory_object = new RoomCategoryModel();

        $roomcategory_object->insertBatch([
            ["name" => "Single"],
            ["name" => "Double"],
            ["name" => "Quad"],
            ["name" => "King"],
            ["name" => "Suite"],
            ["name" => "Villa"]
        ]);
    }
}

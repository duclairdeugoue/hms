<?php

namespace App\Database\Seeds;

use App\Models\RoomFoodModel;
use CodeIgniter\Database\Seeder;

class RoomFoodsSeeder extends Seeder
{
    public function run()
    {
        $roomfood_object = new RoomFoodModel();

        $roomfood_object->insertBatch([
            ["name" => "Free Breakfast"],
            ["name" => "Free Launch"],
            ["name" => "Free Dinner"],
            ["name" => "Free Breakfast and Dinner"],
            ["name" => "Free Welcome Drink"],
            ["name" => "No Free Food"]
        ]);
    }
}

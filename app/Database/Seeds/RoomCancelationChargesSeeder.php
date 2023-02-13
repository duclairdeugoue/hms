<?php

namespace App\Database\Seeds;

use App\Models\RoomCancelationChargeModel;
use CodeIgniter\Database\Seeder;

class RoomCancelationChargesSeeder extends Seeder
{
    public function run()
    {
        $rcc_object = new RoomCancelationChargeModel();

        $rcc_object->insertBatch([
            ["name" =>  "Free"],
            ["name" =>  "5% Before 24hours"],
            ["name" =>  "No Cancelation allow"]
        ]);
    }
}

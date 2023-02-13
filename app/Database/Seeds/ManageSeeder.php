<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ManageSeeder extends Seeder
{
    public function run()
    {
        $this->call('RoomCancelationChargesSeeder');
        $this->call('RoomCategoriesSeeder');
        $this->call('RoomFoodsSeeder');
    }
}

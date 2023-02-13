<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRoom extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'number' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'roomcategory_id' => [
                'type' => 'int',
                'null' => true,
            ],
            'ac' => [
                'type'  => "ENUM('AC','NO AC')",
                'null'  => false
            ],
            'roomfood_id' => [
                'type' => 'int',
                'null' => true,
            ],
            'bedcount' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'roomcancelationcharges_id' => [
                'type'       => 'INT',
                'constraint' => '20',
                'null' => true,

            ],
            'price' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'status' => [
                'type'      => "ENUM('unavailable', 'available')",
                'default'   => "unavailable"    
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'created_at' => [
                'type'      => 'DATETIME'
            ],
            'updated_at' => [
                'type'      => 'DATETIME'
            ],
            'deleted_at' => [
                'type'      => 'DATETIME'
            ],
        ]);
        $this->forge->addKey('id', true);

        // $this->forge->addForeignKey('roomcategory_id','roomcategories','id', 'CASCADE','CASCADE');
        // $this->forge->addForeignKey('roomfood_id','roomfoods','id', 'CASCADE','CASCADE');
        // $this->forge->addForeignKey('roomcancelationcharges_id','roomcancelationcharges','id', 'CASCADE','CASCADE');
        $this->forge->createTable('rooms');
    }

    public function down()
    {
        $this->forge->dropTable('rooms');
    }
}

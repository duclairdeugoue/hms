<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRoom extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'room_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'room_price' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'room_category' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'room_max_adults' => [
                'type'       => 'INT',
                'constraint' => '20',
            ],
            'room_max_children' => [
                'type'       => 'INT',
                'constraint' => '20',
            ],
            'room_created_at' => [
                'type'      => 'DATETIME'
            ],
            'room_updated_at' => [
                'type'      => 'DATETIME'
            ],
            'room_deleted_at' => [
                'type'      => 'DATETIME'
            ],
        ]);
        $this->forge->addKey('room_id', true);
        $this->forge->createTable('rooms');
    }

    public function down()
    {
        $this->forge->dropTable('rooms');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRoomCategoryTable extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
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
        ];

        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->createTable('roomcategories');
    }

    public function down()
    {
        $this->forge->dropTable('roomcategories');
    }
}

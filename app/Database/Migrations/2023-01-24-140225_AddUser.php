<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'user_email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'user_password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'user_created_at' => [
                'type'      => 'DATETIME'
            ],
            'user_updated_at' => [
                'type'      => 'DATETIME'
            ],
            'user_deleted_at' => [
                'type'      => 'DATETIME'
            ],
        ]);

        $this->forge->addKey('user_id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}

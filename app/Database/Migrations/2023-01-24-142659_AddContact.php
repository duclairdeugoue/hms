<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddContact extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'contact_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'customer_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'customer_phone_number' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'customer_email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'customer_message' => [
                'type' => 'TEXT',
            ],
            
        ]);
        $this->forge->addKey('contact_id', true);
        $this->forge->createTable('contacts');
    }

    public function down()
    {
        $this->forge->dropTable('contacts');
    }
}

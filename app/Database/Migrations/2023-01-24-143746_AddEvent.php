<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEvent extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'event_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'event_date' => [
                'type'           => 'DATE',
            ],
            'event_title' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'event_slug' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'event_created_at' => [
                'type'      => 'DATETIME'
            ],
            'event_updated_at' => [
                'type'      => 'DATETIME'
            ],
            'event_deleted_at' => [
                'type'      => 'DATETIME'
            ],
        ]);

        $this->forge->addKey('event_id', true);
        $this->forge->createTable('events');
    }

    public function down()
    {
        $this->forge->dropTable('events');
    }
}

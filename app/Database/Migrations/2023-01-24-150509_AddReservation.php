<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddReservation extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'reservation_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'cust_name' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'cust_email' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'cust_phonenumber' => [
                'type'       => 'INT',
                'constraint' => '60',
            ],
            'check_in' => [
                'type'           => 'DATE',
            ],
            'check_out' => [
                'type'           => 'DATE',
            ],
            'no_of_adult' => [
                'type'       => 'INT',
                'constraint' => '20',
            ],
            'no_of_children' => [
                'type'       => 'INT',
                'constraint' => '20',
            ],
            'reservation_slug' => [
                'type' => 'TEXT',
            ],
            'reservation_created_at' => [
                'type'      => 'DATETIME'
            ],
            'reservation_updated_at' => [
                'type'      => 'DATETIME'
            ],
            'reservation_deleted_at' => [
                'type'      => 'DATETIME'
            ],
        ]);

        $this->forge->addKey('reservation_id', true);
        $this->forge->createTable('reservations');
    }

    public function down()
    {
        $this->forge->dropTable('reservations');
    }
}

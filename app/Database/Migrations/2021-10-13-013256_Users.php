<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'name'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],
            'email'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],
            'password'      => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],

            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}

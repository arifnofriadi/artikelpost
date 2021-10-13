<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment'=> true
            ],
            'title'     => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'description'   => [
                'type'          => 'TEXT'
            ],

            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('artikels', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('artikels');
    }
}

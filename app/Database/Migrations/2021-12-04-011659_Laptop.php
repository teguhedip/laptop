<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Laptop extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'brand'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'tipe'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'status'      => [
                'type'           => 'ENUM',
                'constraint'     => ['work', 'education', 'gammer'],
                'default'        => 'work',
            ]
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('laptop', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        // menghapus tabel news
        $this->forge->dropTable('laptop');
    }
}

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
            'type'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'status'      => [
                'type'           => 'ENUM',
                'constraint'     => ['work', 'education', 'gammer'],
                'default'        => 'work',
            ],
            'sistem_operasi'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'processor'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'display'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'memory'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'storage'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'graphics'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'baterai'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'konektivitas'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'audio'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'weight'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'dimension'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'keyboard'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'ports'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'warna'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'preloaded_software'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
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

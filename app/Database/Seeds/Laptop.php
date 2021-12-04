<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Laptop extends Seeder
{
    public function run()
    {
        // membuat data
        $news_data = [
            [
                'brand' => 'Lenovo',
                'tipe'  => 'G40 50',
                'status' => 'education'
            ],
            [
                'brand' => 'Asus',
                'tipe'  => 'P40e',
                'status' => 'gammer'
            ],
            [
                'brand' => 'HP',
                'tipe'  => 'Elitebok',
                'status' => 'work'
            ],
        ];

        foreach ($news_data as $data) {
            // insert semua data ke tabel
            $this->db->table('laptop')->insert($data);
        }
    }
}

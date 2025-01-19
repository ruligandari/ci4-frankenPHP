<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TblUserSeeder extends Seeder
{
    public function run()
    {
        // buat data dengan faker
        $faker = \Faker\Factory::create('id_ID');
        $data = [];
        for ($i = 0; $i < 5000; $i++) {
            $data[] = [
                'nama' => $faker->name,
                'alamat' => $faker->address
            ];
        }


        // Using Query Builder
        $this->db->table('tbl_user')->insertBatch($data);
    }
}

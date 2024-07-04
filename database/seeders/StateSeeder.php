<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['id' => 1, 'name' => 'Distrito Federal', 'uf' => 'DF', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Minas Gerais', 'uf' => 'MG', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Rio de Janeiro', 'uf' => 'RJ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'São Paulo', 'uf' => 'SP', 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('states')->insert($states);
    }
}

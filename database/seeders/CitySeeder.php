<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'São Paulo', 'state_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Guarulhos', 'state_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Campinas', 'state_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'São Bernardo do Campo', 'state_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'São José dos Campos', 'state_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Santo André', 'state_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ribeirão Preto', 'state_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Osasco', 'state_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sorocaba', 'state_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mauá', 'state_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Belo Horizonte', 'state_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Uberlândia', 'state_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Contagem', 'state_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Juiz de Fora', 'state_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Betim', 'state_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Montes Claros', 'state_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ribeirão das Neves', 'state_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Uberaba', 'state_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Governador Valadares', 'state_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ipatinga', 'state_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rio de Janeiro', 'state_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'São Gonçalo', 'state_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Duque de Caxias', 'state_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nova Iguaçu', 'state_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Niterói', 'state_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Belford Roxo', 'state_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Campos dos Goytacazes', 'state_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'São João de Meriti', 'state_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Petrópolis', 'state_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Volta Redonda', 'state_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Brasília', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ceilândia', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Taguatinga', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Planaltina', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gama', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Samambaia', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Santa Maria', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Recanto das Emas', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sobradinho', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Águas Claras', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('cities')->insert($cities);
    }
}

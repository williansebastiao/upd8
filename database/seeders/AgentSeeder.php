<?php

namespace Database\Seeders;

use App\Models\Agent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agents = [
            [
                "state_id" => 1,
                "city_id" => 31,
                "first_name" => "Nicole",
                "last_name" => "Santos",
                "email" => "nicoles@gmail.com",
            ],
            [
                "state_id" => 1,
                "city_id" => 32,
                "first_name" => "Davi",
                "last_name" => "Costa",
                "email" => "davi@gmail.com",
            ],
            [
                "state_id" => 1,
                "city_id" => 33,
                "first_name" => "Pietra",
                "last_name" => "Conceição",
                "email" => "pietra@gmail.com",
            ],
            [
                "state_id" => 1,
                "city_id" => 34,
                "first_name" => "Luiz",
                "last_name" => "Drumond",
                "email" => "luiz@gmail.com",
            ],
            [
                "state_id" => 1,
                "city_id" => 35,
                "first_name" => "Ryan",
                "last_name" => "Assunção",
                "email" => "ryan@gmail.com",
            ],
            [
                "state_id" => 2,
                "city_id" => 11,
                "first_name" => "Josefa",
                "last_name" => "Rodrigues",
                "email" => "josefa@gmail.com",
            ],
            [
                "state_id" => 2,
                "city_id" => 12,
                "first_name" => "Henry",
                "last_name" => "Cunha",
                "email" => "henry@gmail.com",
            ],
            [
                "state_id" => 2,
                "city_id" => 13,
                "first_name" => "Pedro",
                "last_name" => "Cardoso",
                "email" => "pedro@gmail.com",
            ],
            [
                "state_id" => 2,
                "city_id" => 14,
                "first_name" => "Oliver",
                "last_name" => "Peixoto",
                "email" => "oliver@gmail.com",
            ],
            [
                "state_id" => 2,
                "city_id" => 15,
                "first_name" => "Vitor",
                "last_name" => "Fogaça",
                "email" => "vitor@gmail.com",
            ],
            [
                "state_id" => 3,
                "city_id" => 21,
                "first_name" => "Augusto",
                "last_name" => "Galvão",
                "email" => "augusto@gmail.com",
            ],
            [
                "state_id" => 3,
                "city_id" => 22,
                "first_name" => "Eduardo",
                "last_name" => "Dias",
                "email" => "eduardo@gmail.com",
            ],
            [
                "state_id" => 3,
                "city_id" => 23,
                "first_name" => "Eduardo",
                "last_name" => "Dias",
                "email" => "eduardo.dias@gmail.com",
            ],
            [
                "state_id" => 3,
                "city_id" => 24,
                "first_name" => "Filipe",
                "last_name" => "Pires",
                "email" => "filipe@gmail.com",
            ]
        ];

        foreach ($agents as $agent) {
            Agent::create($agent);
        }
    }
}

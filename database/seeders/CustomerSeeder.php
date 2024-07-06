<?php

namespace Database\Seeders;

use App\Helpers\Str;
use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $customers = [
            [
                "state_id" => 1,
                "city_id" => 31,
                "first_name" => "Nicole",
                "last_name" => "Santos",
                "cpf" => Str::formatCpf("429.556.940-29"),
                "birth" => Str::formatBirth("27/05/2004"),
                "gender" => "F",
                "address" => "Rua Santa Cruz",
            ],
            [
                "state_id" => 1,
                "city_id" => 32,
                "first_name" => "Davi",
                "last_name" => "Costa",
                "cpf" => Str::formatCpf("615.153.225-21"),
                "birth" => Str::formatBirth("14/04/2004"),
                "gender" => "M",
                "address" => "Travessa Santa Luzia",
            ],
            [
                "state_id" => 1,
                "city_id" => 33,
                "first_name" => "Pietra",
                "last_name" => "Conceição",
                "cpf" => Str::formatCpf("902.159.017-46"),
                "birth" => Str::formatBirth("03/07/2004"),
                "gender" => "F",
                "address" => "Rua 40-A",
            ],
            [
                "state_id" => 1,
                "city_id" => 34,
                "first_name" => "Luiz",
                "last_name" => "Drumond",
                "cpf" => Str::formatCpf("728.139.507-85"),
                "birth" => Str::formatBirth("13/05/2004"),
                "gender" => "M",
                "address" => "Praça dos Pardais, s/n",
            ],
            [
                "state_id" => 1,
                "city_id" => 35,
                "first_name" => "Ryan",
                "last_name" => "Assunção",
                "cpf" => Str::formatCpf("342.435.773-15"),
                "birth" => Str::formatBirth("05/06/2004"),
                "gender" => "M",
                "address" => "Rua C",
            ],
            [
                "state_id" => 2,
                "city_id" => 11,
                "first_name" => "Josefa",
                "last_name" => "Rodrigues",
                "cpf" => Str::formatCpf("548.428.946-79"),
                "birth" => Str::formatBirth("14/03/2004"),
                "gender" => "F",
                "address" => "Rua Victor Civita",
            ],
            [
                "state_id" => 2,
                "city_id" => 12,
                "first_name" => "Henry",
                "last_name" => "Cunha",
                "cpf" => Str::formatCpf("276.181.049-05"),
                "birth" => Str::formatBirth("22/01/2004"),
                "gender" => "M",
                "address" => "Vila Quatro Irmãos",
            ],
            [
                "state_id" => 2,
                "city_id" => 13,
                "first_name" => "Pedro",
                "last_name" => "Cardoso",
                "cpf" => Str::formatCpf("694.025.554-04"),
                "birth" => Str::formatBirth("05/03/2004"),
                "gender" => "M",
                "address" => "Rua João Paulo II",
            ],
            [
                "state_id" => 2,
                "city_id" => 14,
                "first_name" => "Oliver",
                "last_name" => "Peixoto",
                "cpf" => Str::formatCpf("623.469.502-70"),
                "birth" => Str::formatBirth("17/01/2004"),
                "gender" => "M",
                "address" => "Rua Nicola Aslan",
            ],
            [
                "state_id" => 2,
                "city_id" => 15,
                "first_name" => "Vitor",
                "last_name" => "Fogaça",
                "cpf" => Str::formatCpf("184.593.141-62"),
                "birth" => Str::formatBirth("16/04/2004"),
                "gender" => "M",
                "address" => "Rua Manoel Américo de França",
            ],
            [
                "state_id" => 3,
                "city_id" => 21,
                "first_name" => "Augusto",
                "last_name" => "Galvão",
                "cpf" => Str::formatCpf("509.354.477-92"),
                "birth" => Str::formatBirth("04/03/2004"),
                "gender" => "M",
                "address" => "Rua Nova Vida",
            ],
            [
                "state_id" => 3,
                "city_id" => 22,
                "first_name" => "Eduardo",
                "last_name" => "Dias",
                "cpf" => Str::formatCpf("673.685.071-10"),
                "birth" => Str::formatBirth("08/05/2004"),
                "gender" => "M",
                "address" => "Escadaria Darcy Marcelino Câmara",
            ],
            [
                "state_id" => 3,
                "city_id" => 23,
                "first_name" => "Eduardo",
                "last_name" => "Dias",
                "cpf" => Str::formatCpf("674.685.071-10"),
                "birth" => Str::formatBirth("08/05/2004"),
                "gender" => "M",
                "address" => "Escadaria Darcy Marcelino Câmara",
            ],
            [
                "state_id" => 3,
                "city_id" => 24,
                "first_name" => "Filipe",
                "last_name" => "Pires",
                "cpf" => Str::formatCpf("599.873.427-01"),
                "birth" => Str::formatBirth("27/01/2004"),
                "gender" => "M",
                "address" => "Travessa do Limão",
            ]
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}

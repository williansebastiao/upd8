<?php

namespace App\Helpers;

class Str
{

    static function formatCpf(string $cpf): string
    {
        return preg_replace('/[^0-9]/', '', $cpf);
    }

    static function formatBirth(string $birth): string
    {
        $value = \DateTime::createFromFormat('d/m/Y', $birth);
        return $value->format('Y-m-d');
    }

}

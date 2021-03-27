<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materiais;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        Materiais::create([
            'nome' => "Cimento",
            'desc' => "
                Peça chave na construção. É um pó fino com propiedades aglomerantes,aglutinantes
                ou ligantes, que se enriquece ao entrar em contato com a água",
            'marca' => "Votoran",
            'quant' => 90

        ]);

        Materiais::create([
            'nome' => "Cimento queimado",
            'desc' => "
                Revestimento de alta qualidade, se encaixa perfeitamente no seu projeto,
                agregando tecnologia e inovação na sua obra e reforma",
            'marca' => "quartzolit",
            'quant' => 20

        ]);

        Materiais::create([
            'nome' => "Trilho TR25",
            'desc' => "
                Trilho para construção de pequena ou grande ligações a serem feitas por trens.
                Vendido por metro.",
            'marca' => "Railroads",
            'quant' => 200

        ]);
        

    }
}

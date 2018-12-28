<?php

use Illuminate\Database\Seeder;

class OrdensPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');
        for ($i=0; $i<50; $i++) {
            DB::table('ordem_de_pagamentos')->insert([
                'nome' => $faker->name,
                'CPF' => $faker->cpf,
                'CNPJ' => $faker->cnpj(false),
                'telefone' => sprintf('(0%s) %s', $faker->areaCode, $faker->landline),
                'endereco' => $faker->address,
                'cidade' => $faker->city,
                'UF' => $faker->regionAbbr,
                'valor' => $faker->randomFloat(2, 12, 150000),
            ]);
        }
    }
}

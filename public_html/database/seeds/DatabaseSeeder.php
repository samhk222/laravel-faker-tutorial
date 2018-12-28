<?php

use Illuminate\Database\Seeder;
// use App\OrdemDePagamento;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OrdensPagamentoSeeder::class);
    }
}

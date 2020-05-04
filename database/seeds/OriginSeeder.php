<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('origins')->insert(['name' => 'E-Mail', 'description' => 'Manifestaçoes por Email']);
        DB::table('origins')->insert(['name' => 'Telefone', 'description' => 'Manifestaçoes por Telefone']);
        DB::table('origins')->insert(['name' => 'Whatsapp', 'description' => 'Manifestaçoes por Whatsapp']);
        DB::table('origins')->insert(['name' => 'Pessoalmente', 'description' => 'Manifestaçoes por Pessoalmente']);
        DB::table('origins')->insert(['name' => 'Carta', 'description' => 'Manifestaçoes por Carta']);
        DB::table('origins')->insert(['name' => 'Facebook', 'description' => 'Manifestaçoes por Facebook']);
        DB::table('origins')->insert(['name' => 'Formulario', 'description' => 'Manifestaçoes por Formulario']);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('types')->insert(['name' => 'Sugestão', 'description' => '']);
        DB::table('types')->insert(['name' => 'Elogio', 'description' => '']);
        DB::table('types')->insert(['name' => 'Denúncia', 'description' => '']);
        DB::table('types')->insert(['name' => 'Reclamação', 'description' => '']);
        DB::table('types')->insert(['name' => 'Solicitação', 'description' => '']);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departments')->insert(['name'=>'Tecnologia da Informação', 'responsible'=>'Bruno Reis Torezan', 'email_responsible'=>'bruno@hlob.com.br','manager'=>'Nadia Antunes Matias Xavier', 'email_manager'=>'nadia@hlob.com.br']);
        DB::table('departments')->insert(['name'=>'Recursos Humanos', 'responsible'=>'Mariana Proença Silva', 'email_responsible'=>'mariana@hlob.com.br','manager'=>'Artemizia Martins', 'email_manager'=>'artemizia@hlob.com.br']);
        DB::table('departments')->insert(['name'=>'Manutenção', 'responsible'=>'César Souza', 'email_responsible'=>'cesar@hlob.com.br','manager'=>'Mirian Roberta Muniz Lara', 'email_manager'=>'mirian@hlob.com.br']);
        
    }
}

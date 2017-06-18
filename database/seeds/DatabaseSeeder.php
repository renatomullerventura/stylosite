<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        
        //$this->call(RitmosTableSeeder::class);
        //$this->call(EscolasTableSeeder::class);
        //$this->call(ProfessoresTableSeeder::class);
        //$this->call(CursosTableSeeder::class);
        //$this->call(AulasTableSeeder::class);
        //$this->call(BannersTableSeeder::class);
        //$this->call(GaleriasFotosVideosTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        
    }
}
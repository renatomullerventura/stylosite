<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuarios')->delete();
        DB::table('usuarios')->insert([
            [
                'nome'     => 'Renato Ventura',
                'nomeusuario' => 'renato',
                'email'    => 're.infotec@gmail.com',
                'password' => Hash::make('awesome'),
            ],
            [
                'nome'     => 'Marcelo',
                'nomeusuario' => 'Marcelinho',
                'email'    => 'stylotatuape@gmail.com',
                'password' => Hash::make('marcelinho_2016'),
            ],
            [
                'nome'     => 'Carlla Serafim',
                'nomeusuario' => 'Carla',
                'email'    => 'stylocarlla@gmail.com',
                'password' => Hash::make('awesome'),
            ]
            
        ]);
    }
}

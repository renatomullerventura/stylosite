<?php

use Illuminate\Database\Seeder;

class EscolasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('escolas')->delete();
        DB::table('escolas')->insert([
            [
                'idescolas'=>1, 
                'nome'=> 'Stylo Country Tatuapé', 
                'created_at'=>date("Y-m-d H:i:s")
            ]
        ]);
    }
}

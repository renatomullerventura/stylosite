<?php

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->delete();
        DB::table('banners')->insert([
            [
                'idbanners' => 1,
                'imagem' => 'imagens/banners/banner1.jpg'
            ],
            [
                'idbanners' => 2,
                'imagem' => 'imagens/banners/banner2.jpg'
            ],
            [
                'idbanners' => 3,
                'imagem' => 'imagens/banners/banner3.jpg'
            ],
            [
                'idbanners' => 4,
                'imagem' => 'imagens/banners/banner4.jpg'
            ],
            [
                'idbanners' => 5,
                'imagem' => 'imagens/banners/banner5.jpg'
            ],
            
        ]);
    }
}

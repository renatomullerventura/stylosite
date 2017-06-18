<?php

use Illuminate\Database\Seeder;

class GaleriasFotosVideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('galerias')->delete();
        DB::table('galerias')->insert([
            [
                'idgalerias'=>1,
                'titulo'=>'Churrasco',
                'descricao'=>'Churrasco com os Stylosos',
                'data'=> date("Y-m-d H:i:s"),
                'ativo'=> true
            ]
        ]);
        
        DB::table('fotos_galerias')->delete();
        DB::table('fotos_galerias')->insert([
            [
                'titulo' => 'Churrasco',
                'imagem_url' => 'imagens/midias/1.jpg',
                'idgaleria' => 1
            ],
            [
                'titulo' => 'Churrasco',
                'imagem_url' => 'imagens/midias/2.jpg',
                'idgaleria' => 1
            ],
            [
                'titulo' => 'Churrasco',
                'imagem_url' => 'imagens/midias/3.jpg',
                'idgaleria' => 1
            ],
            [
                'titulo' => 'Churrasco',
                'imagem_url' => 'imagens/midias/4.jpg',
                'idgaleria' => 1
            ]
        ]);
        
        DB::table('videos_galerias')->delete();
        DB::table('videos_galerias')->insert([
            [
                'titulo' => 'Apresentação do Casal Campeão na Fase Final do "Reis da Dança III',
                'descricao' => '',
                'youtube_url' => 'XBcsnSA8H7Q',
                'idgaleria' => 1
            ],
            [
                'titulo' => 'Improviso no final da aula com Emerson Diniz e Caroline Caetano',
                'descricao' => '',
                'youtube_url' => 'DKbKV7B7i74',
                'idgaleria' => 1
            ]
        ]);
        
        
    }
}

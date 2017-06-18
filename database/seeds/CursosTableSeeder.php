<?php

use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('cursos')->delete();
        DB::table('cursos')->insert([
            [
               'idcursos'=>'1',
               'nome'=>'Sertanejo Universitário',
               'dificuldade'=>'Iniciante',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>1
            ],
            [
               'idcursos'=>'2',
               'nome'=>'Sertanejo Universitário',
               'dificuldade'=>'Iniciante I',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>1
            ],
            [
               'idcursos'=>'3',
               'nome'=>'Sertanejo Universitário',
               'dificuldade'=>'Iniciante II',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>1
            ],
            [
               'idcursos'=>'4',
               'nome'=>'Sertanejo Universitário',
               'dificuldade'=>'Iniciante/Intermediário',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>1
            ],
            [
               'idcursos'=>'5',
               'nome'=>'Sertanejo Universitário',
               'dificuldade'=>'Intermediário',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>1
            ],
            
            [
               'idcursos'=>'6',
               'nome'=>'Expressão Feminina',
               'dificuldade'=>'Iniciante',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>4
            ],
            [
               'idcursos'=>'7',
               'nome'=>'Expressão Feminina',
               'dificuldade'=>'Iniciante I',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>4
            ],
            [
               'idcursos'=>'8',
               'nome'=>'Expressão Feminina',
               'dificuldade'=>'Iniciante II',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>4
            ],
            [
               'idcursos'=>'9',
               'nome'=>'Expressão Feminina',
               'dificuldade'=>'Iniciante/Intermediário',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>4
            ],
            [
               'idcursos'=>'10',
               'nome'=>'Expressão Feminina',
               'dificuldade'=>'Intermediário',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>4
            ],
            
            [
               'idcursos'=>'11',
               'nome'=>'Vanera',
               'dificuldade'=>'Iniciante',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>2
            ],
            [
               'idcursos'=>'12',
               'nome'=>'Vanera',
               'dificuldade'=>'Iniciante I',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>2
            ],
            [
               'idcursos'=>'13',
               'nome'=>'Vanera',
               'dificuldade'=>'Iniciante II',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>2
            ],
            [
               'idcursos'=>'14',
               'nome'=>'Vanera',
               'dificuldade'=>'Iniciante/Intermediário',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>2
            ],
            [
               'idcursos'=>'15',
               'nome'=>'Vanera',
               'dificuldade'=>'Intermediário',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>2
            ],
            
            [
               'idcursos'=>'16',
               'nome'=>'Zouk',
               'dificuldade'=>'Iniciante',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>3
            ],
            [
               'idcursos'=>'17',
               'nome'=>'Zouk',
               'dificuldade'=>'Iniciante I',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>3
            ],
            [
               'idcursos'=>'18',
               'nome'=>'Zouk',
               'dificuldade'=>'Iniciante II',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>3
            ],
            [
               'idcursos'=>'19',
               'nome'=>'Zouk',
               'dificuldade'=>'Iniciante/Intermediário',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>3
            ],
            [
               'idcursos'=>'20',
               'nome'=>'Zouk',
               'dificuldade'=>'Intermediário',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>3
            ],
            
            [
               'idcursos'=>'21',
               'nome'=>'Gafieira & Samba Rock',
               'dificuldade'=>'Iniciante',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>5
            ],
            [
               'idcursos'=>'22',
               'nome'=>'Gafieira & Samba Rock',
               'dificuldade'=>'Iniciante I',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>5
            ],
            [
               'idcursos'=>'23',
               'nome'=>'Gafieira & Samba Rock',
               'dificuldade'=>'Iniciante II',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>5
            ],
            [
               'idcursos'=>'24',
               'nome'=>'Gafieira & Samba Rock',
               'dificuldade'=>'Iniciante/Intermediário',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>5
            ],
            [
               'idcursos'=>'25',
               'nome'=>'Gafieira & Samba Rock',
               'dificuldade'=>'Intermediário',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>5
            ],
            
            [
               'idcursos'=>'26',
               'nome'=>'Dança do Ventre',
               'dificuldade'=>'Iniciante',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>7
            ],
            [
               'idcursos'=>'27',
               'nome'=>'Dança do Ventre',
               'dificuldade'=>'Iniciante I',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>7
            ],
            [
               'idcursos'=>'28',
               'nome'=>'Dança do Ventre',
               'dificuldade'=>'Iniciante II',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>7
            ],
            [
               'idcursos'=>'29',
               'nome'=>'Dança do Ventre',
               'dificuldade'=>'Iniciante/Intermediário',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>7
            ],
            [
               'idcursos'=>'30',
               'nome'=>'Dança do Ventre',
               'dificuldade'=>'Intermediário',
               'ativo'=>true,
               'data_inicio'=>date("Y-m-d H:i:s"),
               'idritmo'=>7
            ]
            
        ]);
        
    }
}

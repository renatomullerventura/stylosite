<?php

use Illuminate\Database\Seeder;

class AulasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('aulas')->delete();
        DB::table('aulas')->insert([
            
            //SEGUNDA FEIRA
            [   'idcurso'=>1,
                'dia_semana'=>1,
                'sala'=>1,
                'idprofessor'=>7,
                'idprofessora'=>8,
                'horario_inicial_previsao'=>'19:00:00',
                'horario_final_previsao'=>'20:00:00'
            ],
            [   'idcurso'=>6,
                'dia_semana'=>1,
                'sala'=>2,
                'idprofessor'=>NULL,
                'idprofessora'=>8,
                'horario_inicial_previsao'=>'19:00:00',
                'horario_final_previsao'=>'20:00:00'
            ],
            [   'idcurso'=>5,
                'dia_semana'=>1,
                'sala'=>1,
                'idprofessor'=>7,
                'idprofessora'=>8,
                'horario_inicial_previsao'=>'20:00:00',
                'horario_final_previsao'=>'21:00:00'
            ],
            [   'idcurso'=>11,
                'dia_semana'=>1,
                'sala'=>2,
                'idprofessor'=>10,
                'idprofessora'=>null,
                'horario_inicial_previsao'=>'20:00:00',
                'horario_final_previsao'=>'21:00:00'
            ],
            [   'idcurso'=>5,
                'dia_semana'=>1,
                'sala'=>1,
                'idprofessor'=>7,
                'idprofessora'=>8,
                'horario_inicial_previsao'=>'21:00:00',
                'horario_final_previsao'=>'22:00:00'
            ],
            [   'idcurso'=>15,
                'dia_semana'=>1,
                'sala'=>2,
                'idprofessor'=>11,
                'idprofessora'=>null,
                'horario_inicial_previsao'=>'21:00:00',
                'horario_final_previsao'=>'22:00:00'
            ],
            
            /*TERÇA FEIRA
            [   'idcurso'=>1,
                'dia_semana'=>2,
                'sala'=>1,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'19:00:00',
                'horario_final_previsao'=>'20:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>2,
                'sala'=>2,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'19:00:00',
                'horario_final_previsao'=>'20:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>2,
                'sala'=>1,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'20:00:00',
                'horario_final_previsao'=>'21:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>2,
                'sala'=>2,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'20:00:00',
                'horario_final_previsao'=>'21:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>2,
                'sala'=>1,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'21:00:00',
                'horario_final_previsao'=>'22:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>2,
                'sala'=>2,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'21:00:00',
                'horario_final_previsao'=>'22:00:00'
            ],
            
            //QUARTA FEIRA
            [   'idcurso'=>1,
                'dia_semana'=>3,
                'sala'=>1,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'19:00:00',
                'horario_final_previsao'=>'20:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>3,
                'sala'=>2,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'19:00:00',
                'horario_final_previsao'=>'20:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>3,
                'sala'=>1,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'20:00:00',
                'horario_final_previsao'=>'21:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>3,
                'sala'=>2,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'20:00:00',
                'horario_final_previsao'=>'21:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>3,
                'sala'=>1,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'21:00:00',
                'horario_final_previsao'=>'22:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>3,
                'sala'=>2,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'21:00:00',
                'horario_final_previsao'=>'22:00:00'
            ],
            
            //QUINTA FEIRA
            [   'idcurso'=>1,
                'dia_semana'=>4,
                'sala'=>1,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'19:00:00',
                'horario_final_previsao'=>'20:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>4,
                'sala'=>2,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'19:00:00',
                'horario_final_previsao'=>'20:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>4,
                'sala'=>1,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'20:00:00',
                'horario_final_previsao'=>'21:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>4,
                'sala'=>2,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'20:00:00',
                'horario_final_previsao'=>'21:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>4,
                'sala'=>1,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'21:00:00',
                'horario_final_previsao'=>'22:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>4,
                'sala'=>2,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'21:00:00',
                'horario_final_previsao'=>'22:00:00'
            ],
            
            //SÁBADO
            [   'idcurso'=>1,
                'dia_semana'=>6,
                'sala'=>1,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'19:00:00',
                'horario_final_previsao'=>'20:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>6,
                'sala'=>2,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'19:00:00',
                'horario_final_previsao'=>'20:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>6,
                'sala'=>1,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'20:00:00',
                'horario_final_previsao'=>'21:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>6,
                'sala'=>2,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'20:00:00',
                'horario_final_previsao'=>'21:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>6,
                'sala'=>1,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'21:00:00',
                'horario_final_previsao'=>'22:00:00'
            ],
            [   'idcurso'=>1,
                'dia_semana'=>6,
                'sala'=>2,
                'idprofessor'=>2,
                'idprofessora'=>2,
                'horario_inicial_previsao'=>'21:00:00',
                'horario_final_previsao'=>'22:00:00'
            ]*/
            
        ]);
        
    }
}
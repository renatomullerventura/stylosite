<?php

use Illuminate\Database\Seeder;

class ProfessoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('professores')->delete();
        DB::table('professores')->insert([
            [
                'idprofessores'=>'1', 
                'nome'=>'Kleber', 
                'sobrenome'=>'', 
                'apelido'=>'Kleber Stylo', 
                'sexo'=>'Masculino', 
                'descricao'=>'Professor de Sertanejo Universitário', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/kleber.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'2', 
                'nome'=>'Nathalia', 
                'sobrenome'=>'Cedro', 
                'apelido'=>'Natý', 
                'sexo'=>'Feminino', 
                'descricao'=>'Professora de Sertanejo Universitário', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/nataliacedro.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'3', 
                'nome'=>'Eder', 
                'sobrenome'=>'Santos', 
                'apelido'=>'Eder', 
                'sexo'=>'Masculino', 
                'descricao'=>'Professor de Sertanejo Universitário', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/eder.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'4', 
                'nome'=>'Carol', 
                'sobrenome'=>'Siqueira', 
                'apelido'=>null, 
                'sexo'=>'Feminino', 
                'descricao'=>'Professora de Sertanejo Universitário e Expressão Feminina', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/carol.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'5', 
                'nome'=>'Breno', 
                'sobrenome'=>'Vieira', 
                'apelido'=>null, 
                'sexo'=>'Masculino', 
                'descricao'=>'Professor de Sertanejo Universitário', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/brenovieira.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'6', 
                'nome'=>'Natalia', 
                'sobrenome'=>'Hernandes', 
                'apelido'=>'Natalia', 
                'sexo'=>'Feminino', 
                'descricao'=>'Professora de Sertanejo Universitário', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/nataliahernandez.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'7', 
                'nome'=>'Deivid', 
                'sobrenome'=>'Soares', 
                'apelido'=>null, 
                'sexo'=>'Masculino', 
                'descricao'=>'Professor de Sertanejo Universitário', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/deivid.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'8', 
                'nome'=>'Fernanda', 
                'sobrenome'=>'Viana', 
                'apelido'=>null, 
                'sexo'=>'Feminino', 
                'descricao'=>'Professora de Sertanejo Universitário / Expressão Feminina', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/fernandaviana.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'9', 
                'nome'=>'Paulinho', 
                'sobrenome'=>'Silva', 
                'apelido'=>null, 
                'sexo'=>'Masculino', 
                'descricao'=>'Professor de sertanejo universitário', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/paulinho.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'10', 
                'nome'=>'Marcos', 
                'sobrenome'=>'Araújo', 
                'apelido'=>'Markinhos', 
                'sexo'=>'Masculino', 
                'descricao'=>'Professor de Vanera', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/markinhos.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'11', 
                'nome'=>'Emerson', 
                'sobrenome'=>'Santanna', 
                'apelido'=>null, 
                'sexo'=>'Masculino', 
                'descricao'=>'Professor de Sertanejo Universitário', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/emersonsantana.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'12', 
                'nome'=>'Emerson', 
                'sobrenome'=>'Diniz', 
                'apelido'=>null, 
                'sexo'=>'Masculino', 
                'descricao'=>'Professor de Samba de gafieira e Samba rock', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/emersondiniz.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'13', 
                'nome'=>'Lucas', 
                'sobrenome'=>'Poloni', 
                'apelido'=>null, 
                'sexo'=>'Masculino', 
                'descricao'=>'Professor de Zouk', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/lucaspoloni.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'14', 
                'nome'=>'Natalia', 
                'sobrenome'=>'Natalia', 
                'apelido'=>null, 
                'sexo'=>'Feminino', 
                'descricao'=>'Professora Zouk', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/natalia_bocatti.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ],
            [
                'idprofessores'=>'15', 
                'nome'=>'Carlla', 
                'sobrenome'=>'Serafim', 
                'apelido'=>null, 
                'sexo'=>'Feminino', 
                'descricao'=>'Professora Dança do Ventre', 
                'ativo'=>true, 
                'fotoperfil'=>'imagens/professores/carlaserafin.jpg', 
                'idescola'=>1, 
                'idparceiro'=>null, 
                'deleted_at'=>null, 
                'created_at'=>date("Y-m-d H:i:s"), 
                'updated_at'=>''
            ]
        ]);
        
    }
}

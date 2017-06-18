<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RitmosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ritmos')->delete();
        DB::table('ritmos')->insert([
            ['idritmos'=>1, 'nome'=> 'SERTANEJO UNIVERSITÁRIO', 'descricao'=> 'Surgiu em sequência de movimentos do sertanejo romântico, esse estilo já não conta com letras tão regionais e situações vividas por caipiras (como o Sertanejo Raiz). <br/>Geralmente as músicas tratam de assuntos do Sertanejo Romântico da forma como os jovens veem (assuntos como poligamia e traição).  <br/>A Dança é recente e adaptada aos compassos musicais melódicos de ritmo lento ou médio, bem diferentes do estilo Country. Proporciona evoluções de deslocamento lateral e frontal permitindo uma diversidade de movimentos. <br/>'],
            ['idritmos'=>2, 'nome'=> 'VANERA', 'descricao'=> 'É também sertanejo, entretanto caracterizado por melodias mais rápidas, exige bastante energia de quem dança. As movimetações na dança geralmente são curtas e de mais proximidade.'],
            ['idritmos'=>3, 'nome'=> 'ZOUK', 'descricao'=> 'O ritmo zouk é um estilo de música de origem caribenha, que está presente em vários ritmos brasileiros. <br />Este estilo tem forte presença em países que passaram pela colonização francesa como a Martinica e Guadalupe, uma mistura da lingua francesa com línguas africanas.  <br />Este ritmo é dançado no contra-tempo, ou seja, utilizando três marcações com pausa.  <br />Essa dança é dançada não somente ao som do tradicional, mas ao som de diversos outros estilos musicais, como Kizombas, R&B, Reggaeton e mais recentemente mixagens que contenham Black Music, NewAge, Pop e outros.  <br />Pode ser considerada uma das danças mais expressivas pois trabalha muita amplitude de espaço, e desmebra movimentações desde os pés até a cabeça.'],
            ['idritmos'=>4, 'nome'=> 'EXPRESSÃO FEMININA', 'descricao'=> 'Aula que desenvolve técnicas para que a dama tenha mais beleza e charme na dança. <br />Não possui pré requisito ou relação direta com algum estilo de dança.  <br />Podem participar qualquer nível e estilo.  <br />A proposta é apresentar exercícios para que se possa adquirir maior consciência corporal e se soltar mais durante a dança. <br />'],
            ['idritmos'=>5, 'nome'=> 'GAFIEIRA', 'descricao'=> 'Muito forte na parte instrumental, o samba de gafieira originou-se no Rio de Janeiro. <br />Permite dançar de casal em diversos tipos de músicas (pagode, mpb, choro, bossa-nova, samba-funk entre outros). <br />Um estilo de dança muito admirado pela beleza dos desenhos de perna da dama e do cavalheiro.'],
            ['idritmos'=>6, 'nome'=> 'SAMBA-ROCK', 'descricao'=> 'Ritmo brasileiro que já foi conhecido como sambalaço ou samba jovem na época da Jovem Guarda. <br />É uma mistura de passos de rock anos 60 com samba. Diferente da gafieira, o samba-rock utiliza muitos entrelaçamentos de braços, produzindo efeitos de belos giros entre o casal.  <br />No estilo musical Jorge Ben Jor e Seu Jorge são muito utilizados.'],
            ['idritmos'=>7, 'nome'=> 'DANÇA DO VENTRE', 'descricao'=> NULL]
        ]);
    }
}

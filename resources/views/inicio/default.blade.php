<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Dance Stylo Country</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="{!! secure_asset('plugins/materialize/css/materialize.css') !!}" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="{!! secure_asset('css/animate.min.css') !!}" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="{!! secure_asset('css/professores.css?v=1') !!}" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="{!! secure_asset('plugins/pgwslideshow/pgwslideshow.css') !!}" type="text/css" rel="stylesheet" media="screen,projection" />
  
  <script src="{!! secure_asset('js/queryloader2.min.js') !!}" type="text/javascript" ></script>
  
  <style>
    
    .imagens-galerias{
      width: 100%;
    }
    
    .pgwSlideshow{
      height: 100vh;
    }
    
    .pgwSlideshow img{
      max-height: 100vh;
    }
    
    ::selection {
      background: #78C4BC; /* WebKit/Blink Browsers */
    }
    ::-moz-selection {
      background: #78C4BC; /* Gecko Browsers */
    }
  
  
    .landing{
      background-size: cover;
      background-repeat: no-repeat;
    }
  
    body>.row{
      min-height: 100vh;
    }
    
    body>.row:last-child{
      height: auto;
    }
    
  
    .queryloader__overlay__bar{
      opacity: 1;
      background: #ffffff url("imagens/logo.png") no-repeat left top;
      background-attachment: fixed;
      background-position: center; 
      background-size: 400px 400px;
    } 
    
    .queryloader__overlay__percentage{
      right: 100px !important;
      top: 100px !important;
    } 
    
    .scroll-menu li a{
      color: #049182;
      text-shadow: 1px 1px 1px #78C4BC;
    } 
    
    .text-amarelo.light2{
      color: #FFE39D;
    }
    .text-amarelo.light1{
      color: #FCCB4D;
    }
    .text-amarelo{
      color: #EAAA07;
    }
    .text-amarelo.dark1{
      color: #B28000;
    }
    .text-amarelo.dark2{
      color: #705000;
    }
    
    .amarelo.light2{
      background-color: #FFE39D;
    }
    .amarelo.light1{
      background-color: #FCCB4D;
    }
    .amarelo{
      background-color: #EAAA07;
    }
    .amarelo.dark1{
      background-color: #B28000;
    }
    .amarelo.dark2{
      background-color: #705000;
    }
    
    .text-verde.light2{
      color: #78C4BC;
    }
    .text-verde.light1{
      color: #309D91;
    }
    .text-verde{
      color: #049182;
    }
    .text-verde.dark1{
      color: #006F63;
    }
    .text-verde.dark2{
      color: #00463E;
    }
    
    .verde.light2{
      background-color: #78C4BC;
    }
    .verde.light1{
      background-color: #309D91;
    }
    .verde{
      background-color: #049182;
    }
    .verde.dark1{
      background-color: #006F63;
    }
    .verde.dark2{
      background-color: #00463E;
    }
    
    .text-roxo.light2{
      color: #A883CC;
    }
    .text-roxo.light1{
      color: #743DAA;
    }
    .text-roxo{
      color: #58109E;
    }
    .text-roxo.dark1{
      color: #410778;
    }
    .text-roxo.dark2{
      color: #28024C;
    }
    
    .roxo.light2{
      background-color: #A883CC;
    }
    .roxo.light1{
      background-color: #743DAA;
    }
    .roxo{
      background-color: #58109E;
    }
    .roxo.dark1{
      background-color: #410778;
    }
    .roxo.dark2{
      background-color: #28024C;
    }
    
    .menu_preso {
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 0px 0px 0 rgba(0, 0, 0, 0);
    } 
    
    .parallax-container{
      height: 300px;
    } 
    
  </style>
  
  <!--  QUERY LOADER 2 -->
  <script type="text/javascript">
    window.addEventListener('DOMContentLoaded', function() {
      QueryLoader2(document.querySelector("body"), {
        barColor: "#fff",
        backgroundColor: "#309D91",
        percentage: true,
        barHeight: 400,//window.innerHeight,
        minimumTime: 800,
        fadeOutTime: 600,
        onComplete: function(){document.getElementsByTagName("body")[0].style="overflow: auto;";},
        onProgress: function(){document.getElementsByTagName("body")[0].scrollTop = 0;}
      });
    });
  </script>

</head>
<body style="overflow: hidden;">
  
  <div style="display: block;" class="hide-on-large-only">
    <div class="navbar-fixed">
			<nav class="menu_preso white" role="navigation" style="z-index: 998;">
				<div class="nav-wrapper container" >
				
  				<a id="logo-container" href="#logo" class="brand-logo">
  				  <!-- https://trello-attachments.s3.amazonaws.com/56c44de406b9255265dfb05f/56dd7651b62092ab92cd1b1f/2980e844d0fd353f9912651afd95741f/logo_Novo_6_gradiente.svg -->
            <img src="imagens/logo.png" height="64"/>
          </a>

          <ul id="nav-mobile" class="side-nav">
            <li><a href="#grade">Grade de aulas</a></li>
            <li><a href="#ritmos">Ritmos</a></li>
            <li><a href="#equipe">Nossa equipe</a></li>
            @if(count($workshops))
            <li><a href="#workshop">Próximos Workshops</a></li>
            @endif
            <li><a href="#galeria">Galeria</a></li>
            <li><a href="#contato">Contato</a></li>
				  </ul>
				  
				  <a href="#" data-activates="nav-mobile" class="button-collapse">
					  <i class="material-icons" style="color:#009688">menu</i>
				  </a>
				  
				</div>
		  </nav>
    </div>
  </div>
  
  <div style="height: 100vh" id="logo" class="conteiner_topo">
    <!-- MENU -->
    <div style="" class="hide-on-med-and-down">
      
      <nav class="menu_preso white" role="navigation" style="z-index: 998;">
        <div class="nav-wrapper container" >
          <a id="logo-container" href="#logo" class="brand-logo teal-text text-darken-2">
            <img src="imagens/logo.png" height="64" />
          </a>
          
          <ul class="scroll-menu right hide-on-med-and-down">
    				<li><a href="#grade">Grade de aulas</a></li>
            <li><a href="#ritmos">Ritmos</a></li>
            <li><a href="#equipe">Nossa equipe</a></li>
            @if(count($workshops))
            <li><a href="#workshop">Próximos Workshops</a></li>
            @endif
            <li><a href="#galeria">Galeria</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>

          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
      </nav>
    </div>
	  
    <ul class="pgwSlideshow" >
        <li><img src="imagens/flyers/bocatti.jpg"></li>
        <li><img src="imagens/flyers/breano.jpg" alt="..."></li>
        <li><img src="imagens/flyers/carol.jpg" alt="..."></li>
        <li><img src="imagens/flyers/diniz.jpg" alt="..."></li>
        <li><img src="imagens/flyers/eder.jpg" alt="..."></li>
        <li><img src="imagens/flyers/emerson.jpg" alt="..."></li>
        <li><img src="imagens/flyers/kleber.jpg" alt="..."></li>
        <li><img src="imagens/flyers/paulinho.jpg" alt="..."></li>
    </ul>
    
  </div>
  
  <!-- GRADE -->
  <div class="row" id="grade">  
    
    <div class="container">
      
      <br /><br />
      
      <h2 class="header center text-amarelo">Grade de aulas</h2>
      <div class="row center">
        <h5 class="header col s12 light">Os horários de aulas podem variar conforme o mês vigente</h5>
      </div>
      <div class="row center">
        
      @foreach($grade as $dias)
        
        <h3 class="light left" id={{ str_replace(" ", "", $dias[0]) }}>{{ $dias[0] }}</h3>
        <div class="col m12 s12 left-align" style="margin-bottom: 25px;">
          
          @foreach($grade as $ancorasDias)
            @if ($ancorasDias[0] == $dias[0])
              <span class="chip scroll amarelo light1"><a href={{ str_replace(" ", "", "#".$ancorasDias[0]) }} class="scroll text-verde">{{ $ancorasDias[0] }}</a></span>
            @else
              <span class="chip scroll"><a href={{ str_replace(" ", "", "#".$ancorasDias[0]) }}  class="scroll text-verde">{{ $ancorasDias[0] }}</a></span>
            @endif
          @endforeach
          
        </div>
        
        <div class="col m12 s12">
          <table class="striped responsive-table white">

          <thead>
            <tr>
            
              <th data-field="ritmo">Ritmo </th>
              <th data-field="nivel">Nível </th>
              <th data-field="horarioinicio">Horário de início </th>
              <th data-field="horariotermino">Horário de término </th>
              <th data-field="professores">Professores </th>
            
            </tr>
          </thead>
          <tbody>
        			
        			@foreach($dias[1] as $aulas)
        			
                <tr>
                  <td>{{ $aulas->nome }}</td>	
                  <td>{{ $aulas->dificuldade }}	</td>
                  <td>{{ date('H:i', strtotime($aulas->horario_inicial_previsao)) }}</td>
                  <td>{{ date('H:i', strtotime($aulas->horario_final_previsao)) }}</td>
                  <td>{!! $aulas->professores !!}</td>
                </tr>
            
            @endforeach
            
          </tbody>
          
        </table>
        </div>
        
      @endforeach
      
      <br /><br />
      
    </div>
    
  </div>
  
  </div>
  
  <!-- PARALLAX -->
  <div class="parallax-container">
    <div class="parallax" style="height: 50vh;"><img src={{ $banners[0]->imagem }} /></div>
  </div>
  <!-- PARALLAX -->
  
  <!-- RITMOS -->
  <div class="row" id="ritmos">
  
    <div class="container">
      
      <br /><br />
      
      <h2 class="header center text-amarelo">Ritmos</h2>
      <div class="row center">
        <h5 class="header col s12 light">A Stylo Country oferece os mais variados ritmos de dança da atualidade.</h5>
      </div>
      
      @foreach($ritmos as $ritmo)
      
        <div class="row">
          <div class="col s12">
            <h5>{{ $ritmo->nome }}</h5>
            <blockquote class="light flow-text">
              {!! $ritmo->descricao !!}
            </blockquote>
          </div>
        </div>
      
      @endforeach
      
    </div>
  
  </div>
  
  <!-- PARALLAX -->
  <div class="parallax-container">
    <div class="parallax" style="height: 50vh;"><img src={{ $banners[1]->imagem }} /></div>
  </div>
  <!-- PARALLAX -->
  
  <!-- EQUIPE -->
  <div class="row" id="equipe">
      <br /><br />
      
      <h2 class="header center text-amarelo">Equipe</h2>
      <div class="row center">
        <h5 class="header col s12 light">
          Veja a nossa equipe de professores e colaboradores.
        </h5>
      </div>
      
      <div class="container professores">
        
        @foreach($professores as $professor)
          
          <div class="col s12 l12" id={{ str_replace(" ", "", $professor->nome) }}>
            <div class="col s12 l3 foto_prof">
              <img class="materialboxed" src={{ $professor->fotoperfil }} >
            </div>
            <div class="col s12 l9 desc_prof z-depth-1">
              <h5>{{ $professor->nome }} {{$professor->apelido!='' ? "(".$professor->apelido.")":''}}</h5>
              <p class="light">
                {{ $professor->descricao }}
              </p>
            </div>  
          </div>
        
        @endforeach
        
      </div>
  
  </div>

  <!-- PARALLAX -->
  <div class="parallax-container">
    <div class="parallax" style="height: 50vh;"><img src={{ $banners[2]->imagem }} /></div>
  </div>
  <!-- PARALLAX -->
  
  @if(count($workshops) > 0)
  
  <!-- WORKSHOP -->
  <div class="row" id="workshop">
    
    <div class="container">
      
      <br /><br />
      
      <h2 class="header center text-amarelo">Workshops</h2>
      <div class="row center">
        <h5 class="header col s12 light">
          Próximos workshops.
        </h5>
        
        @foreach($workshops as $workshop)
          <div class="col m3">
            <img class="materialboxed" src={{ $workshop->imagem_url }} data-caption={{ $workshop->titulo }} width="100%" />
            <blockquote>
              {!! $workshop->descricao !!}
            </blockquote>
                  
          </div>
        @endforeach
        
      </div>

    </div>
  
  </div>

  <!-- PARALLAX -->
  <div class="parallax-container">
    <div class="parallax" style="height: 50vh;"><img src={{ $banners[3]->imagem }} /></div>
  </div>
  <!-- PARALLAX -->
  
  @endif
  
  <!-- GALERIA -->
  <div class="row" id="galeria">
    <br /><br />
    <h2 class="header center text-amarelo">Galerias</h2>
      
      @foreach($galerias as $galeria)
      
        <div class="row" style="min-height: 100vh;">
          <h4 class="header text-roxo col s12 center">{{$galeria->titulo}}</h4>
          
          <div class="col s4 offset-s4 center" style="margin-bottom: 25px;">
            @foreach($galeria->fotos->Take(1) as $imagemGaleria)
              <img class="imagens-galerias materialboxed center" data-caption={{$imagemGaleria->titulo}} src={{$imagemGaleria->imagem_url}}>
            @endforeach
            <a href={{url('album', [$galeria->idgalerias])}} target="_blank" class="btn-large waves-effect waves-light">Veja o album completo</a>
          </div>
          
          
          <h4 class="header text-roxo col s12 center">Vídeos</h4>
          <div class="col m12 s12">
            @foreach($galeria->videos->All() as $videosGaleria)
              <div class="col m4 s12 center">
                <h5>{{$videosGaleria->descricao}}</h5>
                <div class="video-container z-depth-2">
                  <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$videosGaleria->youtube_url}}" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        
      @endforeach
    
  </div>

  <!-- PARALLAX -->
  <div class="parallax-container">
    <div class="parallax" style="height: 50vh;"><img src={{ $banners[4]->imagem }} /></div>
  </div>
  <!-- PARALLAX -->
  
  <!-- CONTATO -->
  <div class="row" id="contato" style="min-height: auto;">
  <br /><br />
    <!--   Icon Section   -->
    <div class="col s12 m6">
      
      <h2 class="header center text-amarelo">Contato</h2>
      <div class="row center">
        <h5 class="header col s12 light">
          Digite os dados abaixo para entrar em contato via e-mail.
        </h5>
      </div>
      
      <div id="preloader-contato" class="preloader-wrapper big active" style="display:none; margin: 100px 50%;">
        <div class="spinner-layer spinner-blue-only">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div><div class="gap-patch">
            <div class="circle"></div>
          </div><div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
      
      <div id="formulario_contato" class="row">
        
        <div class="input-field col s12 m12">
          <i class="material-icons prefix">account_circle</i>
          <input id="nome" type="text" class="validate">
          <label for="nome">Nome</label>
        </div>
        
        <div class="input-field col s12 m12">
          <i class="material-icons prefix">phone</i>
          <input id="telefone" type="tel" class="validate">
          <label for="telefone">Telefone</label>
        </div>
        
        <div class="input-field col s12 m12">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        
        <div class="input-field col s12 m12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="mensagem" class="materialize-textarea" length="400"></textarea>
          <label for="mensagem">Mensagem</label>
        </div>
        
        <div class="input-field col s12 m12">
          <a id="enviaremail" class="waves-effect waves-light btn yellow darken-2">
            <i class="material-icons right">send</i>
            Enviar
          </a>
        </div>
        
      </div>
      
      <div class="row feedback-contato" style="display:none;">
        <div class="input-field col s12 m12">
          <h2>Mensagem enviada com sucesso!</h2>
        </div>
      </div>
      
    </div>
      
    <div class="col s12 m6">
        
      <h2 class="header center text-amarelo">Localização</h2>
      <div class="row center">
        <h5 class="header col s12 light">
          R. Tuiuti, 2420 - Tatuapé,São Paulo - SP<br />
          Próxima a praça Silvio Romero.
        </h5>
      </div>
      
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.5996628646567!2d-46.5762658848398!3d-23.546897166943836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ebffd512c9b%3A0x8ad562be07bc3027!2sEscola+de+Dan%C3%A7a+Stylo+Country+Unidade+Tatuap%C3%A9!5e0!3m2!1spt-BR!2sbr!4v1460387762987" 
      width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      
    </div>
    
  </div>
  
  <footer id="rodape" class="page-footer" style="background-color: #049182;">
    <div class="container" style="min-height: 20vh;">
      <div class="row">
        <div class="col s8">
          <h4 class="white-text">Stylo Country Unidade Tatuapé</h4>
          <p class="grey-text text-lighten-4 flow-text">
            Rua Tuiuti, 2420 - 1° Andar<br />
            CEP 03307-005 São Paulo-SP  Brasil<br />
            E-mail: stylotatuape@gmail.com<br />
            Tel. Com.: 11 3297-5421<br />
            Tel. Cel.: 11 98466-7577 (whatsapp)<br />
          </p>
          
              
        </div>
        <div class="col s4">
          <img src="img/logo.png" width="100%" />
        </div>
      </div>
    </div>
    <div class="footer-copyright verde" style="min-height: 5vh;">
      <div class="container">
        <a class="grey-text text-lighten-4 right" href="mailto:re.infotec@gmail.com">
          © {{date('Y')}} by Stylo Country.
        </a>
      </div>
    </div>
  </footer>
  
  <!-- Redes Sociais -->
  <div class="fixed-action-btn click-to-toggle horizontal" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large teal">
      <i class="large material-icons">share</i>
    </a>
    <ul class="">
      <li>
        <a class="btn-floating white" href="http://www.facebook.com/stylotatuape/" target="_blank">
          <img src="icones/face-circle.png" height="37"></img>
        </a>
      </li>
      <li>
        <a class="btn-floating white" href="http://instagram.com/stylotatuape/" target="_blank">
          <img src="icones/insta-circle.png" height="37"></img>
        </a>
      </li>
      <li>
        <a class="btn-floating white" href="https://www.youtube.com/channel/UCHAPsdX7jBCZNFiLO1FBHwA" target="_blank">
          <img src="icones/youtube-circle.png" height="37"></img>
        </a>
      </li>
      <li>
        <a class="btn-floating white" href="#rodape" >
          <img src="icones/whatsapp-circle.png" height="37"></img>
        </a>
      </li>
      
    </ul>
  </div>
            
	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="{!! secure_asset('plugins/materialize/js/materialize.js') !!}"></script>
	<script src="{!! secure_asset('js/animatedModal.min.js') !!}"></script>
	<script src="{!! secure_asset('js/scrollmenu.js?V=2') !!}"></script>
	<script src="{!! secure_asset('plugins/pgwslideshow/pgwslideshow.js') !!}"></script>
	<script src="{!! secure_asset('js/default.js') !!}"></script>
	
	<script type="text/javascript">
	  $(document).ready(function() {
      $('.pgwSlideshow').pgwSlideshow({
        transitionEffect : 'fading',
        autoSlide: true,
        displayList: false,
        displayControls: true,
      });
    });
	</script>
	
  </body>
</html>
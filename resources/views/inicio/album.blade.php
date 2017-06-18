<!DOCTYPE html>
<html lang="en">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Album de fotos de {{$galeria->titulo}}</title>
      
      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
      <link href="{!! secure_asset('plugins/materialize/css/materialize.css') !!}" type="text/css" rel="stylesheet" media="screen,projection" />
      <link href="{!! secure_asset('plugins/simplelightbox-master/dist/simplelightbox.min.css') !!}" type="text/css" rel="stylesheet" media="screen,projection" />
      <link href="{!! secure_asset('css/animate.min.css') !!}" type="text/css" rel="stylesheet" media="screen,projection" />
      
      <script src="{!! secure_asset('js/queryloader2.min.js') !!}" type="text/javascript" ></script>
      
      <script type="text/javascript">
        window.addEventListener('DOMContentLoaded', function() {
          QueryLoader2(document.querySelector("body"), {
            barColor: "#FFF",
            backgroundColor: "#309D91",
            percentage: true,
            barHeight: 10,
            minimumTime: 800,
            fadeOutTime: 600,
            onComplete: function(){document.getElementsByTagName("body")[0].style="overflow: auto;"},
            onProgress: function(){document.getElementsByTagName("body")[0].scrollTop = 0}
          });
        });
      </script>
      
      <style>
        .flexcontainer {
            flex-flow: row || wrap;
            align-items: flex-start;
            justify-content: flex-start;
            
        }
        
        .flexcontainer img{
            margin: 2px;
        }
        
        .sl-overlay{
          background-color: #000;
        }
        
      </style>
      
    </head>
    <body>
    
    	<div class="slider fullscreen">	
		    <ul class="slides">
      
          @foreach($imagensGalerias as $imagemGaleria)
          
          <li>
            <img class="img-thumbnail" src="{{asset($imagemGaleria->imagem_url)}}" >
            <div class="caption left-align">
              <h3>{{$imagemGaleria->titulo}}</h3>
              <h5 class="light grey-text text-lighten-3">{{$imagemGaleria->descricao}}</h5>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
      
      <!-- Scripts -->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="{!! secure_asset('plugins/materialize/js/materialize.js') !!}"></script>
      <script src="{!! secure_asset('plugins/simplelightbox-master/dist/simple-lightbox.min.js') !!}"></script>
      
      <script>
        $(document).ready(function () {
          var lightbox = $('.gallery a').simpleLightbox({
                overlay: 'true',
                spinner: 'true',
            });
            
            $('.slider').slider({full_width: true});
            
        });
      </script>
      
    </body>
</html>
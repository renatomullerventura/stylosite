<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Stylo Country - Área Segura</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <link href="{!! secure_asset('datepicker/css/bootstrap-datepicker.css') !!}" type="text/css" rel="stylesheet"/>
    
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        
        .flexcontainer {
            flex-flow: row || wrap;
            align-items: flex-start;
            justify-content: flex-start;
            
        }
        
        .flexcontainer img{
            margin: 2px;
        }
    </style>
</head>
<body>
    
    <!-- -->
    <nav class="navbar" style="margin-bottom: 0px;" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse in" id="navbar-menu" aria-expanded="true">
                <ul class="nav navbar-nav">
                    <li><a id="professores" href="{{ route('admin.professores')}}">Professores</a></li>
                    <li><a id="banners" href="{{ route('admin.banners')}}">Banners</a></li>
                    <li><a id="galerias" href="{{ route('admin.galerias')}}">Galerias</a></li>
                    <li><a id="ritmos" href="{{ route('admin.ritmos')}}">Ritmos</a></li>
                    <li><a id="workshops" href="{{ route('admin.workshops')}}">Workshops</a></li>
                    <li><a id="aulas" href="{{ route('admin.aulas')}}">Aulas</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a id="lnkAlterarSenha" href="{{ route('logout')}}" >Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- -->
    
    @yield('content')
    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
    <script src="{!! secure_asset('datepicker/js/bootstrap-datepicker.js') !!}"></script>
    <script src="{!! secure_asset('datepicker/locales/bootstrap-datepicker.pt-BR.min.js') !!}"></script>
    
    <script src="{!! secure_asset('js/bootbox.min.js') !!}"></script>
    <script src="{!! secure_asset('js/admin/confirmacoes.js') !!}"></script>
    <script src="{!! secure_asset('plugins/mask/src/jquery.mask.js') !!}"></script>
    <!-- include summernote css/js-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
    
    <script src="{!! secure_asset('js/mo.min.js') !!}"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('[data-toggle="tooltip"]').tooltip();
            
            $('[mask="data"]').mask('00/00/0000');
            
            $('[mask="tempo"]').mask('00:00:00');
            
            $('.summernote').summernote();
            
            $('.input-group.date').datepicker({
                format: "dd/mm/yyyy",
                maxViewMode: 2,
                todayBtn: "linked",
                language: "pt-BR",
                autoclose: true,
                todayHighlight: true,
                //datesDisabled: ['05/06/2016', '05/21/2016'],
                //defaultViewDate: { year: 1977, month: 04, day: 25 }
            }); 
        });
    </script>
    
</body>
</html>

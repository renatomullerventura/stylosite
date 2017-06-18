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

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    
</head>
    <body>
    {{ Form::open(array('url' => 'admin/login')) }}
    
        <div class="container">
            <div class="row">
                <div class="email col-sm-offset-4 col-sm-4">
                    {{ $errors->first('email') }}
                    {{ $errors->first('password') }}
                </div>
            </div>
            <div class="row">
                <div class="password col-sm-offset-5 col-sm-2">
                    <img src="{{asset('imagens/logo.png')}}" />
                </div>
            </div>
            <div class="row">
                <div class="botao-entrar col-sm-offset-4 col-sm-4">
                    <div class="form-group">
                        {{ Form::label('email', 'E-mail') }}
                        {{ Form::text('email', '', array('class'=>'form-control','placeholder' => 'email@stylo.com')) }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="botao-entrar col-sm-offset-4 col-sm-4">
                    <div class="form-group">
                        {{ Form::label('password', 'Senha') }}
                        {{ Form::password('password', array('class'=>'form-control')) }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="botao-entrar col-sm-offset-4 col-sm-4">
                    {{ Form::submit('Entrar', array('class'=>'btn btn-primary')) }}
                </div>
            </div>
        </div>
    
    {{ Form::close() }}
    
    </body>
</html>

$('#enviaremail').click(function(){
    
    if(validar()){
        
        var cNome = $('#nome').val();
        var cTelefone = $('#telefone').val();
        var cEmail = $('#email').val();
        var cMensagem = $('#mensagem').val();
        var token = $('input[name="_token"]').val();
        var data = {nome:cNome, telefone:cTelefone, email:cEmail, mensagem:cMensagem, token:token};
        
        ajax('https://larastylo-renatomullerventura.c9users.io/public/email', 'GET', data);
        
    }else{
        console.log('inválido');
    }
    
});

$('.validate').blur(function(){
    
    if($(this).val() == ''){
        $(this).addClass('invalid');
    }else{
        $(this).removeClass('invalid');
    }
    
});

function validar(){
    
    var valido =    true;
    
    if($('#nome').val() == ''){
        valido=false;
    }
    
    if($('#telefone').val() == ''){
        valido=false;
    }
    
    if($('#email').val() == ''){
        valido=false;
    }
    
    if($('#mensagem').val() == ''){
        valido=false;
    }
    
    return valido;
}

var ajax    =   function(rota, type, data){
    
    $('#formulario_contato').fadeOut( "fast", function() {
        $('#preloader-contato').fadeIn();
    });
    
    $.ajax({
        url: rota,
        type: type,
        data: data,///$('.formulario_contato').serialize(),
        success: function(data){
            $('#preloader-contato').fadeOut( "fast", function() {
                $('#formulario_contato').fadeOut("fast", function(){
                    $('.feedback-contato').fadeIn('slow');
                });
            });
            // Success...
            
            
        },
        error: function(data){
            $('#preloader-contato').fadeOut( "fast", function() {
                $('#formulario_contato').fadeIn();
            });
            // Error...
            var errors = data.responseJSON;
    
            console.log(errors);
    
            $.each(errors, function(index, value) {
                $.gritter.add({
                    title: 'Error',
                    text: value
                });
            });
        }
    });
}
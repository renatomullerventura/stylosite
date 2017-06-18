<!DOCTYPE html>
<html>
    <head>
        <title>
            Você recebeu uma mensagem!
        </title>
    </head>
    <body>
        
        <table>
            <tr><td>👤Nome: </td> <td>{{ $nome }}</td></tr>
            <tr><td>📞Telefone: </td> <td>{{ $telefone }}</td></tr>
            <tr><td>💌E-mail: </td> <td>{{ $email }}</td></tr>
            <tr><td>📝Mensagem: </td> <td>{{ $mensagem }}</td></tr>
        </table>
        
    </body>
</html>
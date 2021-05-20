<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            color:brown;
        }
        p{
            color: chocolate;
        }
    </style>
</head>
<body>
    <h1>Correo electrónico</h1>
    <p>Este es el primer correo que mandaré por Laravel</p>

    <p><strong>Nombre: </strong> {{$contacto['name']}}</p>
    <p><strong>Email: </strong> {{$contacto['email']}}</p>
    <p><strong>Mensaje: </strong> {{$contacto['message']}}</p>
</body>
</html>
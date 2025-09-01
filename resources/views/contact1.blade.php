<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact 1</h1>
    <p>{{$dueno}}</p>
    <p>{{$telefono}}</p>
    <p>{{$email}}</p>

    @if($dueno != 'Mateo Gonzalez')
        <p>Bienvenido, {{$dueno}}!</p>
        <button>Iniciar seccion</button>
    @else
        <p>Acceso denegado</p>
    @endif

    @foreach([1,2,3,4,5] as $item)
        <p>Producto: {{$item}}</p>
    @endforeach
</body>
</html>

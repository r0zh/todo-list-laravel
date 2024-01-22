<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body @style(["background-color: {$fondo}" => true, "color: {$tinta}" => $tinta == 'white'])>
    <h1> Perfil del usuario {{ $usuario->nombre }} </h1>
    <p> El color de fondo es {{ $fondo }} </p>
    <p> El color de la tinta es {{ $tinta }} </p>
    <p> La marca de tiempo es {{ time() }} </p>
    <form action="" method="get">
        <select name="fondo">
            <option value="red">Rojo</option>
            <option value="green">Verde</option>
            <option value="blue">Azul</option>
            <option value="yellow">Amarillo</option>
            <option value="orange">Naranja</option>
            <option value="purple">Morado</option>
            <option value="pink">Rosa</option>
        </select>
        <select name="tinta">
            <option value="red">Rojo</option>
            <option value="green">Verde</option>
            <option value="blue">Azul</option>
            <option value="yellow">Amarillo</option>
            <option value="orange">Naranja</option>
            <option value="purple">Morado</option>
            <option value="pink">Rosa</option>
        </select>
        <button>Enviar</button>
    </form>
</body>

</html>

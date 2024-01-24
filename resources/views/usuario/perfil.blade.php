<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body @style(["background-color: {$fondo}" => true, "color: {$tinta}" => true])>
    <h1 class="text-white font-bold text-5xl"> Perfil del usuario {{ $usuario->nombre }} </h1>
    <p> El color de fondo es {{ $fondo }} </p>
    <p> El color de la tinta es {{ $tinta }} </p>
    <p> La marca de tiempo es {{ time() }} </p>
    <form action="" method="get">
        <select name="fondo">
            <option value="red" @selected($fondo == 'red')>Rojo</option>
            <option value="green" @selected($fondo == 'green')>Verde</option>
            <option value="blue" @selected($fondo == 'blue')>Azul</option>
            <option value="yellow" @selected($fondo == 'yellow')>Amarillo</option>
            <option value="orange" @selected($fondo == 'orange')>Naranja</option>
            <option value="purple" @selected($fondo == 'purple')>Morado</option>
            <option value="pink" @selected($fondo == 'pink')>Rosa</option>
        </select>
        <select name="tinta">
            <option value="red" @selected($tinta == 'red')>Blanco</option>
            <option value="green" @selected($tinta == 'green')>Verde</option>
            <option value="blue" @selected($tinta == 'blue')>Azul</option>
            <option value="yellow" @selected($tinta == 'yellow')>Amarillo</option>
            <option value="orange" @selected($tinta == 'orange')>Naranja</option>
            <option value="purple" @selected($tinta == 'purple')>Morado</option>
            <option value="pink" @selected($tinta == 'pink')>Rosa</option>
        </select>
        <button>Enviar</button>
    </form>
</body>

</html>

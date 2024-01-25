<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-3xl">{{ __('todolist.bienvenida') }}</h1>

    @forelse ($tareas as $item)
        <li>
            {{ $item->fecha->format('d/m/Y') }} @includeWhen($item->completa, 'tarea-completa') @includeWhen(!$item->completa, 'tarea-incompleta')
        </li>
    @empty
    @endforelse
</body>

</html>

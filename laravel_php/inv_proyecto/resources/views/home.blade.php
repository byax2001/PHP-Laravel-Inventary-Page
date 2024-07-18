<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba Proyecto Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Prueba Proyecto Laravel</h1>
    <x-alert type="info" class="mb-4">
        <x-slot name="title">
            Titulo de la alerta mandado a través de una variable
        </x-slot>
        <x-slot name="bodya">
            Cuerpo de la alerta mandado a través de una variable   
        </x-slot>

    </x-alert>

    <x-alert type="danger">
        <x-slot name="title">
            Titulo de la alerta mandado a través de una variable
        </x-slot>
        <x-slot name="bodya">
            Cuerpo de la alerta mandado a través de una variable   
        </x-slot>

    </x-alert>

    <x-alert type="danger">
        <x-slot name="title">
            Titulo de la alerta mandado a través de una variable
        </x-slot>

    </x-alert>
    <x-alert2 type="success">
        <x-slot name="title">
            Titulo de la alerta 2
        </x-slot>
        <x-slot name="bodya">
            Cuerpo de la alerta mandado a través de una variable   
        </x-slot>
    </x-alert2>


</body>
</html>
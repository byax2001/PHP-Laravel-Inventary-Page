<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Variable</title>
</head>
<body>
    <h1> Esta es la variable <?php echo $id; ?> </h1>
    <h1> Otra forma de imprimirla <?=$id ?> </h1>
    <h1> Otra forma de imprimirla {{ $id }} </h1>
    
    {{-- para colocar un comentario se hace de la esta forma --}}
    @if($id == 1)
        <h1> El id es igual a 1 </h1>
    @else
        <h1> El id no es igual a 1 </h1>
    @endif
</body>
</html>
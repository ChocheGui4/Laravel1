<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listados de contactos nuevos - Choche.net</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <hr>


    <ul>
        @forelse ($contacts as $contac)
            <li>{{ $contac }}</li>
        @empty
            <li>No hay contactos</li>
        @endforelse
    </ul>



</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>
    <h1>Contenido del email:</h1>
    <p>Recibiste un mensaje de: {{ $msg['name'] }} </p>
    <p><strong>Asunto:</strong> {{ $msg['subject'] }}</p>
    <p><strong>Contenido:</strong> {{ $msg['content'] }}</p>
   {{--  {{ var_dump($msg) }} --}}
    
</body>
</html>
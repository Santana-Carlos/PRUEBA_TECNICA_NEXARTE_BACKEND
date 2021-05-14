<!DOCTYPE html>
<html>
<head>
    <title>Nueva Cotización</title>
</head>
<body>
    <h3>{{ $details['title'] }}</h3>
    <p>
        {{ $details['modelo'] }} <br>
        {{ $details['precio'] }} <br>
        {{ $details['nombre'] }} <br>
        {{ $details['email'] }} <br>
        {{ $details['numero'] }} <br>
        {{ $details['departamento'] }} <br>
        {{ $details['ciudad'] }} <br>
        {{ $details['fecha'] }}
    </p>
    <br>
   
    <p>Este es un correo automático, no debe responder.</p>
</body>
</html>
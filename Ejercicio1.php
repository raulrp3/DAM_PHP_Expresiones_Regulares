<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php 
        /* VERIFICAR QUE UNA CADENA 
        COMIENZA POR UNA LETRA Y VA SEGUIDA DEL AL MENOS 3 LETRAS O DÍGITOS O LOS CARACTERES ESPECIALES _(#*$)*/
        $string = 'h$ola';
        preg_match('#^[a-zA-Z][a-zA-Z0-9\_\#\*\$]{3,}$#', $string, $matches);
        print_r($matches[0]);
    ?>
</body>
</html>
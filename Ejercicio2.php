<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        /* VERIFICAR QUE UNA CADENA TIENE UNA ESTRUCTURA CONFORME A LA DE UNA FECHA
        CON FORMATO [D]D/[M]M/AAAA Y RECUPERAR LOS TRES COMPONENTES DÍA, MES Y AÑO */
        $date = '18/05/1997';
        preg_match('#([0-9]{1,2})\/([0-9]{1,2})\/(19[0-9]{2}|20[0-9]{2})$#', $date, $matches);
        echo 'Día: '.$matches[1].'</br>';
        echo 'Mes: '.$matches[2].'</br>';
        echo 'Año: '.$matches[3];
    ?>
</body>
</html>
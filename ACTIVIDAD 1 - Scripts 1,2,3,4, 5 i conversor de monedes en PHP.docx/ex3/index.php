
<!--
Ejercicio 3. Carpeta “ex3”. Enunciado: Crea un script hora.php que te 
devuelva un saludo dependiendo de la hora del servidor. Si la hora 
está entre las 5h de la mañana y las 14h te dirá "Buenos días", si 
la hora está entre las 14h y las 19h te dirá "Buenas tardes", de lo 
contrario, dirá "Buenas noches". Debe mostrar también la hora del 
servidor.
-->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="caja3">
        <h1></h1>

        <?php

        $hora = date("H");

        if ($hora >= 5 && $hora < 14) {

            $saludo = "Buenos días";

        } elseif ($hora >= 14 && $hora < 19) {

            $saludo = "Buenas tardes";

        } else {

            $saludo = "Buenas noches";
        }

        echo $saludo;
        echo "<br>";
        echo "Hora del servidor: ".date("H:i:s");

        ?>
    
    </div>

    

</body>
</html>
<!--
Ejercicio 4. Carpeta "ex4". Enunciado: Crea una página que realice una 
encuesta de qué estilo de música te gusta más (pone unos radio buttones 
con 4 estilos, mínimo) y devuelve un mensaje que tenga que ver con el 
estilo de música escogido.
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="caja">
        <h1>Encuesta musical</h1>

        <form action="" method="POST">

            <p>¿Qué estilo de música te gusta más?</p>

            <input type="radio" name="musica" value="rock">
            Rock
            <br>

            <input type="radio" name="musica" value="pop">
            Pop
            <br>

            <input type="radio" name="musica" value="rap">
            Rap
            <br>

            <input type="radio" name="musica" value="electronica">
            Electrónica
            <br><br>

            <input type="submit" value="Enviar">

            <br><br>

        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $musica = $_POST["musica"];

            if ($musica == "rock") {

                echo "Rock para el brote de energía lml";

            } elseif ($musica == "pop") {

                echo "El pop ya no es popular -.-";

            } elseif ($musica == "rap") {

                echo "El rap, suena mejor si logras entenderlo LOL";

            } elseif ($musica == "electronica") {

                echo "Música electrónica por si agotaste la bateria :P";
            }
        }

        ?>

    </div>

</body>
</html>
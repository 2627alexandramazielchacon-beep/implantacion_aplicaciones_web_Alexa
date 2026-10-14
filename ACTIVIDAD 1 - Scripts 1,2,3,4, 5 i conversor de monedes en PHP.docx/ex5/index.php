<!--
Ejercicio 5. Carpeta "ex5". Enunciado: Crea una página web que te 
solicite un precio y puedas escoger el tipo de iva y te devuelva la 
cantidad con el iva.
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
        <div class="caja5">

            <h1>Calculadora de IVA</h1>

            <form action="" method="POST">

                Precio:
                <input type="number" name="precio" step="0.01">

                <br><br>

                Tipo de IVA:

                <select name="iva">

                    <option value="4">4%</option>
                    <option value="10">10%</option>
                    <option value="21">21%</option>

                </select>

                <br><br>

                <input type="submit" value="Calcular">

                <br><br>

            </form>

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $precio = $_POST["precio"];
                $iva = $_POST["iva"];

                $importe_iva = $precio * $iva / 100;

                $precio_final = $precio + $importe_iva;

                echo "Precio: ".$precio." €";
                echo "<br>";
                echo "IVA: ".$iva."%";
                echo "<br>";
                echo "Importe del IVA: ".$importe_iva." €";
                echo "<br>";
                echo "Precio final: ".$precio_final." €";
            }

            ?>

        </div>
    

</body>
</html>
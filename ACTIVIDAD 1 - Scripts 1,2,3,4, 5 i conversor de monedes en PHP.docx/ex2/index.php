<!--
Ejercicio 2. Carpeta “ex2”. Enunciado: Crea una página web con un 
formulario que te pida una cantidad de euros y te devuelve cuántos 
dólares son. Utiliza un valor aproximado para realizar la conversión, 
no es necesario que busques los datos reales en un apio. Haz lo mismo 
con la conversión dólares a euros.
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="caja2">
        <h1>Conversor de moneda</h1>

        <form action="" method="POST">

            Cantidad:
            <input type="number" name="cantidad" step="0.01">

            <br><br>

            Conversión:

            <select name="conversion">
                <option value="euro_dolar">Euros a dólares</option>
                <option value="dolar_euro">Dólares a euros</option>
            </select>

            <br><br>

            <input type="submit" value="Convertir">

            <br><br>

        </form>
    
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $cantidad = $_POST["cantidad"];
        $conversion = $_POST["conversion"];

        if ($conversion == "euro_dolar") {

            $resultado = $cantidad * 1.10;

            echo $cantidad." euros son ".$resultado." dólares.";

        } else {

            $resultado = $cantidad * 0.91;
            
            
            echo $cantidad." dólares son ".$resultado." euros.";
        }
    }

    ?>
    
    </div>

    

</body>
</html>
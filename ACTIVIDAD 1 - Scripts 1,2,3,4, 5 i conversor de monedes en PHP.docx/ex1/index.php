<!--
Ejercicio 1. Carpeta "ex1". Enunciado: Crea una página web con un formulario de contacto 
que te solicite en diferentes cajas de texto el nombre, apellidos, email y mensaje de 
contacto. Si se ha enviado correctamente, el servidor devolverá el mensaje "Mensaje 
recibido, $nombre. Gracias por contactar. Te responderemos a $email".
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="caja">

        <h1>Formulario de contacto</h1>

        <!-- El naveador necesita saber a dónde enviar la información y coómo enviarla -->
        <!-- Form crea el formulario que enviara los datos al servidor, action="" es la direccion ´
        method="POST" -->

        <form action="" method="POST">

            <!-- atributo action="" es el Destinatario, si lo dejo vacio significa enviamelo a mi mismo, pero
            puede señalarse asi: action="/api/registro" ó action="guardar_datos.php" -->

            <!-- 
            Atributo method="POST" es la forma de enviar y le dice al navegador como viajaran
            los datos.
            CARACTERISTICAS POST:
            ----------------------
            - EN LA BARRA DE DIRECCIONES, Los datos del usuario no se veran en la barra como contraseñas y demas
            - SIN LIMITE DE ESPACIO: Puede enviar textos largos, imagenes, archivos
            - ¿CUÁNDO USARLO? Siempre que vaya a crear, modificar o borrar algo en el servidor.
            - A DIFERENCIA DEL GET: los datos se pegan al final de la URL, y cualquiera puede ver la contraseña
            -->

            Nombre:
            <input type="text" name="nombre">
            <br><br>

            Apellidos:
            <input type="text" name="apellidos">
            <br><br>

            Email:
            <input type="text" name="email">
            <br><br>

            Mensaje:
            <textarea name="mensaje" cols="30" rows="10"></textarea>
            <br><br>

            <input type="submit" value="Enviar">

        </form>
    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // $_SERVER: es una variable predefinida y especial que PHP proporciona.
        // ["REQUEST_METHOD"]: Se lee (dentro del server dame el valor de REQUEST_METHOD) es lo mismo que 5 == 5
        // esto nos indica que método HTTP utilizó el navegador para realizar la peticion: GET, POST
        

        $nombre = $_POST["nombre"];
        $email = $_POST["email"];

        // $nombre = $_POST["nombre"]; Se lee: Guarda en la variable $nombre el valor de "nombre" recibido mediante POST.
        // $_POST["nombre"], contiene "Alexa" y se guarda en la variable
        // funciona lo mismo con email
        echo "Mensaje recibido, ".$nombre.
             ". Gracias por contactar. Te responderemos a ".$email;
    }

    ?>

</body>
</html>
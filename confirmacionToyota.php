<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estiloconfiToyota.css">
    <title>Confirmación de Cotización</title>
</head>
<body>

    <header class="contenedor">
        <h2>Confirmando Contacto</h2>
    </header>

    <h3>Gracias por Contactarnos!</h3>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["Nombre"];
            $apellido = $_POST["Apellido"];
            $telefono = $_POST["Telefono"];
            $correo = $_POST["correo"];
            $identificacion = $_POST["identificacion"];
            $modelo = $_POST["modelo"];
            $version = $_POST["version"];
            $respuesta1 = $_POST["respuesta1"]; 
            $respuesta2 = $_POST["respuesta2"]; 

            echo '<div class="Mostrar">';
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Apellido: $apellido</p>";
            echo "<p>Teléfono: $telefono</p>";
            echo "<p>Correo: $correo</p>";
            echo "<p>No. de Identificación: $identificacion</p>";
            echo "<p>Modelo a cotizar: $modelo</p>";
            echo "<p>Versión: $version</p>";
            echo "<p>¿Cuándo desea realizar su compra?</p>";
            echo "<p> $respuesta1</p>"; 
            echo "<p>¿Dónde desea ser atendido?</p>";
            echo "<p> $respuesta2</p>"; 
            echo '<a href="Principal.html" ><input type="button" value="SALIR" class="boton"></a>';
            echo '</div>';
        } else {
            echo "<p>No se han recibido datos del formulario.</p>";
        }

        
    ?>

</body>
</html>

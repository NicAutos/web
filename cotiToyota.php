<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estiloCotToyota.css">
    <title>Document</title>
</head>
<body>
    
    <header class="contenedor">
        <img src="IMG/logoToyota.png" >
    </header>

    <div class="titulo">
        <h4>Cotice su próximo TOYOTA ahora</h4>
    </div>

    <form action="confirmacionToyota.php" method="post">
        <label for="modelo">Modelo a cotizar</label>
            <select id="modelo" name="modelo" required>
                <option value="Agya">Agya</option>
                <option value="Yaris">Yaris</option>
                <option value="Yaris Cross">Yaris Cross</option>
                <option value="Raize">Raize</option>
                <option value="Rush">Rush</option>
                <option value="Corolla Cross">Corolla Cross</option>
                <option value="Fortuner">Fortuner</option>
                <option value="Prado">Prado</option>
                <option value="Landcruiser SW">Landcruiser SW</option>
                <option value="Hilux 2.4 4x2">Hilux 2.4 4x2</option>
                <option value="Hilux 2.4 4x4">Hilux 2.4 4x4</option>
                <option value="Hilux 2.8 4x4">Hilux 2.8 4x4</option>
            </select>

            <label for="version">Versión*</label>
                <select id="version" name="version" required>
                    <option value="" disabled selected hidden>-- Ninguno --</option>
                    <option value="Automático">Automático</option>
                    <option value="Mecánico">Mecánico</option>
                </select>
                
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="nombre">

            <label for="Apellido">Apellido</label>
            <input type="text" name="Apellido" id="Apellido">

            <label for="Teléfono">Teléfono</label>
            <input type="text" name="Telefono" id="Telefono">

            <label for="correo">Correo</label>
            <input type="email" name="correo" id="correo">

            <label for="identificacion">No. de Identificación</label>
            <input type="text" id="identificacion" name="identificacion" pattern="[0-9]{14}" title="Debe tener exactamente 14 dígitos" required>

            <label for="pregunta1">¿Cuándo desea realizar su compra?</label>
                <select id="respuesta1" name="respuesta1" required>
                    <option value="En los próximos 30 días">En los próximos 30 días</option>
                    <option value="Dentro de 1 a 3 meses">Dentro de 1 a 3 meses</option>
                    <option value="Dentro de 3 a 6 meses">Dentro de 3 a 6 meses</option>
                    <option value="Aun no estoy seguro de comprar">Aun no estoy seguro de comprar</option>
                </select>

                <label for="pregunta2">¿Dónde desea ser atendido?</label>
                <select id="respuesta2" name="respuesta2" required>
                    <option value="Managua">Managua</option>
                    <option value="Jinotega">Jinotega</option>
                    <option value="Matagalpa">Matagalpa</option>
                    <option value="Juigalpa">Juigalpa</option>
                    <option value="Estelí">Estelí</option>
                    <option value="León">León</option>
                    <option value="Chinadega">Chinadega</option>
                    <option value="Madriz">Madriz</option>
                </select>

            <input type="submit" value="Enviar">
    </form>

    
    
</body>
</html>
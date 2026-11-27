<?php

$nombre = $_POST["nombre"] ?? "";
$correo = $_POST["correo"] ?? "";
$telefono = $_POST["telefono"] ?? "";
$tema = $_POST["tema"] ?? "";
$mensaje = $_POST["mensaje"] ?? "";

if (empty($nombre)) {
    header("Location: contacto.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1>
    ¡Gracias <?php echo $nombre; ?>!
</h1>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <?php include("includes/header.php"); ?>

    <main class="hero">

        <h1>
            ¡Gracias <?php echo htmlspecialchars($nombre); ?>!
        </h1>

        <p>
            Hemos recibido correctamente tu solicitud.
        </p>

        <p>
            Muy pronto nos pondremos en contacto contigo.
        </p>

        <div class="card" style="max-width:700px; margin:30px auto;">

            <h3>Resumen de tu solicitud</h3>

            <p>
                <strong>Nombre:</strong>
                <?php echo htmlspecialchars($nombre); ?>
            </p>

            <p>
                <strong>Correo:</strong>
                <?php echo htmlspecialchars($correo); ?>
            </p>

            <p>
                <strong>WhatsApp:</strong>
                <?php echo htmlspecialchars($telefono); ?>
            </p>

            <p>
                <strong>Tipo de diseño:</strong>
                <?php echo htmlspecialchars($tema); ?>
            </p>

            <p>
                <strong>Descripción:</strong><br>
                <?php echo nl2br(htmlspecialchars($mensaje)); ?>
            </p>

        </div>

        <a href="index.php" class="boton">
            Volver al Inicio
        </a>

    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>
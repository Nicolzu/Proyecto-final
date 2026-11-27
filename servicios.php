<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios | NZ Atelier</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <?php include("includes/header.php"); ?>

    <main>

        <!-- Hero -->
        <section class="hero">

            <img
                src="img/logo.jpg"
                alt="Logo NZ Atelier"
                class="logo-principal">

            <h1>Nuestros Servicios</h1>

            <p class="eslogan">
                Diseños personalizados hechos con pasión y creatividad.
            </p>

        </section>

        <!-- Catálogo -->
        <section class="destacados">

            <h2>Catálogo de Diseños</h2>

            <p>
                Cada alfombra es elaborada de forma artesanal y puede
                personalizarse según tus gustos.
            </p>

            <div class="cards" id="contenedorServicios">

                <!-- Las tarjetas se generan desde JavaScript -->

            </div>

        </section>

        <!-- Proceso -->
        <section class="beneficios">

            <h2>¿Cómo Trabajamos?</h2>

            <div class="cards">

                <div class="card">

                    <h3>1. Nos compartes tu idea</h3>

                    <p>
                        Envíanos una imagen, personaje, videojuego o
                        cualquier inspiración.
                    </p>

                </div>

                <div class="card">

                    <h3>2. Diseñamos la propuesta</h3>

                    <p>
                        Definimos medidas, materiales y acabados para
                        crear una pieza única.
                    </p>

                </div>

                <div class="card">

                    <h3>3. Fabricación artesanal</h3>

                    <p>
                        Elaboramos tu alfombra cuidando cada detalle
                        para obtener el mejor resultado.
                    </p>

                </div>

                <div class="card">

                    <h3>4. Entrega</h3>

                    <p>
                        Recibe tu diseño personalizado listo para
                        decorar tu espacio.
                    </p>

                </div>

            </div>

        </section>

        <!-- Llamado a la acción -->
        <section class="contacto-home">

            <h2>¿Tienes una idea en mente?</h2>

            <p>
                Convirtamos tu personaje favorito, videojuego o diseño
                soñado en una alfombra única.
            </p>

            <a href="contacto.php" class="boton">
                Solicitar Cotización
            </a>

        </section>

    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>
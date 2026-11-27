<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | NZ Atelier</title>

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <?php include("includes/header.php"); ?>

    <main>

        <!-- HERO -->

        <section class="hero-contacto">

            <div class="slider-bg">

                <div class="slide activo"></div>
                <div class="slide"></div>
                <div class="slide"></div>

            </div>

            <div class="overlay">

                <h1>CONVIERTE TU IDEA EN UNA ALFOMBRA</h1>

                <p>
                    Personajes, videojuegos, anime o cualquier diseño
                    que imagines. Nosotros lo hacemos realidad.
                </p>

                <a href="#pedido" class="boton">
                    Quiero mi diseño
                </a>

            </div>

        </section>

        <!-- PASOS -->

        <section class="beneficios">

            <h2>¿Cómo Funciona?</h2>

            <div class="cards">

                <div class="card">
                    <h3>1️⃣ Cuéntanos tu idea</h3>
                    <p>
                        Envíanos una imagen o una referencia.
                    </p>
                </div>

                <div class="card">
                    <h3>2️⃣ Diseñamos la propuesta</h3>
                    <p>
                        Analizamos colores, tamaños y detalles.
                    </p>
                </div>

                <div class="card">
                    <h3>3️⃣ Creamos tu alfombra</h3>
                    <p>
                        Fabricamos el diseño de forma artesanal.
                    </p>
                </div>

                <div class="card">
                    <h3>4️⃣ Recibes tu pedido</h3>
                    <p>
                        Disfruta una pieza única hecha para ti.
                    </p>
                </div>

            </div>

        </section>

        <!-- FORMULARIO -->

        <section class="contacto-formulario" id="pedido">

            <h2>Solicita tu Diseño Personalizado</h2>

            <p class="texto-formulario">
                Comparte tu idea y la convertiremos en una pieza única.
            </p>

            <form
                action="gracias.php"
                method="POST"
                enctype="multipart/form-data"
                class="formulario">

                <label for="nombre">
                    Nombre Completo
                </label>

                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    placeholder="Tu nombre"
                    required>

                <label for="telefono">
                    WhatsApp
                </label>

                <input
                    type="tel"
                    id="telefono"
                    name="telefono"
                    placeholder="8888-8888"
                    required>

                <label for="correo">
                    Correo Electrónico
                </label>

                <input
                    type="email"
                    id="correo"
                    name="correo"
                    placeholder="correo@ejemplo.com"
                    required>

                <label for="tema">
                    Tipo de Diseño
                </label>

                <select id="tema" name="tema">

                    <option value="">
                        Selecciona una opción
                    </option>

                    <option>Anime</option>

                    <option>Videojuegos</option>

                    <option>Películas</option>

                    <option>Series</option>

                    <option>Personalizado</option>

                </select>

                <!-- ZONA DE INSPIRACIÓN -->

                <div class="subida-diseno">

                    <h3>🎨 Muestra tu Inspiración</h3>

                    <p>
                        Adjunta una imagen para ayudarnos a comprender
                        mejor tu diseño ideal.
                    </p>

                    <input
                        type="file"
                        id="imagen"
                        name="imagen"
                        accept=".jpg,.jpeg,.png,.webp">

                </div>

                <label for="mensaje">
                    Describe tu Idea
                </label>

                <textarea
                    id="mensaje"
                    name="mensaje"
                    rows="6"
                    placeholder="Cuéntanos cómo imaginas tu alfombra..."
                ></textarea>

                <button type="submit" class="boton">
                    Solicitar Cotización
                </button>

            </form>

        </section>

        <!-- INSTAGRAM -->

        <section class="instagram-section">

            <h2>Síguenos en Instagram</h2>

            <div class="instagram-card">

                <h3>@nzatelier.cr</h3>

                <p>
                    Descubre nuestros trabajos reales,
                    nuevos diseños y proyectos exclusivos.
                </p>

                <a
                    href="https://www.instagram.com/nzatelier.cr/"
                    target="_blank"
                    class="boton">

                    Ver Instagram

                </a>

            </div>

        </section>

        <!-- WHATSAPP -->

        <section class="contacto-home">

            <h2>¿Necesitas una respuesta rápida?</h2>

            <p>
                Escríbenos directamente por WhatsApp.
            </p>

            <a
                href="https://wa.me/50662649004"
                target="_blank"
                class="boton">

                Escribir por WhatsApp

            </a>

        </section>

        <!-- FRASE FINAL -->

        <section class="frase-final">

            <h2>
                Cada alfombra cuenta una historia.
            </h2>

            <p>
                ¿Cuál será la tuya?
            </p>

        </section>

    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>
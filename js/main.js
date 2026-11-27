// ===================================
// MENÚ HAMBURGUESA
// ===================================

// Busca el botón y el menú
const btnMenu = document.querySelector("#btnMenu");
const menu = document.querySelector("#menu");

// Verifica que existan antes de agregar eventos
if (btnMenu && menu) {

    btnMenu.addEventListener("click", () => {

        menu.classList.toggle("activo");

    });

}


// ===================================
// SERVICIOS NZ ATELIER
// ===================================

// Solo ejecuta este bloque si estamos
// en la página de servicios

const contenedor = document.getElementById("contenedorServicios");

if (contenedor) {

    const servicios = [

        {
            nombre: "Alfombra Hollow Knight",
            imagen: "img/hollow-knight.jpg",
            descripcion: "Diseño inspirado en el popular videojuego Hollow Knight."
        },

        {
            nombre: "Alfombra Harry Potter",
            imagen: "img/harry-potter.jpg",
            descripcion: "Alfombra temática inspirada en el andén 9¾."
        },

        {
            nombre: "Alfombra Akaza",
            imagen: "img/Akasa.png",
            descripcion: "Diseño inspirado en el personaje Akaza de Demon Slayer."
        },

        {
            nombre: "Diseño Personalizado",
            imagen: "img/logo.jpg",
            descripcion: "Creamos alfombras únicas basadas en tus ideas y diseños favoritos."
        },

        {
            nombre: "Diseños Gamer",
            imagen: "img/hollow-knight.jpg",
            descripcion: "Videojuegos convertidos en piezas decorativas exclusivas."
        },

        {
            nombre: "Diseños Anime",
            imagen: "img/Akasa.png",
            descripcion: "Personajes y escenas de anime transformados en arte textil."
        }

    ];

    servicios.forEach(servicio => {

        contenedor.innerHTML += `

            <div class="card">

                <img src="${servicio.imagen}" alt="${servicio.nombre}">

                <h3>${servicio.nombre}</h3>

                <p>${servicio.descripcion}</p>

            </div>

        `;

    });

}


// ===================================
// SLIDER HERO
// ===================================

document.addEventListener("DOMContentLoaded", () => {

    const slides = document.querySelectorAll(".slide");

    if (slides.length === 0) return;

    let indice = 0;

    setInterval(() => {

        slides[indice].classList.remove("activo");

        indice++;

        if (indice >= slides.length) {
            indice = 0;
        }

        slides[indice].classList.add("activo");

    }, 4000);

});
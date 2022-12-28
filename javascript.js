//Variables

const baseDeDatos = [
    {
        id: 1,
        nombre: "Notebook Gamer I5 8gb 256gb Ssd Rtx3050",
        precio: 2273.68,
        imagen: "../assets/producto1.WEBP",
        descripcion: "Domina el juego: Con el procesador Intel Core i5-10300H de 10.ª generación, tu Nitro 5 está equipado con una potencia increíble.",
        categoria: "Notebook"
    },
    {
        id: 2,
        nombre: "Notebook Gamer Asus I7 8gb 512gb Ssd Rtx3050",
        precio: 2636.61,
        imagen: "../assets/producto2.webp",
        descripcion:"Atrévete. Haz más mientras te desplazas. La nueva TUF Dash F15 ofrece una experiencia gaming avanzada en un chasis superdelgado.",
        categoria: "Notebook"
    },
    {
        id: 3,
        nombre: "Notebook Hp Celeron 4gb 128gb Ssd",
        precio: 867.44,
        imagen: "../assets/producto3.webp",
        descripcion: "La notebook HP 15-DW1080LA posee un diseño elegante, liviano y portable para que la lleves con vos a donde sea.",
        categoria: "Notebook"
    },
    {
        id: 4,
        nombre: "Notebook Acer Ryzen 3 4gb 256gb Ssd",
        precio: 1275.69,
        imagen: "../assets/producto4.webp",
        descripcion: "Con la línea Aspire 5 de Acer podrás experimentar un nuevo nivel de diseño y rendimiento, tanto para el uso cotidiano de la notebook.",
        categoria: "Notebook"
    },
    {
        id: 5,
        nombre: "Notebook Lenovo Ryzen 3 8gb Ram Ssd",
        precio: 1156.1,
        imagen: "../assets/producto5.webp",
        descripcion: "Permanece conectado con lo que más importa gracias a la batería de larga duración y un diseño delgado y portátil de bisel con microbordes.",
        categoria: "Notebook"
    },
    {
        id: 6,
        nombre: "Notebook Asus Ryzen 3 4gb RAM 64gb",
        precio: 1169.82,
        imagen: "../assets/producto6.webp",
        descripcion: "La Chromebook Asus CM5 es una notebook pensada para navegar, trabajar o estudiar online. Viene con Chrome OS: el sistema operativo rápido.",
        categoria: "Notebook"
    },
    {
        id: 7,
        nombre: "Notebook Gamer Msi I5 8gb 256gb Ssd Gtx1650",
        precio: 2046.87,
        imagen: "../assets/producto7.webp",
        descripcion: "La Notebook Gamer MSI GF63 está pensada para juegos, diseño gráfico y tareas de edición avanzadas.",
        categoria: "Notebook"
    },
    {
        id: 8,
        nombre: "Notebook Computadora Portatil Oficina",
        precio: 1207.69,
        imagen: "../assets/producto8.webp",
        descripcion: "Su procesador Intel Core i3-10110U y su memoria de 4GB se complementan para ofrecer un mayor rendimiento con un bajo consumo de energía.",
        categoria: "Notebook"
    },
    {
        id: 9,
        nombre: "Mouse Gamer Redragon Centrophorus2 M601",
        precio: 583.41,
        imagen: "../assets/producto9.webp",
        descripcion: "Fue una tormenta. Fue la puerta de ingreso a los ratones gamers para cientos de miles de personas.",
        categoria: "Mouse"
    }
    ,
    {
        id: 10,
        nombre: "Mouse Gamer Redragon Storm Elite M988 Black",
        precio: 1141.27,
        imagen: "../assets/producto10.webp",
        descripcion: "Más ágil, más rápido y más preciso que los demás, el Storm Elite está concebido para ser el mejor y lo consigue.",
        categoria: "Mouse"
    }
    ,
    {
        id: 11,
        nombre: "Mouse Gamer Logitech G Series G502 Hero",
        precio: 1858.87,
        imagen: "../assets/producto11.webp",
        descripcion: "Diseñado para un desempeño avanzado en los juegos. G502 HERO cuenta con un sensor de juegos HERO 25K",
        categoria: "Mouse"
    }
    ,
    {
        id: 12,
        nombre: "Mouse inalámbrico Logitech G Series Lightspeed G305",
        precio: 1680.87,
        imagen: "../assets/producto12.webp",
        descripcion: "Mouse inalámbrico para juegos LIGHTSPEED diseñado para un desempeño excelente con las innovaciones tecnológicas más recientes.",
        categoria: "Mouse"
    }
    ,
    {
        id: 13,
        nombre: "Mouse Razer DeathAdder Essential",
        precio: 1494.29,
        imagen: "../assets/producto13.webp",
        descripcion: "Por más de una decada, la línea Razer DeathAdder ha sido un jugador principal en la arena global de esports.",
        categoria: "Mouse"
    }
    ,
    {
        id: 14,
        nombre: "Mouse Gamer HyperX Pulsefire Core RGB",
        precio: 469.80,
        imagen: "../assets/producto14.webp",
        descripcion: "HyperX Pulsefire Core ™ ofrece lo esencial para los jugadores que buscan un ratón para juegos RGB sólido, cómodo y con cable.",
        categoria: "Mouse"
    }
    ,
    {
        id: 15,
        nombre: "Mouse Gamer Redragon Gainer M610 RED",
        precio: 386.43,
        imagen: "../assets/producto15.webp",
        descripcion: "Lo que necesitas para competir, sin ornamentos triviales. El Gainer es un clásico ratón gamer, con seis botones.",
        categoria: "Mouse"
    }
    ,
    {
        id: 16,
        nombre: "Mouse Gamer Redragon Invader M719-RGB",
        precio: 556.36,
        imagen: "../assets/producto16.webp",
        descripcion: "Nadie juega para perder. En la gama de juegos que va de los shooters en primera persona a los MOBA",
        categoria: "Mouse"
    }
    ,
    {
        id: 17,
        nombre: "Auriculares inalámbricos Logitech G Series G733",
        precio: 5623.84,
        imagen: "../assets/producto17.webp",
        descripcion: "Auriculares con micrófono inalámbricos Logitech G733 para gaming con diadema con suspensión, LIGHTSPEED, RGB LIGHTSYNC.",
        categoria: "Auriculares"
    }
    ,
    {
        id: 18,
        nombre: "Auriculares inalámbricos Logitech G Series G435",
        precio: 5723.84,
        imagen: "../assets/producto18.webp",
        descripcion: "Ligeros, micrófono integrado, Batería de 18 horas, Compatibles con Dolby Atmos, Bluetooth, PC, PS4, PS5, Móvil.",
        categoria: "Auriculares"
    }
    ,
    {
        id: 19,
        nombre: "Auriculares inalámbricos HyperX Cloud Flight",
        precio: 4285.91,
        imagen: "../assets/producto19.webp",
        descripcion: "Ideado para los gamers más exigentes, el HyperX Cloud Flight tiene todo lo que un jugador busca.",
        categoria: "Auriculares"
    }
    ,
    {
        id: 20,
        nombre: "Auriculares Gamer Logitech Pro X Black",
        precio: 5680.82,
        imagen: "../assets/producto20.webp",
        descripcion: "Diseñados con y para profesionales. El sonido envolvente 7.1 de próxima generación y los transductores PRO-G.",
        categoria: "Auriculares"
    }
    ,
    {
        id: 21,
        nombre: "Auriculares inalámbricos Corsair VOID Elite Wireless",
        precio: 6273.81,
        imagen: "../assets/producto21.webp",
        descripcion: "Escúchelo todo con un sonido envolvente 7.1, desde la pisada más ligera hasta la explosión más atronadora.",
        categoria: "Auriculares"
    }
    ,
    {
        id: 22,
        nombre: "Auriculares Gamer inalámbricos Logitech G Series G935",
        precio: 6219.22,
        imagen: "../assets/producto22.webp",
        descripcion: "Los transductores de audio PRO-G de 50 mm y DTS Headphone:X 2.01 crean espacios sonoros más expansivos.",
        categoria: "Auriculares"
    }
    ,
    {
        id: 23,
        nombre: "Auriculares Gamer Logitech G Series G432",
        precio: 2398.43,
        imagen: "../assets/producto23.webp",
        descripcion: "Experimentá la adrenalina de sumergirte en la escena de otra manera! Tener auriculares específicos para jugar.",
        categoria: "Auriculares"
    }
    ,
    {
        id: 24,
        nombre: "Auriculares Gamer Logitech G Series G433",
        precio: 3405.94,
        imagen: "../assets/producto24.webp",
        descripcion: "Con un peso de 259 g, los audífonos G433 están hechos de policarbonato ligero inyectado con fibra de vidrio.",
        categoria: "Auriculares"
    }
];



let productosDinamicos = baseDeDatos;



let carritoDeCompra = [];
const divisa = "$";
const items = document.querySelector("#items");
const carrito = document.querySelector("#carrito");
const total = document.querySelector("#total");
const botonVaciar = document.querySelector("#boton-vaciar");
const tituloPrincipal = document.querySelector("#tituloPrincipal");
const  miLocalStorage = window.localStorage;

const categoriaSelect = document.querySelector('#categoriaSelect');

categoriaSelect.addEventListener('change', cambiarCategoria);

//Funciones. Creea las cards

function renderizarProductos() {
    items.textContent = "";

    let categoriaAnterior;

    productosDinamicos.forEach((info) => {
        if(categoriaAnterior !== info.categoria) {

            const newTitle = document.createElement('h1');
            
            newTitle.textContent = info.categoria;
            
            items.appendChild(newTitle);
            
            categoriaAnterior = info.categoria;
        }

        //Estructura
        const miCard = document.createElement("div");
        miCard.classList.add("card", "rounded-4", "col-12", "col-sm-6", "col-md-4", "col-lg-3", "m-1" );

        //Body
        const miCardBody = document.createElement("div");
        miCardBody.classList.add("card-body");

        //Titulo
        const miCardTitle = document.createElement("h5");
        miCardTitle.classList.add("card-title");
        miCardTitle.textContent = info.nombre;

        //Imagen
        const miCardImgen = document.createElement("img");
        miCardImgen.classList.add("img-fluid");
        miCardImgen.setAttribute("src", info.imagen);

        //Descripcion
        const miCardDescripcion = document.createElement("p");
        miCardDescripcion.classList.add("descripcion");
        miCardDescripcion.textContent = info.descripcion;

        //Precio
        const miCardPrecio = document.createElement("p");
        miCardPrecio.classList.add("card-text");
        miCardPrecio.textContent = `${info.precio}${divisa}`;

        //Boton
        const miCardBoton = document.createElement("button");
        miCardBoton.classList.add("btn", "btn-primary");
        miCardBoton.textContent = "Agregar Al Carrito"
        miCardBoton.setAttribute("marcador", info.id);
        miCardBoton.setAttribute("data-bs-toggle", "modal");
        miCardBoton.setAttribute("data-bs-target", "#staticBackdrop");
        miCardBoton.addEventListener("click", () => agregarProductoAlCarrito(info));

        //Insertar
        miCardBody.appendChild(miCardImgen);
        miCardBody.appendChild(miCardTitle);
        miCardBody.appendChild(miCardDescripcion)
        miCardBody.appendChild(miCardPrecio);
        miCardBody.appendChild(miCardBoton);
        miCard.appendChild(miCardBody);
        items.appendChild(miCard);
    });
}

//Evento para añadir el producto al carrito de compra
function agregarProductoAlCarrito(producto) {
    let productoEncontrado = carritoDeCompra.find(prod => prod.id === producto.id);

    if(productoEncontrado) {
        productoEncontrado.cantidad += 1;
    } else {
        carritoDeCompra.push({
            ...producto,
            cantidad: 1
        })
    }

    console.log(carritoDeCompra);
    //Añadimos el nodo al carrito
    //Actualizamos el carrito
    renderizarCarrito();
    //Actualizar el LocalStorage
    guardarCarritoEnLocalStorage();
}

//Muestra los productos guardados en el carrito
function renderizarCarrito() {
    //Vaciamos el html
    carrito.textContent = "";
    //Quitamos los duplicados
    carritoDeCompra.forEach(prod => {
        
        //Creamos el nodo del item del carrito
        const miCard = document.createElement("li");
        miCard.classList.add("list-group-item", "text-right", "mx-2");
        miCard.textContent = `${prod.cantidad} x ${prod.nombre} - ${prod.precio}${divisa}`;

        //Boton de Borrar
        const miBoton = document.createElement("button");
        miBoton.classList.add("btn", "btn-danger", "mx-5");
        miBoton.textContent = "X";
        miBoton.style.marginLeft = "1rem";
        miBoton.addEventListener("click", () => borrarItemCarrito(prod.id))
        //Mezclamos todo
        miCard.appendChild(miBoton);
        carrito.appendChild(miCard);
    });

    //Renderizamos el precio total en el HTML
    total.textContent = calcularTotal();
}


//Evento para borrar un producto del carrito
function borrarItemCarrito(id) {
    //Borramos toodos los productos
    carritoDeCompra = carritoDeCompra.filter((prod) => {
        return prod.id !== id;
    });
    //Volvemos a renderizar
    renderizarCarrito();
    //Actulizamos El LocalStorage
    guardarCarritoEnLocalStorage();
}

//Calcula el precio total teniendo en cuenta los productos repetidos 
function calcularTotal() {
    //Recorremos el array del carrito
    return carritoDeCompra.reduce((total, item) => {
        return total + (item.precio * item.cantidad);
    }, 0);
}

//Vacia el carrito y vuelve a visualizarlo
function vaciarCarrito() {
    //Limpiamos los productos guardados
    carritoDeCompra = [];
    //Renderizamos los cambios
    renderizarCarrito();
    localStorage.clear();
}

function cambiarCategoria(event) {
    event.preventDefault();

    let categoria = event.target.value;

    if(categoria === "") {
        productosDinamicos = baseDeDatos;
    } else {
        productosDinamicos = baseDeDatos.filter(prod => prod.categoria === categoria);
    }

    renderizarProductos();
}

function guardarCarritoEnLocalStorage () {
    miLocalStorage.setItem('carritoDeCompra', JSON.stringify(carritoDeCompra));
}

function cargarCarritoDeLocalStorage () {

    if (miLocalStorage.getItem('carritoDeCompra') !== null) {
  
        carritoDeCompra = JSON.parse(miLocalStorage.getItem('carritoDeCompra'));
    }
}

//Eventos
botonVaciar.addEventListener("click", vaciarCarrito);
//Inicio
renderizarProductos();




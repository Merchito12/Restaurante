const favi = document.getElementById('favs');
const eliminarfa = document.getElementById("eliminar")
const entradasbtn = document.getElementById("Entradas")
const platosbtn = document.getElementById("PlatosPrincipales")
const bebidasbtn = document.getElementById("Bebidas")
const postresbtn = document.getElementById("Postres")
const resultado = document.getElementById('result');
const enviar = document.getElementById('Enviar');
const foodInput = document.getElementById('input');
const foodList = document.getElementById('foodlList');
const entradas = document.getElementById('entrad');

function traerplatos() {
    console.log(productos);
    for (let n = 0; n < 10; n++) {
        if (productos) {
            const opcion = productos[n];
            elementos(opcion);
        } else {
            console.log("no encontrado")
        }
    } 
}
function guardarLocal(opcion) {
    favi.innerHTML = "";
    const idFood = opcion.id;
    const nombre = opcion.nombre;
    localStorage.setItem(idFood, "")
    alert(`Se ha agregado al carrito el cóctel: ${nombre}!`);
    mostrarfav();
}
function mostrarcategoria(categoria) {
    let categoriase = categoria; 
    foodList.innerHTML = "";
    for (let n = 0; n < productos.length; n++) {
        if (productos[n].categoria == categoriase) {
            const opcion = productos[n];
            elementos(opcion);
        }
    }
}
function mostrarfav() {
    favi.innerHTML = "";
    const keys = Object.keys(localStorage);
    for (let h = 0; h < keys.length; h++) {
        let id = keys[h];
        const opcion = productos[id - 1];

        const article = document.createElement('article');
        article.classList.add('opcion');

        const idopcion = opcion.id;
        const imagenopcion = document.createElement('img');
        imagenopcion.src = opcion.imagen;

        article.appendChild(imagenopcion);

        const nombreOpcion = document.createElement('h4');
        nombreOpcion.setAttribute('class', 'name');
        nombreOpcion.textContent = opcion.nombre;
        article.appendChild(nombreOpcion);

        const precioOpcion = document.createElement('h4');
        precioOpcion.setAttribute('class', 'precio');
        precioOpcion.textContent = `Precio: $ ${opcion.precio}`;
        article.appendChild(precioOpcion);

        const categoriaOpcion = document.createElement('p');
        categoriaOpcion.textContent = `Categoría: ${opcion.categoria}`;
        article.appendChild(categoriaOpcion);

        const descripcionOpcion = document.createElement('p');
        descripcionOpcion.textContent = `Preparación: ${opcion.informacion}`;
        article.appendChild(descripcionOpcion);
        favi.appendChild(article);

        Total(opcion.precio)
    }
}

function eliminarf() {
    if (window.confirm('¿Estás seguro de que deseas eliminar los favoritos?')) {
        localStorage.clear();
        mostrarfav();
        resultado.textContent = "0";
    } else {
        console.log("ok");
    }
    mostrarfav();
}

function Total(precio) {
    const preci = precio;
    let total = 0;
    total = parseFloat(resultado.innerText);//obtenemos la info de resultado
    total += parseFloat(preci);//sumamos
    resultado.textContent = total.toFixed(2);//agregamos dos decimales
}
function elementos(opcion) {
    const article = document.createElement('article');
    article.classList.add('opcion');

    const imagenopcion = document.createElement('img');
    imagenopcion.src = opcion.imagen;
    article.appendChild(imagenopcion);

    const nombreOpcion = document.createElement('h4');
    nombreOpcion.setAttribute('class', 'name');
    nombreOpcion.textContent = opcion.nombre;
    article.appendChild(nombreOpcion);

    const botonagregar = document.createElement('button');
    botonagregar.setAttribute('class', 'btnagregar');
    botonagregar.innerHTML = '<i class="fa-solid fa-plus"></i>';
    article.appendChild(botonagregar);

    const precioOpcion = document.createElement('h4');
    precioOpcion.setAttribute('class', 'precio');
    precioOpcion.textContent = `Precio: $ ${opcion.precio}`;
    article.appendChild(precioOpcion);

    const categoriaOpcion = document.createElement('p');
    categoriaOpcion.textContent = `Categoría: ${opcion.categoria}`;
    article.appendChild(categoriaOpcion);

    const descripcionOpcion = document.createElement('p');
    descripcionOpcion.textContent = `Preparación: ${opcion.informacion}`;
    article.appendChild(descripcionOpcion);
    foodList.appendChild(article);

    botonagregar.addEventListener('click', () => {
        guardarLocal(opcion);
    });
}

    


function menues() {
    switch (key) {
        case value:

            break;

        default:
            break;
    }
}
function entrada() {
    let URL = 'https://script.google.com/macros/s/AKfycbz3EPAgZePOY21THYydS3_LH-G1ntkhneenTOSaq257QQzqevuoMXUUt6jV8EOB4JPv/exec';
    fetch(URL)
        .then(response => response.json)
        .then(dataPre)
    let data = dataPre.data;


    entradas.addEventListener('click', () => {

    })
}
eliminarfa.addEventListener('click', function () {eliminarf();});
entradasbtn.addEventListener('click', function () {mostrarcategoria("Entradas");});
platosbtn.addEventListener('click', function () {mostrarcategoria("Plato principal");});
bebidasbtn.addEventListener('click', function () {mostrarcategoria("Bebidas");});
postresbtn.addEventListener('click', function () {mostrarcategoria("Postres");});
enviar.addEventListener('click', () => {
    window.location.href = 'form';
})
window.onload = () => {
    mostrarfav(),traerplatos();
}

//export {pedidos};//para llevar info a otro archivo}
/* function buscarTeclado() {
    const URL = "https://script.google.com/macros/s/AKfycbz3EPAgZePOY21THYydS3_LH-G1ntkhneenTOSaq257QQzqevuoMXUUt6jV8EOB4JPv/exec";
    fetch(URL)
        .then(response => response.json())
        .then(dataPre => {

            var data = dataPre.data;

            for (let i = 0; i <= 14; i++) {
                const opcion = data[i];
                if (opcion.Nombre.toLowerCase() === (foodInput.textContent.toLocaleLowerCase())) {
                    encontrados(data);
                }
            }

        });
} */
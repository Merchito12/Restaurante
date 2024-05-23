<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assests/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
    <script type="module" src="assests/js/main.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>Restaurante</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.5">

</head>

<body>

    <header class="menu">
       <img src="images/logo.png" id="logo" alt="">
       <div class="dropdown">
        <button class="dropbtn">Menú</button>
        <div class="dropdown-content">
            <button class="categoria" id="Entradas">Entradas</button>
            <button class="categoria" id="PlatosPrincipales">Principales</button>
            <button class="categoria" id="Bebidas">Bebidas</button>
            <button class="categoria" id="Postres">Postres</button>
        </div>
      </div>
        
        <a href=""class="categoria" >Sobre Nosotros</a>
        <a href=""class="categoria" >Contacto</a>
    
       <a href="sesion">Iniciar sesion</a>
        
    </header>
    <main>
        <div class="Food">
            <h1></h1>
            <ul id="foodlList"></ul>
        </div>
        <div class="favoritos">
            <h1>Carrito de compras</h1>
            <section id="result">0</section>
            <span>Eliminar</span>
            <button id="eliminar"> <i class="fa-solid fa-trash"></i></button>
            <br>
            <button id="Enviar">Enviar</button>
            
            <section id="favs"></section>
        </div>
        
    </main>
</body>
<script>
    var productos= @json($productos);
</script>

</html>
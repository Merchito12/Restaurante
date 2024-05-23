<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=5.0">
    <link rel="stylesheet" href="assests/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Formulario</title>
</head>

<body>

    <header class="menu">
        <img src="images/logo.png" id="logo" alt="">
        <a href="index" class="categoria" >Platos</a>
        <a href=""class="categoria" >Sobre Nosotros</a>
        <a href=""class="categoria" >Contacto</a>
    </header>
    <main >
        <div class="caja-form">
       
                <form id="form" action="/api/form" method="POST"> 
                    @csrf
                    <h1 id="Titulo-form">
                        
                    </h1>
                    <div class="grupo">
                        <label for="">Nombre:
                            <input class="input" id="nombre" name="nombre">
                        </label>
                    </div>
                    <div class="grupo">
                        <label for="">Email:
                            <input class="input" id="email" name="email">
                        </label>
                    </div>
                    <div class="grupo">
                        <label for="">Numero:
                            <input class="input" id="numero" type="numero" placeholder="" name="Numero">
                        </label>
                    </div>
                    <div class="grupo">
                        <label for="">Direccion
                            <input class="input" id="direccion" name="direccion"  required>
                        </label>
                        
                    </div>
                    <div class="grupo">
                        <label for="">Productos:
                            <textarea name="productos" id="produs" cols="30" rows="2"></textarea>
                            
                        </label>
                    </div>
                    

                    <button id="send" type="submit">Enviar</button>
                </form>
            
            <script type="module" src="assests/js/former.js"></script>
            <a id="casita" href="/"><i class="fa-solid fa-house"></i></a>
        </div>
        <div class="favoritos">
            <h1>Carrito de compras</h1>
           
            <section id="result">0</section>
            <span>Eliminar</span>
            <button id="eliminar"> <i class="fa-solid fa-trash"></i></button>
            <br>

            <section id="favs"></section>
        </div>
        <script>
            var productoss= @json($productos);
        </script>
    </main>
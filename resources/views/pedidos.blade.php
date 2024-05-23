<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assests/css/clientes.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    console.log(urlParams);
    const id = urlParams.get('');
    console.log(id);
</script>

<body>

    <div class="sidebar">
        <header>
            <div class="user-img">

                <img src="../../images\usuariono.png" alt="">
            </div>
            <div class="user-details">
                <p class="tittle">administrador</p>

                <p class="name">h</p>
            </div>
        </header>
        <nav>
            <div class="menu">
                <ul class="menu-links">
                    <li class="links">
                        <a href="../api/clientes/1">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="texto-menu">Clientes</span>
                        </a>
                    </li>

                    <li class="links">
                        <a href="">
                            <i class='bx bx-dish'></i>
                            <span class="texto-menu">Platos</span>
                        </a>
                    </li>
                    <li class="links">
                        <a href="">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="texto-menu">Pedidos</span>
                        </a>
                    </li>
                    <p class="cuentap">Account</p>
                    <li class="cuenta">

                        <a href="">
                            <i class='bx bxs-user-account'></i>
                            <span class="texto-menu">Cuenta</span>
                        </a>
                    </li>
                    <li class="links">
                        <a href="../sesion">
                            <i class='bx bx-log-out'></i> <span class="texto-menu">Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    <section>
       
        <div class="botones">
            <h1>Pedidos</h1>
            <button id="btn-t">Todos</button>
            <button id="btn-e">Entregados</button>
            <button id="btn-p">Pendientes</button>
        </div>


        <table>
            <thead>
                <th>id</th>
                <th>nombre</th>
                <th>numero</th>
                <th>direccion</th>
                <th>Productos</th>
                <th>Fecha creacion</th>
                <th>Estado</th>
                <th>Accion</th>
            </thead>


            <tbody>

                @foreach ($productos as $producto)
                    <tr>
                        <td> {{ $producto->id }}</td>
                        <td> {{ $producto->nombre }}</td>
                        <td> {{ $producto->numero }}</td>

                        <td> {{ $producto->direccion }}</td>
                        <td> {{ $producto->productos }}</td>
                        <td> {{ $producto->created_at }}</td>
                                              
                        <td class="estado"> <button class="cambio" data-id="{{ $producto->id }}" >{{ $producto->estado }}</button></td>




                    </tr>
                @endforeach
                <script type="module" src="/../assests/js/pedidos.js"></script>

            </tbody>

        </table>

    </section>

</body>

</html>

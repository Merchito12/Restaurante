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

                <p class="name"> {{ $admin->nombre }}</p>
            </div>
        </header>
        <nav>
            <div class="menu">
                <ul class="menu-links">
                    <li class="links">
                        <a href="">
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
                        <a href="/api/pedidos">
                            <i class="bx bx-home-alt icon"></i>
                            <span  class="texto-menu">Pedidos</span>
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
                        <a href="/sesion">
                            <i class='bx bx-log-out'></i> <span class="texto-menu">Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    <section>
        <h1>Clientes</h1>

        <table>
            <thead>
                <th>id</th>
                <th>nombre</th>
                <th>email</th>
                <th>token_rembered</th>
                <th>telefono</th>
                <th>direccion</th>
                <th>Accion</th>
            </thead>

            <tbody>
                <h1></h1>
            </tbody>
            <tbody>

                @foreach ($users as $user)
                    <tr>
                        <td> {{ $user->id }}</td>
                        <td> {{ $user->nombre }}</td>
                        <td> {{ $user->email }}</td>

                        <td> {{ $user->token_rembered }}</td>
                        <td> {{ $user->telefono }}</td>
                        <td> {{ $user->direccion }}</td>


                    </tr>
                @endforeach

            </tbody>

        </table>

    </section>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Assets/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../Assets/images/PINTALOVERS/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    </header>
    <nav class="nav-extended" style="background-color: #001d6d; height: 100px;">
        <div class="nav-wrapper dentro">
            <div class="fondo-logo">
                <a href="#" class="brand-logo">
                    <img src="../Assets/icons/logo_tipo_pintala_pequeno_115x.png" alt="logo" class="logoprincipal">
                </a>
            </div>
            <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                <i class="material-icons">
                    menu
                </i>
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Tienda</a></li>
                <li><a href="#">Pintalovers</a></li>
                <li><a href="#">ayuda</a></li>
                <li><a href="#">
                        <img src="../Assets/icons/login/Iconos PINTALOVERS/carro compras.svg" alt="carrito" width="25px">
                    </a>
                </li>
            </ul>
        </div>
        <div class="carrito2m">
            <a href="#" class="sidenav-trigger">
                <img src="../Assets/icons/login/Iconos PINTALOVERS/carro compras.svg" alt="carrito" width="25px">
            </a>
        </div>
        <ul class="sidenav" id="menu-responsive">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Tienda</a></li>
            <li><a href="#">Pintalovers</a></li>
            <li><a href="#">ayuda</a></li>
        </ul>
    </nav>
    <header>
        <div class="contenido" width="40%">
            <div class="imagen1">
                <img src="../Assets/icons/login/Iconos PINTALOVERS/Imagen-Animada-Login.gif" alt="imagen">
                <p class="text-informativo">Encuentra una completa comunidad con lo PINTALOVERS más <br>
                    experimentados y pódran darte consejos para que sigas
                    <br> mejorando tu técnica</p>
            </div>
        </div>
        <div class="login1">
            <form action="rusuario.php" method="post">
                <br><br><br><br>
                <img src="../Assets/images/PINTALOVERS/Logo Pintalovers by Pintalacuadros.png" alt="pintala"
                    class="logopintala">
                <br><br>
                <input type="text" class="user" id="txtuser" name="txtuser" placeholder="   Nombre Completo" required>
                <input type="email" class="user" id="txtemail" name="txtemail" placeholder="   Correo Electrónico" required>
                <input type="password" class="password" id="txtpassowrd" name="txtpassword" placeholder="   Contraseña" required>
                <input type="number" class=password id="txtpin" name="txtpin" placeholder="    Pin compra de cuadro" required>
                <br><br>
                <input type="submit" value="Registrarse" id="sesion" name="sesion">
                <br><br>
                <p>¿Tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
            </form>
        </div>
        </div>
    </header>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            M.AutoInit();
        });
    </script>
</body>

</html>
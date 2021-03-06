<?php
    session_start();
    if (!isset($_SESSION['pin_cuadro'])) {
        header('Location: index.php');
    }
    include '../database/conexion.php';
    $id = $_SESSION['pin_cuadro'];
    $setencia = $bd->prepare("SELECT * FROM usuario WHERE pin_cuadro = ?");
    $resultado = $setencia->execute([$id]);
    $persona = $setencia->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar datos pintala</title>
    <link rel="stylesheet" href="../Assets/css/AdminAct.css">
    <link rel="stylesheet" href="../Assets/css/header2.css">
    <link rel="icon" href="../Assets/images/PINTALOVERS/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
        <ul>
            <li><a class="carrito" href=""><img src="../Assets/images/PINTALOVERS/carrito.png" alt=""></a></li>
        </ul>

        <div class="logo">
            <img src="../Assets/images/logo_tipo_pintala_pequeno_115x.png" alt="">
        </div>
        <input type="checkbox" src="" alt="Submit" width="48" height="48" id="btn-nav">
        <label for="btn-nav">
            <img src="../Assets/images/PINTALOVERS/menu.png" alt="">
        </label>
        <nav class="nav">
            <ul>
                <li><a href="">INICIO</a> </li>
                <li><a href="">TIENDA</a> </li>
                <li><a href="">PINTALOVERS</a> </li>
                <li><a href="">AYUDA</a> </li>
                <li class="car">
                    <a href="">
                        <img src="../Assets/images/PINTALOVERS/carrito.png" alt="">
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="usuario2">
    <h2>Actualizar Datos</h2>
    <form action="editarProcesoC.php" method="POST">
        <div>
           <input type="text" class="ingresar" name="txtnombre" id="txtnombre" value="<?php echo $persona->nombres; ?>"  placeholder="ingrese su nombre completo" required>
           <br><br>
           <input type="email" class="ingresar" name="txtemail" id="txtemail" value="<?php echo $persona->email; ?>"  placeholder="ingrese su correo" required>
           <br><br>
           <input type="password" class="ingresar" name="txtpassword" id="txtpassword" value="<?php echo $persona->password_usu;?>"  placeholder="ingrese su contraseña" required>
           <br><br>
           <input type="password" class="ingresar" name="txtrpassword" id="txtrpassword" value=""  placeholder="ingrese su contraseña" required>
           <br><br>
           <input type="hidden" class="ingresar" name="oculto">
           <input type="hidden" class="ingresar" name="id2" value="<?php echo $_SESSION['pin_cuadro'] ?>">
           <input type="submit"  class="actualizar1" value="actualizar" id="mactualizar" name="mactualizar">
        </div>
    </form>
    <div class="position1">
        <a href="index.php">
            <button class="regresar1">Regresar</button>
        </a>
    </div>
    </div>
    <script src="../Assets/js/confirmar.js"></script>
</body>
</html>
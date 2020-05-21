<?php
if (!isset($_GET['id'])) {
    header('Location: lista.php');
}
    include '../database/conexion.php';
    $id = $_GET['id'];
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
    <h2>Administrar usuario</h2>
    <form action="editarProcesoA.php" method="POST">
        <input type="text" class="ingresar"  name="txtnombre" id="txtnombre" value="<?php echo $persona->nombres; ?>" placeholder="ingrese su nombre completo" required>
        <br>    
        <select name="txtestado" id="txtestado">
                <option value="<?php echo $persona->rol;?>"> Seleccione una opcion</option>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>
        <br>
        <input type="hidden" name="oculto">
        <input type="hidden" name="id2" value="<?php echo $persona->pin_cuadro; ?>">
        <input type="submit" class="actualizar" value="Actualizar" id="mactualizar" name="mactualizar">
        </form>
        <div class="position">
        <a href="lista.php">
            <button class="regresar">Regresar</button>
        </a>
        </div>
    </div>
</body>
</html>
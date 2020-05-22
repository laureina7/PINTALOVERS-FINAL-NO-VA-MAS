<!-- <?php
    session_start();
    if (!isset($_SESSION['nombres'])) {
        header('Location:login.php');
    }elseif(isset($_SESSION['nombres'])){
        include '../database/conexion.php';
        $sentencia = $bd->query('SELECT * FROM usuario');
        $cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);
    }else{
        echo '<script type="text/javascript">
        alert("error en el sistema");
        window.location.href="index.php";
        </script>';
    }
?> -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista_de_clientes</title>
    <link rel="stylesheet" href="../Assets/css/tablausu.css">
    <link rel="stylesheet" href="../Assets/css/header2.css">
    <link rel="icon" href="../Assets/images/PINTALOVERS/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <!-- <?php
        echo $_SESSION['nombres'],$_SESSION['email'];
    ?> -->
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
    <div class="tabla" style="overflow-x:auto;">
        <h3>Lista de clientes</h3>
        <table class="usuario">
            <th>Pin cuadro</th>
            <th>Nombres</th>
            <th>Email</th>
            <th>Password</th>
            <th>rol</th>
            <th>estado</th>
            <th>Actualizar</th>
            <?php
                foreach($cliente as $dato){
                    ?>
            <tr>
                <td><?php echo $dato->pin_cuadro;?></td>
                <td><?php echo $dato->nombres;?></td>
                <td><?php echo $dato->email;?></td>
                <td><?php echo $dato->password_usu?></td>
                <td><?php echo $dato->rol?></td>
                <td><?php echo $dato->estado?></td>
                <td><a class="boton-actualizar" href="adminA.php?id=<?php echo $dato->pin_cuadro; ?>">
            <img src="../Assets/icons/login/actualizar.svg" alt="actualizar">
            </a>
                </td>
            </tr>
            <?php    
                }
                ?>
        </table>
        <a href="#">
            <button class="Regresar">Regresar</button>
        </a>
    </div>
    <a href="cerrar.php">cerrar</a>
    <script src="java.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>
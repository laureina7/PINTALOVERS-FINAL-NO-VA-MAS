<?php
    session_start();
    include '../database/conexion.php';
    $usuario = $_POST['txtuser'];
    $password = $_POST['txtpassword'];
    $setencia = $bd->prepare('SELECT * FROM usuario WHERE email = ? AND password_usu = ?');
    $setencia->execute([$usuario, $password]);
    $datos = $setencia->fetch(PDO::FETCH_OBJ);
    if($datos === FALSE){
        echo '<script type="text/javascript">
        alert("Usuario o contraseña incorrecto");
        window.location.href="login.php";
        </script>';
    }elseif($setencia->rowCount() == 1){
       $_SESSION['pin_cuadro'] = $datos->pin_cuadro;
       $_SESSION['nombres'] = $datos->nombres;
       $_SESSION['email'] = $datos->email;
       $_SESSION['rol'] = $datos->rol;
       $_SESSION['estado'] = $datos->estado;
       echo '<script type="text/javascript">
       alert("Ha iniciado sesion");
       window.location.href="index.php";
       </script>';
    }
?>
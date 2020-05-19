<?php
    include "../database/conexion.php";

    $nombres = $_POST['txtuser'];
    $emails = $_POST['txtemail'];
    $password = $_POST['txtpassword'];
    $pin = $_POST['txtpin'];

    $sentencia = $bd->prepare("INSERT INTO usuario VALUES(?,?,?,?,?,?)");
    $resultado = $sentencia->execute([$pin,$nombres,$emails,$password,'cliente',1]);
    if($resultado === true){
        echo '<script type="text/javascript">
        alert("Registro exitoso");
        window.location.href="lista.php";
        </script>';
    }else{
        echo'<script type="text/javascript">
        alert("Registro denegado \n Correo o pin incorrecto");
        window.location.href="registro.php";
        </script>';
    }
?>
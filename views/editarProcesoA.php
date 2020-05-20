<?php
    if (!isset($_POST['oculto'])) {
        header('Location: lista.php');
    }
    include '../database/conexion.php';
    $id = $_POST['id2'];
    $nombres = $_POST["txtnombre"];
    $email = $_POST["txtemail"];
    $estado = $_POST["txtestado"];
    $setencia = $bd->prepare("UPDATE usuario SET nombres = ?, email = ?, estado = ? WHERE pin_cuadro = ?;");
    $resultado = $setencia->execute([$nombres, $email, $estado, $id]);
    if(resultado === TRUE){
        echo '<script type="text/javascript">
        alert("Se ha actualizado correctamente");
        window.location.href="lista.php";
        </script>';
    }else{
        echo '<script type="text/javascript">
        alert("email ya esta registrado intente nuevamente");
        window.location.href="adminA.php";
        </script>';
    }
?>
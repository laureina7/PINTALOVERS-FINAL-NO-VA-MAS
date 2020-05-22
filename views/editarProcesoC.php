<?php
    if (!isset($_POST['oculto'])) {
        header('Location: lista.php');
    }
    include '../database/conexion.php';
    $id = $_POST['id2'];
    $nombres = $_POST["txtnombre"];
    $email = $_POST["txtemail"];
    $password = $_POST["txtpassword"];
    $password1 = $_POST["txtrpassword"];
    if ($password != $password1) {
        echo '<script type="text/javascript">
        alert("Las contraseña debe ser iguales");
        window.location.href="clienteA.php";
        </script>';
    }else{
    $setencia = $bd->prepare("UPDATE usuario SET nombres = ?, email = ?, password_usu = ? WHERE pin_cuadro = ?;");
    $resultado = $setencia->execute([$nombres, $email, $password, $id]);
    if($resultado === TRUE){
        echo '<script type="text/javascript">
        alert("Se ha actualizado correctamente");
        window.location.href="index.php";
        </script>';
    }else{
        echo '<script type="text/javascript">
        alert("email ya esta registrado intente nuevamente");
        window.location.href="clienteA.php";
        </script>';
    }
}
?>

<?php
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
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista_de_clientes</title>
</head>
<body>
    <?php
        echo $_SESSION['nombres'],$_SESSION['email'];
    ?>
    <a href="cerrar.php">CERRAR SESION</a>
    <h3>Lista de clients</h3>
    <table>
        <td>Pin cuadro</td>
        <td>Nombre y apellido</td>
        <td>Email</td>
        <td>password</td>
        <td>rol</td>
        <td>estado</td>
        <td>Actualizar</td>
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
                    <td><a class="boton-actualizar" href="adminA.php?id=<?php echo $dato->pin_cuadro; ?>">Actualizar</a></td>
                </tr>
            <?php    
            }
        ?>
    </table>
</body>
</html>
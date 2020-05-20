<?php
if (!isset($_SESSION['id'])) {
    header('Location: index.php');
}
    include '../database/conexion.php';
    $id = $_SESSION['id'];
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
</head>
<body>
    <form action="editarProcesoC.php" method="POST">
        <div>
           <input type="text" name="txtnombre" id="txtnombre" value=""  placeholder="ingrese su nombre completo" required>
           <input type="email" name="txtemail" id="txtemail" value=""  placeholder="ingrese su correo" required>
           <input type="password" name="txtpassword" id="txtpassword" value=""  placeholder="ingrese su contraseña" required>
           <input type="password" name="txtrpassword" id="txtrpassword" value=""  placeholder="ingrese su contraseña" required>
           <input type="hidden" name="oculto">
           <input type="hidden" name="id2" value="<?php echo $_SESSION['pin_cuadro'] ?>">
           <input type="submit" value="actualizar" id="mactualizar" name="mactualizar">
        </div>
    </form>
    <a href="index.php">
        <button>Regresar</button>
    </a>
    <script src="../Assets/js/confirmar.js"></script>
</body>
</html>
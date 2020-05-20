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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar datos pintala</title>
</head>
<body>
    <form action="editarProcesoA.php" method="POST">
        <div>
           <input type="text" name="txtnombre" id="txtnombre" value="<?php echo $persona->nombres; ?>"  placeholder="ingrese su nombre completo" required>
           <input type="email" name="txtemail" id="txtemail" value="<?php echo $persona->email; ?>"  placeholder="ingrese su correo" required>
           <select name="txtestado" id="txtestado" require>
               <option value="<?php echo $persona->rol;?>"> Seleccione una opcion</option>
               <option value="activo">Activo</option>
               <option value="inactivo">Inactivo</option>
           </select>
           <input type="hidden" name="oculto">
           <input type="hidden" name="id2" value="<?php echo $persona->pin_cuadro; ?>">
           <input type="submit" value="Actualizar" id="mactualizar" name="mactualizar">
        </div>
    </form>
    <a href="lista.php">
        <button>Regresar</button>
    </a>
</body>
</html>
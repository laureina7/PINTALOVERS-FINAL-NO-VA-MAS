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
<html lang="ES-es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Assets/images/PINTALOVERS/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/css/header1.css">
    <link rel="stylesheet" href="../Assets/css/postgeneral.css">
    <link rel="stylesheet" href="../Assets/css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <title>Galeria Principal</title>


</head>

<!--Menu Principal Inicio-->
<body>
<div class="todo">
    <div class="encendido">
        <a href="cerrar.php">
            <img src="../Assets/images/imagenes/sesion.svg" alt="">
        </a>
    </div>
    <div class="dropdown">
        <button class="btn btn-default" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="true">
            <img src="../Assets/images/imagenes/humano.png" alt="">
            <!-- <span class="caret"></span> -->
        </button>
        <?php
            if ($_SESSION['estado'] === 'Administrador') {
        ?>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Ver Perfil</a></li>
            <li><a href="#">Añadir Cuadro</a></li>
            <li><a href="#">Seguidores</a></li>
            <li><a href="#">Seguidos</a></li>
            <li><a href="#">Lista de gustos</a></li>
            <li><a href="lista.php">Lista de clientes</a></li>
            <li><a href="#" class="adicional1">Chat</a></li>
            <li class="hola">
                <a href="cerrar.php" class="adicional2" style="color: white;">Cerrar Sesión</a>
            </li>
        </ul>
    <?php
        }else{
    ?>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Ver Perfil</a></li>
            <li><a href="#">Añadir Cuadro</a></li>
            <li><a href="#">Seguidores</a></li>
            <li><a href="#">Seguidos</a></li>
            <li><a href="#">Lista de gustos</a></li>
            <li><a href="clienteA.php">Actualizar datos</a></li>
            <li><a href="#" class="adicional1">Chat</a></li>
            <li class="hola">
                <a href="cerrar.php" class="adicional2" style="color: white;">Cerrar Sesión</a>
            </li>
        </ul>
    <?php
    }
    ?>
    </div>
    
    <div class="chat">
        <img src="../Assets/images/imagenes/chat abrir.svg" alt="chat">
    </div>


    <div class="search_bar">
        <a href="#" class="icon-search"><img src="../Assets/images/imagenes/lupa.svg" alt="lupa" srcset=""></a>
        <input id="bar" type="text" placeholder="Buscar"  style="color: rgb(255, 255, 255);">

    </div>
 <div class="logo">
     <img src="../Assets/images/imagenes/logopintalovers.png" alt="">
 </div>


 <!-- <div class="hamburger"><img src="imagenes/menu burger.svg" alt="hamburguesa">
</div> -->

<input class="click" type="checkbox" alt="Submit"  id="btn-nav">
        <label for="btn-nav"><img id="hamburger" src="../Assets/images/imagenes/menu burger.svg" alt="burger"></label>
        <nav class="nav">
            <ul>
                <li class="logonav"><a href=""><img src="../Assets/images/imagenes/logo_tipo_pintala_pequeno_115x.png" alt=""> </a> </li>
                <li><a href="">INICIO</a> </li>
                <li><a href="">TIENDA</a> </li>
                <li><a href="">PINTALOVERS</a> </li>
                <li><a href="">AYUDA</a> </li>
                <li class="car"><a href=""><img src="../Assets/images/imagenes/car.svg" alt=""></a></li>
            </ul>

        </nav>
</div>
<!--Menu Principal Fin-->

<!--Post General Inicio-->
<article class="contenedorPrincipalPost divBlock">
    <div class="centerContenedor divBlock">
        <div class="contenedorGeneralPosts divBlock">
            <div class="post divBlock" id="animal1">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200315-WA0033.jpg" alt="Bulldog Frances"></div>
                </div>
            </div>
            <div class="postHorizontal divBlock" id="animal2">
                <div class="paddingImage divBlock">
                    <div class="imageHorizontal divBlock"><img src="../Assets/images/Cuadros Post/IMG_20200202_124622_262.jpg" alt="Labrador"></div>
                </div>
            </div>
            <div class="post divBlock" id="animal3">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200215-WA0039.jpg" alt="Labrador"></div>
                </div>
            </div>
            <div class="post divBlock" id="animal4">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200421-WA0066.jpg" alt="alce"></div>
                </div>
            </div>
            <div class="post divBlock" id="animal5">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200503-WA0076.jpg" alt="alce"></div>
                </div>
            </div>
            <div class="post divBlock" id="animal6">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200326-WA0021.jpg" alt="alce"></div>
                </div>
            </div>
            <div class="post divBlock" id="animal7">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200428-WA0083.jpg" alt="alce"></div>
                </div>
            </div>
            <div class="post divBlock" id="animal8">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200221-WA0028.jpg" alt="alce"></div>
                </div>
            </div>
            <div class="postHorizontal divBlock" id="proceso1">
                <div class="paddingImage divBlock">
                    <div class="imageHorizontal divBlock"><img src="../Assets/images/Cuadros Post/-2106156638-1504967039.jpg" alt="Labrador"></div>
                </div>
            </div>
            <div class="postHorizontal divBlock" id="proceso2">
                <div class="paddingImage divBlock">
                    <div class="imageHorizontal divBlock"><img src="../Assets/images/Cuadros Post/IMG_20200317_191003_499.jpg" alt="Labrador"></div>
                </div>
            </div>
            <div class="postHorizontal divBlock" id="animal9">
                <div class="paddingImage divBlock">
                    <div class="imageHorizontal divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200509-WA0073.jpg" alt="Leo"></div>
                </div>
            </div>
            <div class="post divBlock" id="paisaje1">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200501-WA0054.jpg" alt="Paris"></div>
                </div>
            </div>
            <div class="postHorizontal divBlock" id="proceso3">
                <div class="paddingImage divBlock">
                    <div class="imageHorizontal divBlock"><img src="../Assets/images/Cuadros Post/IMG_20190805_085856_475.jpg" alt="Ella"></div>
                </div>
            </div>
            <div class="post divBlock" id="proceso4">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/IMG_20191104_140227_809.jpg" alt="Cebra"></div>
                </div>
            </div>
            <div class="post divBlock" id="proceso5">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200316-WA0083.jpg" alt="Cama"></div>
                </div>
            </div>
            <div class="post divBlock" id="animal10">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200425-WA0055-02.jpeg" alt="Cama"></div>
                </div>
            </div>
            <div class="post divBlock" id="animal11">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200407-WA0263.jpg" alt="Wolf"></div>
                </div>
            </div>
            <div class="post divBlock" id="animal12">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200402-WA0188.jpg" alt="Wolf"></div>
                </div>
            </div>
            <div class="postHorizontal divBlock" id="animal13">
                <div class="paddingImage divBlock">
                    <div class="imageHorizontal divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200314-WA0095.jpg" alt="Leo"></div>
                </div>
            </div>
            <div class="postHorizontal divBlock" id="animal14">
                <div class="paddingImage divBlock">
                    <div class="imageHorizontal divBlock"><img src="../Assets/images/Cuadros Post/IMG-20200505-WA0093.jpg" alt="Leo"></div>
                </div>
            </div>
            <div class="post divBlock" id="animal15">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/animal1.jpg" alt="Wolf"></div>
                </div>
            </div>
            <div class="post divBlock" id="animal16">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/animal3.jpg" alt="Wolf"></div>
                </div>
            </div>
            <div class="postHorizontal divBlock" id="arte1">
                <div class="paddingImage divBlock">
                    <div class="imageHorizontal divBlock"><img src="../Assets/images/Cuadros Post/arte1.jpg" alt="oleo sol"></div>
                </div>
            </div>
            <div class="post divBlock" id="arte2">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/arte2.jpg" alt="Sombrero"></div>
                </div>
            </div>
            <div class="post divBlock" id="arte4">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/arte3.jpg" alt="Girasol"></div>
                </div>
            </div>
            <div class="post divBlock" id="arte5">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/arte4.jpg" alt="Reloj"></div>
                </div>
            </div>
            <div class="post divBlock" id="arte6">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/arte5.jpg" alt="Señora roja"></div>
                </div>
            </div>
            <div class="post divBlock" id="arte7">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/arte6.jpg" alt="Cosa humana"></div>
                </div>
            </div>
            <div class="postHorizontal divBlock" id="ciudad1">
                <div class="paddingImage divBlock">
                    <div class="imageHorizontal divBlock"><img src="../Assets/images/Cuadros Post/ciudad2.jpg" alt="paseo"></div>
                </div>
            </div>
            <div class="post divBlock" id="ciudad2">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/ciudad3.jpg" alt="San Francisco"></div>
                </div>
            </div>
            <div class="post divBlock" id="ciudad3">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/ciudad4.jpg" alt="Cosa humana"></div>
                </div>
            </div>
            <div class="post divBlock" id="ciudad4">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/ciudad6.jpg" alt="Cosa humana"></div>
                </div>
            </div>
            <div class="post divBlock" id="deporte1">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/deporte1.png" alt="Messi"></div>
                </div>
            </div>
            <div class="post divBlock" id="proceso6">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/ciudad5.jpg" alt="Pariss"></div>
                </div>
            </div>
            <div class="post divBlock" id="deporte2">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/deporte2.jpg" alt="game nieve"></div>
                </div>
            </div>
            <div class="post divBlock" id="deporte3">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/deporte6.jpg" alt="Lakers"></div>
                </div>
            </div>
            <div class="post divBlock" id="deporte4">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/deporte4.jpg" alt="Cosa humana"></div>
                </div>
            </div>
            <div class="post divBlock" id="deporte5">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/deporte5.jpg" alt="beisball"></div>
                </div>
            </div>
            <div class="post divBlock" id="deporte6">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/deporte3.jpg" alt="Basketball"></div>
                </div>
            </div>
            <div class="post divBlock" id="famoso1">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/famoso1.jpg" alt="Cosa humana"></div>
                </div>
            </div>
            <div class="post divBlock" id="famoso2">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/famoso2.jpg" alt="Guitarman"></div>
                </div>
            </div>
            <div class="post divBlock" id="famoso3">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/famoso3.jpg" alt="Jackson"></div>
                </div>
            </div>
            <div class="post divBlock" id="famoso4">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/famoso4.jpg" alt="Mounrrow"></div>
                </div>
            </div>
            <div class="post divBlock" id="famoso5">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/famoso5.jpg" alt="Cosa humana"></div>
                </div>
            </div>
            <div class="post divBlock" id="famoso6">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/famoso6.jpg" alt="Cosa humana"></div>
                </div>
            </div>
            <div class="post divBlock" id="mandala1">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/mandala1.jpg" alt="Mandala 1"></div>
                </div>
            </div>
            <div class="post divBlock" id="mandala2">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/mandala2.jpeg" alt="Mandala 2"></div>
                </div>
            </div>
            <div class="post divBlock" id="mandala3">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/mandala3.jpeg" alt="Mandala 3"></div>
                </div>
            </div>
            <div class="post divBlock" id="mandala4">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/mandala4.jpeg" alt="Mandala 4"></div>
                </div>
            </div>
            <div class="post divBlock" id="mandala5">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/mandala5.jpg" alt="Mandala 5"></div>
                </div>
            </div>
            <div class="post divBlock" id="mandala6">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/mandala6.jpeg" alt="Mandala 6"></div>
                </div>
            </div>
            <div class="post divBlock" id="paisaje2">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/paisaje1.jpg" alt="Paisaje 1"></div>
                </div>
            </div>
            <div class="post divBlock" id="paisaje3">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/paisaje2.jpg" alt="Paisaje 2"></div>
                </div>
            </div>
            <div class="post divBlock" id="paisaje4">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/paisaje3.jpg" alt="Paisaje 3"></div>
                </div>
            </div>
            <div class="post divBlock" id="paisaje5">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/paisaje4.jpg" alt="Paisaje 4"></div>
                </div>
            </div>
            <div class="post divBlock" id="paisaje6">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/paisaje6.jpg" alt="Paisaje 6"></div>
                </div>
            </div>
            <div class="post divBlock" id="pelicula1">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/pelicula1.jpg" alt="Pelicula 1"></div>
                </div>
            </div>
            <div class="post divBlock" id="pelicula2">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/pelicula2.jpg" alt="Pelicula 2"></div>
                </div>
            </div>
            <div class="post divBlock" id="pelicula3">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/pelicula3.jpg" alt="Pelicula 3"></div>
                </div>
            </div>
            <div class="post divBlock" id="paisaje7">
                <div class="paddingImage divBlock">
                    <div class="imageVertical divBlock"><img src="../Assets/images/Cuadros Post/paisaje5.jpg" alt="Paisaje 5"></div>
                </div>
            </div>
        </div>
    </div>                                
</article>
<!--Post General Fin-->

<!--Footer Inicio-->
<!--<footer class="generalContenedorFooter">
    <div class="contenedorFooter">
        <div class="logoContenedorFooter">
            <img src="imagenes/logo_tipo_pintala_pequeno_115x.png" alt="Logo Pintala Cuadros">
            <p>Crea y disfruta de pintar tus propios cuadros, solo en PintalaCuadros.com</p>
        </div>
        <div class="menuFooter">
            <ul>
                <li><a href="#">INICIO</a> </li>
                <li><a href="#">TIENDA</a> </li>
                <li><a href="#">PINTALOVERS</a> </li>
                <li><a href="#">AYUDA</a> </li>
            </ul>
        </div>
        <div class="redesSocialesFooter">
            <h1>Síguenos</h1>

                    <div class="row">
                        <img src="../Assets/Incons/facebook.png">
                        <a href="https://www.facebook.com/procinal/">Facebook</a>
                    </div>
                    <div class="row">
                        <img src="../Assets/Incons/instagram.png"></a>
                        <a href="https://www.instagram.com/procinal/?hl=es-la">Instagram</a>
                    </div>
        </div>
    </div>
</footer>-->
<!--Footer Fin-->
<script src="../Assets/js/java.js"></script>
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
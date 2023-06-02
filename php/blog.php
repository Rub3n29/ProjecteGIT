<?php include("conexion.php");

$codigo=$_GET['codigo'];
$query = "SELECT * FROM Articulos WHERE id_articulos=$codigo";
$result = mysqli_query($conexion, $query);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $id_articulos = $row['id_articulos'];
    $titulo = $row['titulo'];
    $imagen = $row['imagen'];
    $descripcion = $row['descripcion'];
    $fecha = $row['fecha'];

}
else {
    $id_articulos = '';
    $titulo = 'No hay datos disponibles';
    $imagen = '';
    $descripcion = '';
    $fecha = '';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/blog.css">
    <title>Peliculas</title>
</head>

<body>
<div id="contenedor">
    <div id="encabezado">
            <div class="logo">
            </div>
            <h1 id="aquaverse">AQUA VERSE</h1>
            <div class="menu">
                <li>
                    <a href="Principal.php"><span>HOME ⬇️</span></a>
                    <div class="panel">
                        <ul>
                            <li>
                                <a href="Principal.php">
                                    <span id="inicio">Inicio</span>
                                </a>
                            </li>
                            <li>
                                <a href="../html/AquaExperience">
                                    <span>Aqua Experience</span>
                                </a>
                            </li>
                            <li>
                                <a href="../html/Historia">
                                    <span>Nuestra Historia</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="../html/Formulario.html"><span>LOG IN</span></a>
                </li>
                <li>    
                    <a href="../html/Gallery.html"><span>GALLERY ⬇️</span></a>
                    <div class="panel">
                        <ul>
                            <li>
                                <a href="../html/Gallery.html">
                                    <span>Coleccion completa</span>
                                </a>
                            </li>
                            <li>
                                <a href="../html/Gallery.html">
                                    <span>Novedades</span>
                                </a>
                            </li>
                            <li>
                                <a href="../html/Gallery.html">
                                    <span>Coleccion especial</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="blog.php"><span>BLOG</span></a>
                </li>
                <li>
                    <a href="#"><span>CONTACT</span></a>
                </li>
            </div>
        </div>

    <div id="contenedor">
        <div class="izquierda">


                <div class="noticias">
                    <div class="imagen">
                        <img src="../img/<?php echo $imagen; ?>" width="200px" height="200px" />

                    </div>

                    <div class="titulo">
                        <h2>
                            <?php echo $titulo; ?>
                        </h2>

                    </div>
                    <div class="descripcion">
                        <p>
                            <?php echo $descripcion; ?>
                        </p>

                    </div>
                    <div class="fecha">
                        <p>
                            <?php echo $fecha; ?>
                        </p>
                    </div>
                </div>

        </div>
        <div class="derecha">
            <div id="categoria">
                <h3>CATEGORIAS</h3>
            </div>

            <div id="popular">
                <h3>POPULAR POST</h3>
                <div class="uno"></div>
                <div class="dos"></div>
                <div class="tres"></div>
                <div class="cuatro"></div>
            </div>
            <div id="more">
                <h3>MORE INFO</h3>
            </div>
            <div id="video">
                <h3>VIDEO</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/y7JW_suWqJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <p class="limpiar"></p>

<div></div>
</body>

</html>
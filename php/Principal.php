<?php
include ("./conexion.php");
$query ="SELECT * FROM Detalles";
$sql_detalles = mysqli_query($conexion,$query)
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Proyecto 1DAW - SOLVAM</title>

    <!-- CSS ================================================== -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/index.css">
    <!-- Favicons ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico">

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
                                <a href="../html/AquaExperience.html">
                                    <span>Aqua Experience</span>
                                </a>
                            </li>
                            <li>
                                <a href="../html/Historia.html">
                                    <span>Nuestra Historia</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="http://ruben.com.es:8080/ruben/ProyectoFinal/webapp/Formulario.jsp"><span>LOG IN</span></a>
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
        <p class="limpiar"></p>
        <div id="galeria">
            <div class="animacion">
                <div class="persiana">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="animacion">
                <div class="persiana">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="animacion">
                <div class="persiana">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="animacion">
                <div class="persiana">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="animacion">
                <div class="persiana">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="animacion">
                <div class="persiana">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="animacion">
                <div class="persiana">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>

        <div class="noticia_destacada">
            <h2>GRAN APERTURA A LA VISTA</h2>
            <p>En los próximos días seremos testigos del que será el acuario más grande de todo el país, solo quedan
                ultimar las cosas para que disfruteis al máximo de esta bella experiencia submarina</p>
        </div>
    </div>




    <p class="limpiar"></p>



    
    <div id="contenido">
        <?php
        while($row=$sql_detalles->fetch_array()){
        ?>
        <div class="noticia">
            <img src="../img/<?php echo $row[5] ?>" alt="">
            <div id="lupa"></div>
            <div id="detalles"><a href="Detalles.php?codigo=<?php echo $row[0];?>"></a></div>
            <p><b><?php echo $row[1]; ?></b></p>            
            <p><?php echo $row[2]; ?></p>
        </div>
        <?php } ?>
    </div>




    <p class="limpiar"></p>




    <div id="pie">
        <div>SOBRE NOSOTROS</div>
        <div class="pie1">
        </div>
        <div class="pie2">
            <div id="face"></div>
            <div id="twitter"></div>
            <div id="global"></div>
            <div id="red"></div>
            <div id="advertisment"></div>
        </div>
        <div class="pie3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1540.3600636811361!2d-0.34840576098197285!3d39.453057292902685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6048e51a31268b%3A0x28e46cb7907ae19b!2sOceanogr%C3%A0fic%20Val%C3%A8ncia!5e0!3m2!1ses!2ses!4v1684493381126!5m2!1ses!2ses" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="pie4">

        </div>
        <div class="pie5">
            <div class="copyright">

            </div>
            <div class="menu_final">

            </div>
        </div>
    </div>
    </div>


</body>

</html>
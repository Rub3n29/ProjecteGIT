<?php include ("conexion.php"); 
    $codigo=$_GET['codigo'];
    $query = "SELECT * FROM Detalles WHERE id=$codigo";
    $result = mysqli_query($conexion, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $id = $row['id'];
        $Titulo = $row['Titulo'];
        $Descripcion_corta = $row['Descripcion_corta'];
        $Descripcion_larga = $row['Descripcion_larga'];
        $Fecha = $row['Fecha'];
        $Imagen = $row['Imagen'];
        $Fotografo = $row['Fotografo'];

    }
    else {
        $id = '';
        $Titulo = 'No hay datos disponibles';
        $Descripcion_corta = '';
        $Descripcion_larga = '';
        $Fecha = '';
        $Imagen = '';
        $Fotografo = '';
    }
    ?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Proyecto 1DAW - SOLVAM</title>

    <!-- CSS ================================================== -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/DetallesCSS.css">
    <!-- Favicons ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- JS ================================================== -->

</head>

<body>
    <div id="contenedor">
        <div id="Imagen">
            <img src="../img/<?php echo $Imagen ?>" width="400px" height="600px" />
        </div>
        <div id="informacion">
            <div class="encabezado">
                <h1 class="Titulo">
                    <?php echo $Titulo; ?>
                </h1>
                <h3 class="Descripcion_corta">
                <?php echo $Descripcion_corta; ?>
                </h3>
            </div>
            <div class="Descripcion_larga">
                <p>
                <?php echo $Descripcion_larga; ?>
                </p>
                <div class="detalles">
                    <div class="Fecha">
                        <h1>
                            DATE:
                        </h1>
                        <p>
                        <?php echo $Fecha; ?>
                        </p>
                    </div>
                    <div class="Fotografo">
                        <h1>
                            FOTOGRAFO:
                        </h1>
                        <p>
                        <?php echo $Fotografo; ?>
                        </p>
                    </div>
                </div>
            </div>
            <a class="boton-volver" href="Principal.php">Volver</a>
            <a class="mas-info" href="#">Mas Información...</a>
        </div>
    </div>
</body>

</html>
<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

if (!empty($_POST)) {
    if (empty($_POST['nombre']) || empty($_POST['ubicacion']) || empty($_POST['select_tipo']) || empty($_POST['precio']) || empty($_POST['descripcion'])) {
?>
        <h1 class="bad">COMPLETE TODOS LOS CAMPOS PARA AGREGAR UN PROYECTO!</h1>
        <?php
    } else {
        if (isset($_POST['agregar_proyecto'])) {
            $nombre = $_POST['nombre'];
            $ubicacion = $_POST['ubicacion'];
            $tipo = $_POST['select_tipo'];
            $precio = $_POST['precio'];
            $descripcion = $_POST['descripcion'];

            $query = "INSERT INTO proyectos VALUES('$nombre', '$ubicacion', '$tipo', '$precio', '$descripcion')";

            $ejecutarQuery = mysqli_query($con, $query);

            if (!$ejecutarQuery) {
                echo "Error en sql";
            } else {
        ?>
                <h1 class="ok">SE AGREGÓ CORRECTAMENTE!</h1>
<?php
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tomas Fiori">
    <title>TecnoRiego || Agregar Proyecto</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/admin_styles.css">
</head>

<body>

    <form method="post">

        <h1 class="animate__animated animate__backInLeft">Agregar nuevo proyecto</h1>

        <input type="text" placeholder="Ingrese el nombre del proyecto" name="nombre">
        <input type="text" placeholder="Ingrese la ubicacion" name="ubicacion">

        <h4>Tipo de proyecto:</h4>
        <select name="select_tipo" id="tipo">
            <option value="Riego por goteo">Riego por goteo</option>
            <option value="Riego por aspercion">Riego por asperción</option>
            <option value="Pivote">Pivote</option>
        </select>

        <input type="text" placeholder="Ingrese el precio (Solo numeros)" name="precio">
        <textarea name="descripcion" placeholder="Escriba aquí una descripción..."></textarea>

        <input type="submit" name="agregar_proyecto" value="Agregar proyecto">

    </form>

    <form action="homeAdmin.php"><button>Volver</button></form>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

</body>

</html>
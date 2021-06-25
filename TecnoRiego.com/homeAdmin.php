<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoRiego || ADMIN</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<script type="text/javascript">
    function ConfirmarCierre() {
        var resp = confirm("Esta seguro de que desea cerrar la sesion?");
        if (resp) {
            return true;
        } else {
            return false;
        }
    }
</script>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">TECNORIEGO</a>
                <li>
                    <a href="cerrar_sesion.php" onclick="return ConfirmarCierre()">
                        <img class="iconos-redes-sociales" src="images/svg//icono_cerrar_sesion.svg" alt="">
                    </a>
        </nav>
    </header>

    <!-- Tabla proyectos -->
    <section id="section">
        <div class="container">

            <h1>PROYECTOS</h1>

            <div id="main-container">

                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Ubicación</th>
                            <th>Tipo de proyecto</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>

                    <?php
                    $query = "SELECT * FROM proyectos";
                    $ejecutarQuery = mysqli_query($con, $query);
                    $verFilas = mysqli_num_rows($ejecutarQuery);
                    $fila = mysqli_fetch_array($ejecutarQuery);

                    if (!$ejecutarQuery) {
                        echo 'Error en la consulta.';
                    } else {
                        if ($verFilas < 1) {
                            echo "<tr><th>Sin registros</th><th>...</th><th>...</th><th>...</th></tr>";
                        } else {
                            for ($i = 0; $i <= $fila; $i++) {
                                echo '
                                        <tr>
                                            <th>' . $fila[0] . '</th>
                                            <th>' . $fila[1] . '</th>
                                            <th>' . $fila[2] . '</th>
                                            <th>' . $fila[4] . '</th>
                                            <th> $ ' . $fila[3] . '</th>
                                            <th>
                                                <a href="actualizar.php?nombre=' . $fila[0] . '">Editar</a>
                                            </th>
                                        </tr>
                                    ';
                                $fila = mysqli_fetch_array($ejecutarQuery);
                            }
                        }
                    }
                    ?>

                </table>
            </div>
        </div>
    </section>

    <section>
        <a href="agregarProyecto.php" id="agregarProyecto"><button>Agregar proyecto</button></a><br><br>
    </section>

    <section>
        <div class="container">
            <h1>CONSULTAS</h1>

            <div id="main-container">

                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Consulta</th>
                        </tr>
                    </thead>

                    <?php
                    $query = "SELECT * FROM contacto";
                    $ejecutarQuery = mysqli_query($con, $query);
                    $verFilas = mysqli_num_rows($ejecutarQuery);
                    $fila = mysqli_fetch_array($ejecutarQuery);

                    if (!$ejecutarQuery) {
                        echo 'Error en la consulta.';
                    } else {
                        if ($verFilas < 1) {
                            echo "<tr><th>Sin registros</th><th>...</th><th>...</th></tr>";
                        } else {
                            for ($i = 0; $i <= $fila; $i++) {
                                echo '
                                        <tr>
                                            <th>' . $fila[0] . '</th>
                                            <th>' . $fila[1] . '</th>
                                            <th>' . $fila[2] . '</th>
                                            <th>' . $fila[3] . '</th>
                                        </tr>
                                    ';
                                $fila = mysqli_fetch_array($ejecutarQuery);
                            }
                        }
                    }
                    ?>

                </table>
            </div>

        </div>
    </section>

    <?php
    include("footer.php");
    ?>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

</body>

</html>
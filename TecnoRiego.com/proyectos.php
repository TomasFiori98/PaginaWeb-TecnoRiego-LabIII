<?php 
    include('connection.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tomas Fiori">
    <title>TecnoRiego || Proyectos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php
    include("header.php");
    ?>

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
                        </tr>
                    </thead>

                    <?php
                        $query = "SELECT * FROM proyectos";
                        $ejecutarQuery = mysqli_query($con, $query);
                        $verFilas = mysqli_num_rows($ejecutarQuery);
                        $fila = mysqli_fetch_array($ejecutarQuery);

                        if(!$ejecutarQuery){
                            echo 'Error en la consulta.';
                        } else {
                            if($verFilas<1){
                                echo "<tr><th>Sin registros</th><th>...</th><th>...</th><th>...</th></tr>";
                            }else{
                                for($i = 0; $i<=$fila; $i++){
                                    echo '
                                        <tr>
                                            <th>'.$fila[0].'</th>
                                            <th>'.$fila[1].'</th>
                                            <th>'.$fila[2].'</th>
                                            <th>'.$fila[4].'</th>
                                            <th> $ '.$fila[3].'</th>
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
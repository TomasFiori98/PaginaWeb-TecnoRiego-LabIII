<?php

include('connection.php');

$alert = '';

if (!empty($_POST)) {
    if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['mail']) || empty($_POST['consulta'])) {
        $alert = 'COMPLETE TODOS LOS CAMPOS PARA ENVIAR SU CONSULTA!';
    } else {
        if (isset($_POST['enviar'])) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $mail = $_POST['mail'];
            $consulta = $_POST['consulta'];
        
            $query = "INSERT INTO contacto VALUES('$nombre', '$apellido', '$mail', '$consulta')";
        
            $ejecutarQuery = mysqli_query($con, $query);
        
            if (!$ejecutarQuery) {
                echo "Error en sql";
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
    <title>TecnoRiego || Quienes somos?</title>
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
            <div class="text-sm-left">
                <h1>TECNORIEGO</h1>
            </div>
            <div class="row">
                <div class="col-8">
                    <p>
                        &nbsp; &nbsp; &nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque aliquid numquam, maiores illum <br> necessitatibus sapiente? Unde debitis consectetur quo amet veniam tenetur! Cum earum repudiandae <br> perspiciatis
                        ab explicabo dolorum maiores?
                        <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ut nesciunt. Laborum repudiandae <br> commodi deleniti! Mollitia consequuntur dignissimos cum rerum, laborum, repellat ea, veniam aperiam <br> quod ab illum harum
                        distinctio.
                    </p>
                    <p>
                        &nbsp; &nbsp; &nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque aliquid numquam, maiores illum <br> necessitatibus sapiente? Unde debitis consectetur quo amet veniam tenetur! Cum earum repudiandae <br> perspiciatis
                        ab explicabo dolorum maiores?
                        <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ut nesciunt. Laborum repudiandae <br> commodi deleniti! Mollitia consequuntur dignissimos cum rerum, laborum, repellat ea, veniam aperiam <br> quod ab illum harum
                        distinctio.
                    </p>
                    <p>
                        &nbsp; &nbsp; &nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque aliquid numquam, maiores illum <br> necessitatibus sapiente? Unde debitis consectetur quo amet veniam tenetur! Cum earum repudiandae <br> perspiciatis
                        ab explicabo dolorum maiores?
                        <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ut nesciunt. Laborum repudiandae <br> commodi deleniti! Mollitia consequuntur dignissimos cum rerum, laborum, repellat ea, veniam aperiam <br> quod ab illum harum
                        distinctio.
                    </p>
                </div>
                <div class="col-4">
                    <img class="imagen_quienes_somos" src="images/jpg/imagen_2.jpg" alt="">
                    <img class="imagen_quienes_somos" src="images/jpg/imagen_1.jpg" alt="">
                </div>
            </div>
        </div>

    </section>

    <section id="section">
        <div class="container">
            <div class="text-sm-left">
                <br><br><br>
                <h2>CONTACTANOS</h2>
                <br><br>
            </div>

            <div class="col-12">
                <?php
                include("ubicacion_maps.html");
                ?>
            </div>

            <div>

                <br><br>
                <form action="" method="POST" name="formulario">

                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="text" name="apellido" placeholder="Apellido">
                    <input type="text" name="mail" placeholder="Email">
                    <textarea name="consulta" placeholder="Escriba aquí su consulta..."></textarea>

                    <div class="alert"> <?php echo isset($alert) ? $alert : ''; ?> </div>

                    <input type="submit" name="enviar" value="ENVIAR" id="button">
                </form>
                <br><br>

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
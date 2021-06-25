<?php

$usuario = $_POST['nombre'];
$contraseña = $_POST['contraseña'];

session_start();
$_SESSION['usuario'] = $usuario;

include('connection.php');

$consulta = "SELECT*FROM usuarios where nombre='$usuario' and contraseña='$contraseña'";
$resultado = mysqli_query($con, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location:homeAdmin.php");
} else {
?>
    <?php
    include("login.php");
    ?>

    <h1 class="bad">Nombre y/o contraseña incorrectas</h1>

<?php
}
mysqli_free_result($resultado);
mysqli_close($con);
?>


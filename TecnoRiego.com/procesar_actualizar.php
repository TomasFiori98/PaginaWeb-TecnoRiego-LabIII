<?php

session_start();
include("connection.php");
include("functions.php");

$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];

$query = "UPDATE proyectos SET nombre= '$nombre', ubicacion='$ubicacion', tipo_de_proyecto='$tipo', precio='$precio', descripcion='$descripcion' WHERE nombre='$nombre'";

$ejecutarQuery = mysqli_query($con, $query);

if ($ejecutarQuery) {
    echo "<script>alert('Se han guardado los cambios correctamente, actualice la pagina para ver los cambios'); window.location='homeAdmin.php';</script>";
} else {
    echo "<script>alert('No se pudieron insertar los datos');  window.location='homeAdmin.php';;</script>";
}

?>
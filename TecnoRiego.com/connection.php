<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tecnoriego";

$con = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname); 

if(!$con){
    die("fallo la conexión!");
}

?>
<?php
$basededatos = "llops";
$connexio = mysqli_connect('localhost', 'root', '987654321', 'llops') or die("No s’ha trobat la BBDD");

mysqli_select_db($connexio, $basededatos) or die("No se encuentra la tabla");
mysqli_set_charset($connexio, "utf8");

$gmail =  $_POST['gmail'];
$pwd =  $_POST['pwd'];


$login = "SELECT * FROM `user` WHERE correo = '$gmail' && password = '$pwd'";
$resultat = mysqli_query($connexio, $login) or die("Algo ha ido mal en la consulta a la base de datos");
print_r($resultat->num_rows);

return $resultat->num_rows;
mysqli_close($connexio);
header('Location: /../index.php');

?>










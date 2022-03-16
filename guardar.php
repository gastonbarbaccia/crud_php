<?php
// Se incluye el archivo donde esta la funcion
include "conexiondb.php";


// Se guardan los datos de los inputs de form nuevo.php en una variable por cada input para poder 
// usarlos despues
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];


// Esta funcion sirve para hacer una redireccion hacia una pagina, en este caso queres que luego de guardar
// sea redireccionado el usuario al index para ver el nuevo registro
header('Location: index.php');
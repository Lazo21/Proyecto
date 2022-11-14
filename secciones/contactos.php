<?php

include_once ('../configuraciones/bd.php');
$conexionBD=BD::crearInstancia();

print_r($_POST);

$consulta=$conexionBD->prepare("SELECT * FROM contactos");
$consulta->execute();
$listacontactos=$consulta->fetchAll();

print_r($listacontactos);


?>
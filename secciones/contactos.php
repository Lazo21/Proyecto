<?php

include_once ('../configuraciones/bd.php');
$conexionBD=BD::crearInstancia();

print_r($_POST);

$consulta=$conexionBD->prepare("SELECT * FROM contactos");
$consulta->execute();
$listaContactos=$consulta->fetchAll();

print_r($listaContactos);


?>
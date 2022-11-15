<?php

include_once ('../configuraciones/bd.php');
$conexionBD=BD::crearInstancia();


$consulta=$conexionBD->prepare("SELECT * FROM contactos");
$consulta->execute();
$listacontactos=$consulta->fetchAll();




?>
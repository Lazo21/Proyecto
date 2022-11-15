<?php

include_once ('../configuraciones/bd.php');
$conexionBD=BD::crearInstancia();

$nombre=isset($_POST['Nombre'])?$_POST['Nombre']:'';
$email=isset($_POST['Email'])?$_POST['Email']:'';
$email2=isset($_POST['Email2'])?$_POST['Email2']:'';
$telefono=isset($_POST['Telefono'])?$_POST['Telefono']:'';
$nombre2=isset($_POST['Nom_ce'])?$_POST['Nom_ce']:'';
$Email3=isset($_POST['Email_ce'])?$_POST['Email_ce']:'';
$telefono2=isset($_POST['Tel_ce'])?$_POST['Tel_ce']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';



$consulta=$conexionBD->prepare("SELECT * FROM contactos");
$consulta->execute();
$listacontactos=$consulta->fetchAll();




?>
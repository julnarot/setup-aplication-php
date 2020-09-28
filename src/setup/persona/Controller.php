<?php
//Llamada al modelo
//require_once("setup/persona/Model.php");
require_once("Model.php");
$per = new Model();
$datos = $per->get_personas();
//var_export($datos);
//Llamada a la vista
require_once("persona.phtml");
?>

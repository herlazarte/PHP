<?php
require_once("model/personas_modelo.php");

$personas=new Personas_model();

$matrizPersonas=$personas->get_personas();

require_once("view/personas_view.php");


?>
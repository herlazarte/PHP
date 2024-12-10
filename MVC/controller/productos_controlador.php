<?php
require_once("model/productos_modelo.php");

$productos=new Productos_model();

$matrizProductos=$productos->get_productos();

require_once("view/productos_view.php");


?>
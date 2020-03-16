<?php 


$pedido = $_POST['pedido'];

$sql = "INSERT INTO empresa (pedido) VALUES '$pedido' ";

include "conectarsqli.php";




 ?>
<?php
include "conecta.php";
$id = $_GET['id'];

$deletaCliente = "DELETE FROM  cliente WHERE id_Cliente='$id'";
mysqli_query ($con, $deletaCliente) or
	die ("Erro na exclusão do Cliente: " . mysqli_error($con));

header("Location: listarCliente.php?removido=true");
  die();
?>

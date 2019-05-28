<?php
include "conecta.php";
$id = $_GET['id'];

$deletaVeiculo = "DELETE FROM  veiculos WHERE codVeiculo='$id'";
mysqli_query ($con, $deletaVeiculo) or
	die ("Erro na exclusão do veículo: " . mysqli_error($con));

header("Location: ListarVeiculos.php?removido=true");
  die();
?>

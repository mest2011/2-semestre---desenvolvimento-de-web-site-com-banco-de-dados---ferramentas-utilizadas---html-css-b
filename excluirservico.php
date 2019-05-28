<?php
include "conecta.php";
$id = $_GET['id'];

$deletaVeiculo = "DELETE FROM  servicos WHERE codServico='$id'";
mysqli_query ($con, $deletaVeiculo) or
	die ("Erro na exclusão do veículo: " . mysqli_error($con));

header("Location: listarServicos.php?removido=true");
  die();
?>

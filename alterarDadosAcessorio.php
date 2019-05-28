<?php
include "cabecalho.php";
include "conecta.php";
$codAcessorio = (int) $_POST["codAcessorio"];
$ativoAcessorio = (int)$_POST["ativoAcessorio"];
$nomeAcessorio = $_POST["nomeAcessorio"];
$codigoForn = (int)$_POST["codigoForn"];
$precoAcessorio = (float)$_POST["precoAcessorio"];
$qntdAcessorio = (int)$_POST["qntdAcessorio"];
$cod_car = (int)$_POST["cod_car"];

$comandoUpdate = "UPDATE acessoriosuni set
ativoAcessorio = '$ativoAcessorio', 
nomeAcessorio = '$nomeAcessorio', 
codigoForn = '$codigoForn',
precoAcessorio ='$precoAcessorio',
qntdAcessorio = '$qntdAcessorio', 
cod_car = '$cod_car'
WHERE codAcessorio = '$codAcessorio'";

mysqli_query($con, $comandoUpdate) or 
		die("Erro na atualização de 
			dados :" . mysqli_error($con));
	echo "Acessório alterado com sucesso!<br>";
	echo "Clique <a href=listarAcessorio.php>aqui</a> para retornar a listagem.";
?>
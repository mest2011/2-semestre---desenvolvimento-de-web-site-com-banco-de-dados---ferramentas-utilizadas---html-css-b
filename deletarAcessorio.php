<?php include "cabecalho.php";

include "conecta.php";
$comandoSQL = "DELETE FROM acessoriosuni WHERE codAcessorio=". $_GET["c"];

mysqli_query ($con, $comandoSQL) or 
	die ("Erro na exclusão do acessorio: " . mysqli_error($con));

echo "Acessório excluído com sucesso!<br>";
echo "Clique <a href=listarAcessorio.php>aqui</a> para retornar a listagem.";
include "rodape.php";
?>
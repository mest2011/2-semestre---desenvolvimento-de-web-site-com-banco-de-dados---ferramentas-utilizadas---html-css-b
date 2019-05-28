<?php include "cabecalho.php";

include "conecta.php";
$comandoSQL = "DELETE FROM funcionario WHERE codFuncionario=". $_GET["c"];

mysqli_query ($con, $comandoSQL) or 
	die ("Erro na exclusão do funcionário: " . mysqli_error($con));

echo "Funcionário excluído com sucesso!<br>";
echo "Clique <a href=listarFuncionario.php>aqui</a> para retornar a listagem.";
include "rodape.php";
?>
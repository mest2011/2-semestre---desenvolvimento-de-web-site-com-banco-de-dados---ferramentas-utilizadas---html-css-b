<?php 	include "cabecalho.php";
		include "conecta.php";
	
  $codigo = $_GET["a"];
  $comandoSQL="DELETE FROM venda WHERE codVenda=$codigo";
  mysqli_query($con, $comandoSQL) or 
    die("Erro na exclusão de linha. " . mysqli_error($con));
  
  echo "<center>Cadastro exlcuído com sucesso.</center>";
  echo "<center><button><a href='ListaVenda.php'>Voltar</a></button></center>";
?>
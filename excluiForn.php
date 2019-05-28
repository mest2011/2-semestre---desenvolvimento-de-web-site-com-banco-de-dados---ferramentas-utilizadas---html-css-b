<?php 	include "cabecalho.php";
		include "conecta.php";
	
  $codigo = $_GET["c"];
  $comandoSQL=" DELETE FROM forn WHERE codigoForn=$codigo";
  mysqli_query($con, $comandoSQL) or 
    die("Erro na exclusão de linha. " . mysqli_error($con));
  
  echo "<center>Cadastro exlcuído com sucesso.</center>";
  echo "<center><button><a href='listaForn.php'>Voltar</a></button></center>";
?>
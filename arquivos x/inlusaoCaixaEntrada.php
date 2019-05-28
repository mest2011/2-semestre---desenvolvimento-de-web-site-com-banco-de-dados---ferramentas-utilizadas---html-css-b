<?php include "cabecalho.php";
include "conecta.php";
$caixaEntrada="SELECT caixaEntrada FROM Entrada;";
$rs=mysqli_query($con , $caixaEntrada ) or 
die ("Erro na seleção de dados" . mysqli_error($con));

?>

		<h1>Caixa de Entrada<h1>
	<div class="constainer">
	<table>
	<form action="CaixaEntrada" method="post" enctype="multipart/from-data">
	
	<input type="text" name="fornecedor"><br>
		<td><input name="Fornecedor" type="checkbox"></td>
		
	<input type="text" name="Pecas"><br>
		<td><input name="Pecas" type="checkbox"></td>
		
	<input type="text" name="AcessoriosUniversal"><br>
		<td><input name="AcessoriosUniversal" type="checkbox"></td>
	
	</table>
	
	<?php include "rodape.php";?>
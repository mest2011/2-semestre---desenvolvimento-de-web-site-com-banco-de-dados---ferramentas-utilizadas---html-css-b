<?php include "cabecalho.php";
include "conecta.php";
$caixaEntrada="SELECT caixaSaida FROM Entrada;";
$rs=mysqli_query($con , $caixaEntrada ) or 
die ("Erro na seleção de dados" . mysqli_error($con));

?>
		<h1> Caixa de Saida</h1>
	<div class="container">
	<table>
	<form action="">
		<td>Cliente</td>
		<input text="text" name="cliente"><br>
			<td><input name="Cliente"><td>
			<td><input type="checkbox"></td>
			
		<td>Veiculos</td>
		<input text="text" name="veicolos"><br>
			<td><input name="Cliente"><td>
			<td><input type="checkbox"></td>
		
		<td>Funcionarios</td>
		<input text="text" name="Funcionarios"><br>
			<td><input name="funcionaios"></td>
			<td><input type="checkbox"></td>
			
		<td>Pecas</td>
		<input text="text" name="Pecas"><br>
			<td><input name="pecas"></td>
			<td><input type="checkbox"></td>
		
		<td>Opcionais<td>
		<input text="text" name="Opcionais"><br>
			<td><input name="opcionais"></td>
			<td><input type="checkbox"></td>
			
		<td>AcessorioUniversal</td>
		<input text="text" name="AcessorioUniversal"><br>
			<td><input name="acessorioUniversal"></td>
			<td><input type="checkbox"</td>
			
	</table>
	
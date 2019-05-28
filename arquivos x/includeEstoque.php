<?php include "cabecalho.php";
include "conecta.php";
$Pecas = "SELECT Pecas FROM pecas;";
die ("Erro na seleção de dados" . mysql_error($con));

$linha = mysqli_num_rows($rs);
for($contador=1;$contador <=$linha;$contador++)
?>
		<h1> Estoque <h1>
	<div class="container">
	<table>
	<form action="Pecas.php" method="post" enctype="multipart/form-data">
	<tr>
		<td>codigo<td>
		<td><input name="codigo" type="number" 
		value="<?= $contador ?>" readonly></td>
	</tr>
	<tr>
		<td>Nome</td>
		<td><input name="nomePeca" type="text"></td>
	</tr>
	<tr>
		<td>Preço</td>
		<td><input type="text" name="PrecoPeca" 
		required min="0" step="0.00"> </td>
		</td>
	</tr>
	<tr>
		<td>Estoque</td>
		<input name="Estoque" hidden value="1">
		<td><input name="Estoque" type="checkbox"></td>
	</tr>
	<tr>
		<td>CodigoPeca</td>
		<td><input name="CodigoPeca" type="number"
		value="<?=$contador?>" readoly></td>
	</tr>
	<tr>
		<td>TipoCarro</td>
		<td><input type="text" name="tipoCarro"><td>
	</tr>
	<tr>
		<td>descrição</td>
		<td><input name="descrição" type="text"><td>
	</tr>
	
	</table>
	<?php include "rodape.php";?>
	
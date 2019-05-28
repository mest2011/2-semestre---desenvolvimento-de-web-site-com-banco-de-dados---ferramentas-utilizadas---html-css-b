<?php include "cabecalho.php"; ?>
<div style='height: 125%; width: 85%; padding:10px;'>

		<center>
		<h2>Opcionais</h2>
			</center>

		<fieldset>
		<form 	action="opcionais.php" enctype="multipart/form-data" method="post">
			<input type="hidden" name="id_Opcionais" value="0" readonly>
			Código do fornecedor: <br>
			<input type="number" name="idFornecedor"
					maxlength="30" size="30"
			   placeholder="Informe o codigo do fornecedor">
			<br>
			Marca (Fabricante):<br>
			<input type="text" name="fabricante" maxlength="30" size="20" placeholder="Informe o fabricante.">
			<br>
			Modelo:<br>
			<input type="text" name="modelo" maxlength="30" size="20" placeholder="Informe o modelo da peça.">
			   <br>
			Cor:<br>
			<select name="cor">
				<option value="" selected>Escolha uma cor</option>
				<option value="azul">azul</option>
				<option value="vermelho">vermelho</option>
				<option value="preto">preto</option>
				<option value="branco">branco</option>
				<option value="cinza">cinza</option>
			</select>
			<br>
			Material:<br>
			<select name="material">
				<option value="" selected>Escolha o material</option>
				<option value="couro">couro</option>
				<option value="corino">corino</option>
				<option value="plastico_abs">plastico (abs)</option>
				<option value="madeira">madeira</option>
			</select><br>
			Modelo destinado:<br>
			<input type="text" name="modelo_destino" size="35" placeholder="Informe o modelo compatível com a peça.">
			<br>
			Quantidade:<br>
			<input type="number" name="quantidade">
			<br>
			Valor unitário:<br>
			<input type="number" name="valor">
			<br>
			<input type="submit" value="Enviar">
		</form>
	</fieldset>
<br><br>
<form action="listarOpcionais.php">
	<input type="submit" name="listaOpcionais" value="Lista de opcionais cadastrados">
</form>
</div>
<?php include "rodape.php"; ?>

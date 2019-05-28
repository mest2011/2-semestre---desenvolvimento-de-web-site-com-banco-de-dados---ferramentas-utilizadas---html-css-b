<?php include "cabecalho.php";?>

<h2>Cadastro de Acessórios Universais<br></h2>
<div class="container">
    <form action="inserirAcessorio.php" method="post" enctype="multipart/form-data">
        <label>Ativo</label>
		<br>
			<select name="ativoAcessorio">
				<option value="1">Sim</option>
				<option value="0">Não</option>
			</select>
		<br>
		<label>Nome</label>
		<br>
		<input type="text" name="nomeAcessorio" size="30" maxlength="100">
		<br>
		<label>ID Fornecedor</label>
		<br>
		<input type="text" name="codigoForn" size="3">
		<br>
		<label>Preço Acessório</label>
		<br>
		<input type="text" name="precoAcessorio" size="3" placeholder="0000.00">
		<br>
		<label>Quantidade</label>
		<br>
		<input type="number" name="qntdAcessorio" min="0" max="100">
		<br>
		<label>ID Veículo</label>
		<br>
		<input type="text" name="cod_car" size="3">
		<br>
		<br>
		<input type="submit" value="Enviar">
		<input type="reset" value="Limpar">
	</form>
</div>

<?php include "rodape.php";?>		
<?php include "cabecalho.php" ?>
<h2>Cadastro de Venda</h2>
<div style='height: 100%; width: 85%; padding:10px;'>
	<p>Preencha cadastro de venda a seguir:</p>
<form method="post" action="cadVenda.php">
	<input type="text" name="id_funcion" maxlength="30" placeholder="Codigo de Funcionario"> <br><br>  
	<input type="text" name="id_cliente" maxlength="60" placeholder="Nome do Cliente"><br><br>
	<input type="number" name="id_veiculo" placeholder="Veículo">
	<input type="text" name="chassis" placeholder="Chassis" maxlength="17">
	<input type="text" name="fabricante" placeholder="Fabricante"> <br><br>  
	<input type="number" name="servico" placeholder="Código de serviço ? (Se houver)">	<br><br>
	<input type="number" name="valorVenda" placeholder="Valor" maxlength="9">	<br><br>
	Tem cupom ?<input type="checkbox" name="cupom" value="1">
	<input type="number" name="valorCupom" placeholder="Valor do Cupom" maxlength="9"><br><br>
	<textarea placeholder="Observação" rows="3" cols=50></textarea>
    <br><br><center>
	<input type="submit" value='Cadastrar'></center>
</div>
</form>
<?php include "rodape.php"?>
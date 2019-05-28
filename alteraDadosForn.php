<?php 
	include "cabecalho.php";
	include "conecta.php";
	$codigoForn		= $_POST["codigoForn"];
	$fornecedor		= $_POST["fornecedor"];	// Nome do fornecedor/empresa
	$dataCadastro  	= date ("Y-m-d");
	$cnpj			= (int) $_POST["cnpj"];
	$atividade		= $_POST["atividade"];	// Atividade da empresa
	$nome			= $_POST["nome"];		// Nome do usuário
	$endereco		= $_POST["endereco"];	
	$cep			= (int)$_POST["cep"];		
	$cidade			= $_POST["cidade"];		
	$uf				= $_POST["uf"];			
	$email			= $_POST["email"];		// Email do fornecedor
	$telForn		= $_POST["telForn"];  	// Telefone do fornecedor
	$mensagem		= $_POST["mensagem"];
	
		
	$comandoSQL="UPDATE forn SET  
					fornecedor='$fornecedor', 
					cnpj=$cnpj, 
					atividade='$atividade', 
					nome='$nome', 
					endereco='$endereco', 
					cep=$cep, 
					cidade='$cidade', 
					uf='$uf', 
					email='$email', 
					telForn=$telForn, 
					mensagem='$mensagem'
					WHERE codigoForn='$codigoForn'";
					
	mysqli_query($con, $comandoSQL) or die("Erro Mysql:" .mysqli_error($con));
	
	
?>
<fieldset>
<center>Dados alterado com sucesso !<br>
<button><a href='ListaForn.php'>Volte</a></button></center>
</fieldset>
<?php include "rodape.php"; ?>
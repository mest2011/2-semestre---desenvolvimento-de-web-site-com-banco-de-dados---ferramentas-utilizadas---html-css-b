<?php include "cabecalho.php";
	  include "conecta.php";
	$fornecedor		= $_POST["fornecedor"];	// Nome do fornecedor/empresa
	$dataCadastro  	= date ("Y-m-d");
	$cnpj			= (int) $_POST["cnpj"];
	$atividade		= $_POST["atividade"];	// Atividade da empresa
	$nome			= $_POST["nome"];		// Nome do usuário
	$endereco		= $_POST["endereco"];
	$cep			= (int)$_POST["cep"];
	$cidade			= $_POST["cidade"];
	$uf				= $_POST["UF"];
	$email			= $_POST["email"];		// Email do fornecedor
	$telForn		= $_POST["telForn"];  	// Telefone do fornecedor
	$mensagem		= $_POST["mensagem"];


	// validar dados
	if ( strlen($cnpj ) == 14 )
		die("Informe seu CNPJ corretamente (14 dígitos).");

	if ( strlen($cep ) == 8 )
		die("Informe sua caixa postal corretamente (CEP).");

	// exibir dados
	echo "<h2>Cadastrado !</h2>";
	echo date('d/m/y') . '<br />';
	echo "$nome,";
	echo "<b>$fornecedor já está em fila para avaliarmos ! <br>";
	echo "Entraremos em contato $telForn ou por email $email assim que possível.<br>";


	// insert
	$comandoSQL = "INSERT INTO forn
		( fornecedor,
			dataCadastro,
			cnpj,
			atividade,
			nome,
			endereco,
			cep,
			cidade,
		 	uf,
			email,
			telForn,
		mensagem )
		VALUES
		( '$fornecedor',
			'$dataCadastro',
			'$cnpj',
			'$atividade',
			'$nome',
			'$endereco',
			'$cep',
			'$cidade',
			'$uf',
			'$email',
			'$telForn',
		'$mensagem' );";
		mysqli_query($con, $comandoSQL) or die("Erro Mysql:" .mysqli_error($con) );
?>

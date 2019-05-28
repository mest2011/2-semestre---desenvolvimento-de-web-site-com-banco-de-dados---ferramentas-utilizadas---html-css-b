<?php include "cabecalho.php"; ?>
<?php

//coleta dos dados atravez de variaveis

	$id_Agendamento = (Int) $_POST["id_Agendamento"];
	$idCliente =(Int) $_POST["idCliente"];
	$idVeiculo =(int)$_POST["idVeiculo"];
	$tipoServico = $_POST["tipoServico"];
	$hora_agendamento = $_POST["hora_agendamento"];
	function arrumaHora($hora_agendamento){
	$pontos = array(":00");
	$result = str_replace($pontos, "", $hora_agendamento);
	return $result;
	}
	$dia_agendamento = $_POST["dia_do_agendamento"];
	$valor_orcamento =(Int)  $_POST["valor_orcamento"];
	$obs =(string)  $_POST["obs"];
//convertendo dados de entrada
	
	if(strlen($hora_agendamento)>5)
    $hora_agendamento = arrumaHora($hora_agendamento);

//validação dos dados
	if ($idCliente == 0 ) {
		die("Por favor informe seu codigo de cadastro!<br><a href='Mecanica_Agendamento.php'>Voltar</a>");
	}

	if( $idVeiculo == 0)
		die("Por favor informe o veiculo que sera consertado!<br><a href='Mecanica_Agendamento.php'>Voltar</a>");

	
	if ($tipoServico == '0') {
		die("Por favor selecione um serviço!<br><a href='Mecanica_Agendamento.php'>Voltar</a>"	);
	}

	if ($dia_agendamento == "") {
		die("Por favor selecione um dia para agendar seu serviço!<br><a href='Mecanica_Agendamento.php'>Voltar</a>"	);
	}
	
	if ($hora_agendamento == "") {
		die("Por favor selecione um horario para agendar seu serviço!<br><a href='Mecanica_Agendamento.php'>Voltar</a>"	);
	}

//conexao com o banco
	$con = mysqli_connect("localhost", "root", "");

	mysqli_select_db($con,"concessionaria") or
	 die("erro ao conectar ao banco" . mysql_error($con));

	

//inserção no banco
if ($id_Agendamento == 0){
	$comandoSQL = "insert into mecanica_agendamento (
		id_Agendamento,
		id_Veiculo, 
		id_Cliente, 
		tipo_servico, 
		hora_agendamento, 
		dia_agendamento,
		valor_orcamento, 
		obs
		)
		values(
		$id_Agendamento, 
		$idVeiculo, 
		$idCliente, 
		'$tipoServico',
		'$hora_agendamento',
		'$dia_agendamento',
		$valor_orcamento, 
		'$obs'
		)";
	}
else{
	$comandoSQL ="
	update mecanica_agendamento set 
		id_Veiculo = $idVeiculo, 
		id_Cliente = $idCliente, 
		tipo_servico = '$tipoServico', 
		hora_agendamento = '$hora_agendamento', 
		dia_agendamento = '$dia_agendamento',
		valor_orcamento = $valor_orcamento, 
		obs = '$obs' where id_Agendamento = $id_Agendamento;";
	}
		
	mysqli_query($con, $comandoSQL) 
		or die("Erro na inclusão do Angendamento:" .
			mysqli_error($con) );


	echo "<br>Agendamento concluido com exito!<br><br>";

echo "<fieldset>";
    echo "Seu ID: $idCliente <br>";
	echo "Seu veiculo: $idVeiculo <br>";
	echo "Serviço Solicitado: $tipoServico <br>";
	echo "Horario agendado: $hora_agendamento<br>";
	echo "Dia agendado: $dia_agendamento<br>";
	echo "Valor do serviço: $valor_orcamento<br>";
	echo "Observações: $obs";
echo "</fieldset>";

echo "<br>
<form action='listarAgendamento.php'>
		<input type='submit' name='ListaCad' value='Lista de cadastrados'>
	</body>";
	

		
?>
<?php include "rodape.php"; ?>
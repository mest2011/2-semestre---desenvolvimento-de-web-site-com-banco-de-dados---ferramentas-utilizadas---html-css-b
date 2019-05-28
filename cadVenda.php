<?php include "cabecalho.php";
	  include "conecta.php";
	$dataVenda  	= date ("Y-m-d");
	$today 			= date	("d/m/Y");
	date_default_timezone_set('America/Sao_Paulo');
	$hora			= date ("H:i:s");
	$id_funcion		= $_POST["id_funcion"];
	$id_cliente		= $_POST["id_cliente"];	
	$id_veiculo		= $_POST["id_veiculo"];	
	$chassis		= $_POST["chassis"];	
	$fabricante		= $_POST["fabricante"];		
	$servico		= $_POST["servico"];		
	$valorVenda		= $_POST["valorVenda"];			
	$cupom=0;
	if ( isset($_POST["cupom"])  )
	$cupom = (int) $_POST["cupom"];
	$valorCupom		= $_POST["valorCupom"];  


	if ( strlen($chassis ) > 17 )
		die("Informe seu Chassis corretamente (17 dígitos).");

	echo "<h4>Cadastrado !</h4>";
	echo "<br>
	<br> Segue as informações: <br> 
	Cadastro: $today - $hora <br> 
	Funcionário: $id_funcion <br> 
	Veículo: $id_veiculo <br> 
	Chassis: $chassis <br> 
	Fabricante: $fabricante <br> 
	Serviço: $servico<br>	
	Valor: $valorVenda<br>				
	Cupom: $cupom<br>		
	Valor do Cupom: $valorCupom<br><br>
	<center><a href='cadVendaH.php'><button>Voltar</button></a>
	 <a href='ListaVenda.php'><button>Listagem</button></a></center>"; 	
	// insert
	$comandoSQL = "INSERT INTO venda
		(dataVenda,hora,id_funcion,id_cliente,id_veiculo,chassis,fabricante,servico,valorVenda,cupom,valorCupom)
		VALUES
		('$dataVenda', '$hora', $id_funcion,'$id_cliente',$id_veiculo,$chassis,'$fabricante',$servico,$valorVenda,'$cupom',$valorCupom)";
		mysqli_query($con, $comandoSQL) or die("Erro Mysql:" .mysqli_error($con) );
?>
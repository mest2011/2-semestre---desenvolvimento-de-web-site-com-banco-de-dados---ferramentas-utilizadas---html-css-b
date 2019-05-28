<?php include "cabecalho.php"; ?>
	
<?php
//coleta dos dados atravez de variaveis
	$id_Opcionais = (Int) $_POST["id_Opcionais"];
	$fornecedor = (int) $_POST["idFornecedor"];
	$fabricante = $_POST["fabricante"];
	$modelo = $_POST["modelo"];
	$cor = $_POST["cor"];
	$material = $_POST["material"];
	$modelo_destino = $_POST["modelo_destino"];
	$quantidade = $_POST["quantidade"];
	$valor = $_POST["valor"];

//validação dos dados
	if ($fornecedor == 0 ) {
		die("Por favor informe o codigo do fornecedor!<br><a href='Opcionais_fabrica.html'>Voltar</a>");
	}

	if( $fabricante == "")
		die("Por favor informe o fabricante da peça!<br><a href='Opcionais_fabrica.html'>Voltar</a>");

	
	if ($modelo == "") {
		die("Por favor informe o modelo da peça!<br><a href='Opcionais_fabrica.html'>Voltar</a>"	);
	}

	if ($cor == "") {
		die("Por favor selecione uma cor!<br><a href='Opcionais_fabrica.html'>Voltar</a>"	);
	}

	if ($material == "") {
		die("Por favor selecione um tipo de material!<br><a href='Opcionais_fabrica.html'>Voltar</a>"	);
	}
	
	if ($quantidade == 0) {
		die("Por favor informe a quantidade adquirida!<br><a href='Opcionais_fabrica.html'>Voltar</a>"	);
	}

	if ($valor == 0) {
		die("Por favor informe o valor unitario do produto!<br><a href='Opcionais_fabrica.html'>Voltar</a>"	);
	}

//conexao com o banco
	$con = mysqli_connect("localhost", "root", "");

	mysqli_select_db($con,"concessionaria") or
	 die("erro ao conectar ao banco" . mysql_error($con));

//inserção no banco
	 if ($id_Opcionais == 0){
	$comandoSQL="insert into Opcionais(
		id_Opcionais,
		fornecedor, 
		fabricante,
		modelo,
		cor,
		material,
		modelo_destino,
		quantidade,
		valor
		)
		values(
		0,
		$fornecedor,
		'$fabricante',
		'$modelo',
		'$cor',
		'$material',
		'$modelo_destino',
		$quantidade,
		$valor
		)";
	}
	else{
	$comandoSQL ="
	update Opcionais set 
		fornecedor = $fornecedor, 
		fabricante = '$fabricante', 
		modelo = '$modelo', 
		cor = '$cor', 
		material = '$material',
		modelo_destino = '$modelo_destino', 
		quantidade = '$quantidade',
		valor = $valor where id_Opcionais = $id_Opcionais;";
	}

	mysqli_query($con, $comandoSQL) 
		or die("Erro na inclusão do produto <br>" .
			mysqli_error($con) );

// impressao das informações
		echo "<br>Cadastro do opcional salvo com sucesso!<br><br>";

echo "<fieldset>";
    echo "$fornecedor <br>";
    echo "$fabricante <br>";
    echo "$cor <br>";
    echo "$material <br>";
    
    echo "$quantidade <br>";
    echo "$valor <br>";

echo "</fieldset>";

echo "<br>
<form action='listarOpcionais.php'>
		<input type='submit' name='listarOpcionais' value='Lista de Opcionais'>
	</body>";
?>



<?php include "rodape.php"; ?>

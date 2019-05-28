<?php
include "conecta.php";
$id_cliente =$_POST["id_cliente"];
$nome 			= $_POST["nome"];
$endereco =$_POST["endereco"];
$sobrenome 		= $_POST["sobrenome"];
$sexo 	=$_POST["sexo"];
$peso  =$_POST["peso"];
$ativo      =(int)$_POST["ativo"];
$telefone 		=$_POST["telefone"];
$idade 			=$_POST["idade"];
$rg 			=$_POST["rg"];
$cpf 			=$_POST["cpf"];
$foto 			=$_FILES["foto"]["name"];
$data 			=$_POST["data"];
$obs 			=$_POST["obs"];

 if ($id_cliente == 0){
  $comandoCliente = "insert into cliente(
id_cliente ,
  nome	 		  ,
	sobrenome   ,
	sexo	 		 ,
	cpf  			,
	rg  			,
	endereco	,
	idade			 ,
	peso			 ,
	foto ,
	ativo 		,
    data ,
	obs    		,
	telefone 	) values (
    $id_cliente ,
    '$nome' ,
    '$sobrenome' ,
    '$sexo' ,
    '$cpf' ,
    '$rg' ,
    '$endereco'  ,
	$data ,
     '$idade' ,
    '$peso' ,
    '$ativo' ,
     '$obs' ,
	   '$telefone' ,
	'$foto' 
  )";
  mysqli_query($con, $comandoCliente)
    or die("Erro na inclusão do Cliente:" .
      mysqli_error($con) );
  header("Location: cliente.php?incluido=true");
    die();
}else {
  $comandoCliente = "update servicos set
  id_cliente = $id_cliente,
  nome = '$nome'  ,
	sobrenome = '$sobrenome'  ,
	sexo = $sexo		 ,
	cpf = '$cpf'	,
	rg = '$rg'			,
	endereco = '$endereco' ,
	idade = '$idade'			 ,
	peso = '$peso'			 ,
	ativo = $ativo		,
	data = '$data' ,
	foto = '$foto' ,
	obs  = '$obs'  ,
	telefone = '$telefone' 
    WHERE id_cliente = $id_cliente";
      mysqli_query($con, $comandoCliente)
    or die("Erro na inclusão do Cliente:" .
      mysqli_error($con) );

  header("Location: listarCliente.php?incluido=true");
    die();

}

echo "<b> Dados recebidos: </b> <br>" ;
echo "Nome: 	<b> $nome </b> <br>";
echo "Sobrenome: 	$sobrenome<br>";
echo "Sexo: 		$sexo <br>";
echo "Telefone: 	$telefone <br>";
echo "Idade: 		$idade <br>";
echo "RG: 			$rg <br>";
echo "Ativo:  $ativo <br>";
echo "CPF: 			$cpf <br>";
echo "foto: 	$foto<br>";
echo "Data de Nasc: 	$data <br>";
echo "Observações:  	$obs <br>";


include "rodape.php" ;
?>

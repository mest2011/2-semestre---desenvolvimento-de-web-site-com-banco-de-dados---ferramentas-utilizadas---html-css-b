<?php
include "cabecalho.php";
include "conecta.php";
$codFuncionario = (int) $_POST["codFuncionario"];
$ativoFuncionario = (int) $_POST["ativoFuncionario"];			
$nomeFuncionario = $_POST["nomeFuncionario"];			
$dataNasc = $_POST["dataNasc"];
$rgFuncionario = $_POST["rgFuncionario"];
$cpfFuncionario = $_POST["cpfFuncionario"];
$ddd = (int) $_POST["ddd"];
$foneCelular = $_POST["foneCelular"];
$foneCasa = $_POST["foneCasa"];
$emailFuncionario = $_POST["emailFuncionario"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$cep = $_POST["cep"];
$uf = $_POST["uf"];
$dataContratacao = $_POST["dataContratacao"];
$turno = $_POST["turno"];
$salario = (float) $_POST["salario"];
$funcao = $_POST["funcao"];
$obs = $_POST["obs"];

$comandoUpdate = "UPDATE funcionario set
ativoFuncionario ='$ativoFuncionario',
nomeFuncionario ='$nomeFuncionario',
dataNasc ='$dataNasc',
rgFuncionario ='$rgFuncionario',
cpfFuncionario ='$cpfFuncionario',
ddd ='$ddd',
foneCelular ='$foneCelular',
foneCasa ='$foneCasa',
emailFuncionario ='$emailFuncionario',
endereco ='$endereco',
bairro ='$bairro',
cidade ='$cidade',
cep ='$cep',
uf ='$uf',
dataContratacao = '$dataContratacao',
turno ='$turno',
salario ='$salario',
funcao ='$funcao',
obs ='$obs'
WHERE codFuncionario = '$codFuncionario'";

mysqli_query($con, $comandoUpdate) or 
		die("Erro na atualização de 
			dados :" . mysqli_error($con));
	echo "Funcionário alterado com sucesso!<br>";
	echo "Clique <a href=listarFuncionario.php>aqui</a> para retornar a listagem.";
?>
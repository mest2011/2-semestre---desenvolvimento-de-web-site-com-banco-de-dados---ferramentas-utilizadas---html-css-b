<?php include "cabecalho.php"?>

<div style='height: 100%; width: 85%; padding:10px;'>
	<center><h1> Funcionários Cadastrados</h1></center>
	<br>
	<table cellSpacing=1 cellPadding=0 width=544 border=5 align=center>
	<tr>
		<th>Código</th>
		<th>Ativo</th>
		<th>Nome</th>
		<th>RG</th>
		<th>CPF</th>
		<th>E-mail</th>
		<th>Data Contratacão</th>
		<th>Turno</th>
		<th>Salário</th>
		<th>Função</th>
		<th colspan='2'>Ação</th>
	</tr>

<?php

include "conecta.php";

$consultarFuncionario = "SELECT 
codFuncionario,
ativoFuncionario,
nomeFuncionario,
dataNasc,
rgFuncionario,
cpfFuncionario,
ddd,
foneCelular,
foneCasa,
emailFuncionario,
endereco,
bairro,
cidade,
cep,
uf,
dataContratacao,
turno,
salario,
funcao,
obs from funcionario;";

$rs = mysqli_query($con, $consultarFuncionario) or
			die ("Erro na seleção de dados" . mysqli_error($con));

$linhas = mysqli_num_rows($rs);

$contador = 0;
while($contador < $linhas){
	$dados = mysqli_fetch_array ($rs);
	$codFuncionario = $dados["codFuncionario"];
	$ativoFuncionario = $dados["ativoFuncionario"];
	$nomeFuncionario = $dados["nomeFuncionario"];
	$rgFuncionario = $dados["rgFuncionario"];
	$cpfFuncionario = $dados["cpfFuncionario"];
	$emailFuncionario = $dados["emailFuncionario"]; 
	$dataContratacao = $dados["dataContratacao"];
	$turno = $dados["turno"];
	$salario = $dados["salario"];
	$funcao = $dados["funcao"];

echo" <tr>";
echo "<td>".$codFuncionario."</td>";
echo "<td>".$ativoFuncionario."</td>";
echo "<td>".$nomeFuncionario ."</td>";
echo "<td>".$rgFuncionario ."</td>";
echo "<td>".$cpfFuncionario."</td>";
echo "<td>".$emailFuncionario."</td>";
echo "<td>".$dataContratacao."</td>";
echo "<td>".$turno."</td>";
echo "<td>".$salario."</td>";
echo "<td>".$funcao."</td>";
echo "<td><a href='alterarFuncionario.php?c=$codFuncionario'>Alterar</a></td>" ;
echo "<td><a href='deletarFuncionario.php?c=$codFuncionario'>Excluir</a></td>" ;
echo "<tr>";
$contador++;

}
?>

</table>
</div>

<?php include "rodape.php";?>


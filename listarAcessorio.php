<?php include "cabecalho.php";?>

<div style='height: 100%; width: 85%; padding:10px;'>
	<center><h1>Acessórios Universais Cadastrado</h1></center>
	<br>
	<table cellSpacing=1 cellPadding=0 width=544 border=5 align=center>
	<tr>
		<th>Código</th>
		<th>Ativo</th>
		<th>Nome</th>
		<th>Código Fornecedor</th>
		<th>Preço</th>
		<th>Quantidade</th>
		<th>Código Veículo</th>
		<th colspan='2'>Ação</th>
	</tr>
<?php

include "conecta.php";

$consultarAcessorio = "SELECT 
codAcessorio, 
ativoAcessorio, 
nomeAcessorio, 
codigoForn, 
precoAcessorio,
qntdAcessorio, 
cod_car from acessoriosuni;";

$rs = mysqli_query($con, $consultarAcessorio) or
			die ("Erro na seleção de dados" . mysqli_error($con));

$linhas = mysqli_num_rows($rs);


$contador = 0;
while($contador < $linhas){
	$dados = mysqli_fetch_array ($rs);
	$codAcessorio = $dados["codAcessorio"];
	$ativoAcessorio = $dados["ativoAcessorio"];
	$nomeAcessorio = $dados["nomeAcessorio"];
	$codigoForn = $dados["codigoForn"];
	$precoAcessorio = $dados["precoAcessorio"];
	$qntdAcessorio = $dados["qntdAcessorio"];
    $cod_car = $dados["cod_car"];

echo" <tr>";
echo "<td>".$codAcessorio."</td>";
echo "<td>".$ativoAcessorio."</td>";
echo "<td>".$nomeAcessorio ."</td>";
echo "<td>".$codigoForn ."</td>";
echo "<td>".$precoAcessorio ."</td>";
echo "<td>".$qntdAcessorio."</td>";
echo "<td>".$cod_car."</td>";
echo "<td><a href='alterarAcessorio.php?c=$codAcessorio'>Alterar</a></td>" ;
echo "<td><a href='deletarAcessorio.php?c=$codAcessorio'>Excluir</a></td>" ;
echo "<tr>";
$contador++;

}
?>
</table>
</div>

<?php include "rodape.php";?>



<?php include "cabecalho.php";

$ativoAcessorio = (int)$_POST["ativoAcessorio"];
$nomeAcessorio = $_POST["nomeAcessorio"];
$codigoForn = (int)$_POST["codigoForn"];
$precoAcessorio = (float)$_POST["precoAcessorio"];
$qntdAcessorio = (int)$_POST["qntdAcessorio"];
$cod_car = (int)$_POST["cod_car"];

include 'conecta.php';

$comandoAcessorio = "insert into acessoriosuni(
ativoAcessorio, 
nomeAcessorio, 
codigoForn, 
precoAcessorio,
qntdAcessorio, 
cod_car
)values(
'$ativoAcessorio', 
'$nomeAcessorio', 
'$codigoForn',
'$precoAcessorio',
'$qntdAcessorio', 
'$cod_car'
)";

mysqli_query($con, $comandoAcessorio)
    or die("Erro na inclusão do acessório:" .
    mysqli_error($con) );

 echo "<br>Acessório incluido com sucesso!<br>";
 echo echo "Clique <a href=acessorio.php>aqui</a> para inserir outro acessório.";
include "rodape.php";?>
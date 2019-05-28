<?php
include "conecta.php";

$nome =$_POST['nome'];
$email =$_POST['email'];
$obs =$_POST['obs'];

$comando = "insert into email(
nome,
email,
obs)values(
'$nome',
'$email',
'$obs'
);";
mysqli_query ($con, $comando) or
	die ("Erro na inclusão da informação: " . mysqli_error($con));

header("Location: contato.php?recebido=true");
  die();
?>

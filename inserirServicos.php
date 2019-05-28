<?php
include "conecta.php";
$servicoAtivo =(int)$_POST["servicoAtivo"];
$servicoPromocao =(int)$_POST["servicoPromocao"];
$codServico =(int)$_POST["codServico"];
$tipoServico =$_POST["tipoServico"];
$valorServico = (float)$_POST["valorServico"];
$valorPromocao =(float) $_POST["valorPromocao"];
$obsServico  =$_POST["obsServico"];

//validando input


if ($valorServico == "0") {
  die("Inclua um valor para o serviço <br><a href='servicos.php'>Voltar</a>"	);
  }else if ($servicoPromocao == "0" && $valorPromocao == "0") {
      die("Inclua um Valor promocional. <br><a href='servicos.php'>Voltar</a>"	);
}
if ($tipoServico == "") {
    die("Coloque um nome valido<br><a href='servicos.php'>Voltar</a>"	);
}

//Comando para inserir no banco
if ($codServico == 0 ){
$comandoServico = "insert into servicos (
  codServico,
  servicoAtivo,
  servicoPromocao,
  tipoServico,
  valorServico ,
  valorPromocao,
  obsServico)
  values(
  $codServico,
  $servicoAtivo,
  $servicoPromocao,
  '$tipoServico',
  '$valorServico',
  '$valorPromocao',
  '$obsServico'
)";
mysqli_query($con, $comandoServico)
  or die("Erro na inclusão do Serviço:" .
    mysqli_error($con) );
header("Location: servicos.php?incluido=true");
  die();
}else {
  $comandoServico = "update servicos set
    servicoAtivo =$servicoAtivo,
    servicoPromocao =$servicoPromocao,
    tipoServico ='$tipoServico',
    valorServico ='$valorServico',
    valorPromocao ='$valorPromocao',
    obsServico = '$obsServico'
    WHERE codServico = $codServico";
      mysqli_query($con, $comandoServico)
    or die("Erro na inclusão do Serviço:" .
      mysqli_error($con) );

  header("Location: listarservicos.php?incluido=true");
    die();

}

  ?>

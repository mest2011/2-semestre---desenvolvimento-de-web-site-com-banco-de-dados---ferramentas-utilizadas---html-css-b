<?php
include "conecta.php";
$codVeiculo =(int)$_POST["codVeiculo"];
$veiculoAtivo = (int) $_POST["veiculoAtivo"];
$promocaoAtiva  =(int)$_POST["promocaoAtiva"];
$chassis =$_POST["chassis"];
$fabricante =$_POST["fabricante"];
$nomeVeiculo = $_POST["nomeVeiculo"];
$motor =(float)$_POST["motor"];
$cor =$_POST["cor"];
$lugares =(int) $_POST["lugares"];
$portas =(int)$_POST["portas"];
$valorVeiculo =(float)$_POST["valorVeiculo"];
$valorPromocionalVeiculo =(float) $_POST["valorPromocionalVeiculo"];


//Comando para inserir dados no banco
if($codVeiculo ==0){
  //validando input

  if ($valorVeiculo == "0") {
    die("<h1 class='alert alert-danger'>Favor incluir um valor para o veículo <br></h1><h2><a href='veiculos.php'>Voltar</a></h2>"	);
  }else if ($promocaoAtiva == "0" && $valorPromocionalVeiculo == "0") {
        die("<h1 class='alert alert-danger'>Favor incluir um valor promocional.</h1> <br><h2><a href='veiculos.php'>Voltar</a></h2>"	);
  }
  if ($nomeVeiculo == ""){
      die("<h1 class='alert alert-danger'>Favor incluir um nome para o veículo</h1> <br><h2><a href='veiculos.php'>Voltar</a></h2>"	);
  }else if($fabricante == "")
        die("<h1 class='alert alert-danger'>Favor incluir um nome no fabricante do veículo</h1> <br><h2><a href='veiculos.php'>Voltar</a></h2>"	);

$comandoVeiculo = "insert into veiculos (
  codVeiculo,
  veiculoAtivo,
  promocaoAtiva,
  chassis,
  fabricante,
  motor,
  nomeVeiculo,
  cor,
  lugares,
  portas,
  valorPromocionalVeiculo,
  valorVeiculo
  )values(
  $codVeiculo,
  $veiculoAtivo,
  $promocaoAtiva,
  '$chassis',
  '$fabricante',
  '$motor',
  '$nomeVeiculo',
  '$cor',
  $lugares,
  $portas,
  $valorPromocionalVeiculo,
  $valorVeiculo
  )";

  mysqli_query($con, $comandoVeiculo)
    or die("Erro na inclusão do veiculo:" .
    mysqli_error($con) );


    header("Location: veiculos.php?incluido=true");
      die();

    }else {
//validando inserção

      if ($valorVeiculo == "0") {
        die("<h1 class='alert alert-danger'>Favor incluir um valor para o veículo <br></h1><h2><a href='alterarveiculo.php?id=$codVeiculo'>Voltar</a></h2>"	);
      }else if ($promocaoAtiva == "0" && $valorPromocionalVeiculo == "0") {
            die("<h1 class='alert alert-danger'>Favor incluir um valor promocional.</h1> <br><h2><a href='alterarveiculo.php?id=$codVeiculo'>Voltar</a></h2>"	);
      }
      if ($nomeVeiculo == ""){
          die("<h1 class='alert alert-danger'>Favor incluir um nome para o veículo</h1> <br><h2><a href='alterarveiculo.php?id=$codVeiculo'>Voltar</a></h2>"	);
      }else if($fabricante == "")
            die("<h1 class='alert alert-danger'>Favor incluir um nome no fabricante do veículo</h1> <br><h2><a href='alterarveiculo.php?id=$codVeiculo'>Voltar</a></h2>"	);

      $comandoVeiculo = " UPDATE veiculos set
      veiculoAtivo =  $veiculoAtivo,
      promocaoAtiva = $promocaoAtiva,
      chassis ='$chassis',
      fabricante = '$fabricante',
      motor = '$motor',
      nomeVeiculo =  '$nomeVeiculo',
      cor ='$cor',
      lugares = $lugares,
      portas = $portas,
      valorPromocionalVeiculo = $valorPromocionalVeiculo,
      valorVeiculo =$valorVeiculo
      WHERE codVeiculo = $codVeiculo";

      mysqli_query($con, $comandoVeiculo)
        or die("Erro na inclusão do veiculo:" .
        mysqli_error($con) );
        header("Location: listarveiculos.php?incluido=true");
          die();
    }
?>

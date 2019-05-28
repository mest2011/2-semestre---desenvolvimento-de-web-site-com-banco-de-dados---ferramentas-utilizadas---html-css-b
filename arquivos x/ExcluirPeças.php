<?php
  if(!isset($_GET["c"]))
    die("Rotina chamada de forma incorreta!");

  $con=mysqli_connect("localhost","root","");
    die("Erro da selecao
        banco:" .mysqli_error($conn));

  $comando="DELETE FROM pecas 
            WHERE codigo codigo=" . $_GET["c"];
  //echo $comando;
  mysqli_query ($con , $comando) or
  die("Erro na exclusão do registro da
  peça:" . mysqli_error ($con));

  echo "Peças excluida. <br>";
?>
Clique <a href ="Peças.php">aqui</a> para continuar.

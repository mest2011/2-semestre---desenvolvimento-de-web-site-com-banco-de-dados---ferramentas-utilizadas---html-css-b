<html>
  <head>
    <title>...</title>
  </head>
  <body>
    <?php
    $conn=mysqli_connect("localhost", "root" , "") or
          die ("Erro na conexão com o MySQL.");

    mysqli_select_db($conn , "peças" ) or
      die ("falha na seleção do banco de dados:" .
            mysqli_error ($con) );

    $comando="SELECT * FROM peças";

    $rs = mysqli_query($conn , $comando) or
		      die("Falha na seleção de dados:" .
			mysqli_error($conn) );

    $linhas = mysqli_num_rows($rs) or
  	     die("Falha na recuperação dos registros:" . mysqli_error($conn) );

	   echo "Número de registros encontrados: $linhas  <hr> ";

     //outra forma
     //mysqli_query($con , "SELECT * FROM peças")

    while ($dados = mysqli_fetch_array ($rs) )
    {
      $id             = $dados["id"];
      $nome				    = $dados["nome"];
      $preço				  = $dados["preço"];
      $estoque			  = $dados["estoque"];
      $codigoPeca			= $dados["CodicoPeca"];
      $tipoCarro     	= $dados["tipoCarro"];
      $descricao 			= $dados["descricao"];
      $foto           = $dados["foto"];

      echo  "$id         | ";
      echo  "$nome       | ";
      echo  "$preco      | ";
      echo  "$estoque    | ";
      echo  "$CodigoPeca | ";
      echo  "$tipoCarro  | ";
      echo  "$descricao  | ";
      echo  "$foto       | ";
      echo  " <a href='cadTime.php?id=$codigo'>Altetar</a>";
      echo  " <a href='cadTime.php?id=$codigo'>Excluir</a> <br>";
      echo  "";
    }

    echo "</table>";

    ?>

  </body>
</html>

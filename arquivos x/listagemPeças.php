<html>
<head>
  <title>...</title>
</head>
<body>
  <?php
  $conn=mysqli_connect("localhost", "root","") or
  die("Erro na conexão com o MYSQL.") ;

mysqli_select_db($conn , "Pecas") or
  die("Falha na seleção do banco de dados:" .
    mysqli_error($conn) );

$comando="SELECT * FROM pets ORDER BY nome" ;

$rs = mysqli_query($conn , $comando) or
  die("Falha na seleção de dados:" .
    mysqli_error($conn) );

$linhas = mysqli_num_rows($rs) or
  die("Falha na recuperação dos registros:" . mysqli_error($conn) );

echo "Número de registros encontrados: $linhas <br>"
    
   ?>
</body>
</html>

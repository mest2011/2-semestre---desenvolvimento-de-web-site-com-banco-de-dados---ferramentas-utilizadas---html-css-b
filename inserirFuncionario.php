<?php include "cabecalho.php";

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
$foto = $_FILES["foto"]["name"];
$tamanho = $_FILES["foto"]["size"];
$tipoArquivo = $_FILES["foto"]["type"];
$nomeTemporario = $_FILES["foto"]["tmp_name"];
$obs = $_POST["obs"];

if( ($foto <> "") and ($tamanho > 0) )
  {
    $destino = "arquivos/" . $foto ;
  if (move_uploaded_file ($nomeTemporario, $destino ) )
     echo "Arquivo da foto recebido com sucesso!<br>";
       else
         echo "Erro no recebimento do arquivo da foto :" . 
               $_FILES["foto"]["error"];
   }



include "conecta.php";

$comandoFuncionario = "insert into funcionario (
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
foto,
obs)values(
'$ativoFuncionario',
'$nomeFuncionario',
'$dataNasc',
'$rgFuncionario',
'$cpfFuncionario',
'$ddd',
'$foneCelular',
'$foneCasa',
'$emailFuncionario',
'$endereco',
'$bairro',
'$cidade',
'$cep',
'$uf',
'$dataContratacao',
'$turno',
'$salario',
'$funcao',
'$foto',
'$obs'
)";

mysqli_query($con, $comandoFuncionario)
    or die("Erro na inclusão do funcionario:" .
    mysqli_error($con) );

  echo "<br>Funcionario incluido com sucesso!<br>";
  echo "Clique <a href=funcionario.php>aqui</a> para inserir outro funcionário.";
include "rodape.php";
?>
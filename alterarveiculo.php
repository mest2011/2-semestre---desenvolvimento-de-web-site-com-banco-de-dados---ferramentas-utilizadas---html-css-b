<?php include "cabecalho.php";
include "conecta.php";

$id = $_GET['id'];
$consultaVeiculo = "SELECT * FROM veiculos WHERE codVeiculo=$id";
$rs = mysqli_query($con, $consultaVeiculo) or
die ("Erro na seleção de dados" . mysqli_error($con));

$dados = mysqli_fetch_array($rs);
$codVeiculo =$dados["codVeiculo"];
$veiculoAtivo =$dados["veiculoAtivo"];
$promocaoAtiva =$dados["promocaoAtiva"];
$chassis =$dados["chassis"];
$fabricante =$dados["fabricante"];
$motor = $dados["motor"];
$nomeVeiculo =$dados["nomeVeiculo"];
$cor =$dados["cor"];
$lugares = $dados["lugares"];
$portas = $dados["portas"];
$valorPromocionalVeiculo = $dados["valorPromocionalVeiculo"];
$valorVeiculo = $dados["valorVeiculo"];
//4- Pega  o múmero de registros/linhas
?>

<div style='height: 100%; width: 85%; padding:10px;'>

        <center><h1> Alteração de veiculos</h1></center>

        <table class="table table-striped">
          <form action="inserirVeiculos.php" method="post" enctype="multipart/form-data">
          <tr>
            <input name="codVeiculo" value=<?=$id?> hidden>
            <td>Ativo</td>
            <input name="veiculoAtivo" value="1" hidden>
            <td><input name="veiculoAtivo" type="checkbox" <?php if($veiculoAtivo==0)echo'checked'?> ></td>
            <td>Promoção</td>
            <input name="promocaoAtiva" value="1" hidden>
            <td><input name="promocaoAtiva" type="checkbox" <?php if($promocaoAtiva==0)echo'checked'?>></td>
          </tr>
          <tr>
            <td>Chassis</td>
            <td><input name="chassis" type="text"value="<?=$chassis?>"></td>
            <td>Fabricante</td>
            <td><input name="fabricante" type="text"value="<?=$fabricante?>"></td>
          </tr>
          <tr>
            <td>Modelo</td>
            <td><input  type="text"name="nomeVeiculo"value="<?=$nomeVeiculo?>"></td>
            <td>Motor</td>
            <td><input name="motor" type="text"value="<?=$motor?>"></td>
          </tr>
          <tr>
            <td>Cor</td>
            <td><input name="cor" type="text"value="<?=$cor?>"></td>
            <td>Lugares</td>
            <td><input name="lugares" type="text"value="<?=$lugares?>"></td>
          </tr>
          <tr>
            <td>Portas</td>
            <td><input name="portas" type="text"value="<?=$portas?>"></td>
            <td>Valor</td>
            <td><input name="valorVeiculo" type="text"value="<?=$valorVeiculo?>"></td>
          </tr>
          <tr>
          <td>Valor Promocional</td>
            <td>
            <input name="valorPromocionalVeiculo" type="text"value="<?=$valorPromocionalVeiculo?>">
          </td>
          </tr>
          <hr>
          </table>
          <input  type="submit" value="Enviar">
          </form>
          </div>
<?php include "rodape.php";?>

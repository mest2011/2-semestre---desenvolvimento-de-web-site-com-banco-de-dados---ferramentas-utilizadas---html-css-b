<?php include "cabecalho.php";


if(array_key_exists("incluido", $_GET) && $_GET["incluido"]=='true') {
  echo "<script type='text/javascript'>
      alert('Veículo incluido com sucesso!');
      </script>";
    }
?>
	<div style='height: 100%; width: 100%; padding:10px 50px 10px 50px ;'>

    		<center><h1> Cadastro de veiculos</h1></center>
          <table class="table table-striped">
          <form action="inserirVeiculos.php" method="post" enctype="multipart/form-data">
          <tr>
            <input name="codVeiculo" value="0" hidden>
            <td>Ativo</td>
            <input name="veiculoAtivo" value="1" hidden>
            <td><input name="veiculoAtivo" type="checkbox"></td>
            <td>Promoção</td>
            <input name="promocaoAtiva" value="1" hidden>
            <td><input name="promocaoAtiva" type="checkbox"></td>
          </tr>
          <tr>
            <td>Chassis</td>
            <td><input name="chassis" type="text"></td>
            <td>Fabricante</td>
            <td><input name="fabricante" type="text"></td>
          </tr>
          <tr>
            <td>Modelo</td>
            <td><input  type="text"name="nomeVeiculo"></td>
            <td>Motor</td>
            <td><input name="motor" type="text"maxlength=""></td>
          </tr>
          <tr>
            <td>Cor</td>
            <td><input name="cor" type="text"></td>
            <td>Lugares</td>
            <td><input name="lugares" type="text"></td>
          </tr>
          <tr>
            <td>Portas</td>
            <td><input name="portas" type="text"></td>
            <td>Valor</td>
            <td><input name="valorVeiculo" type="text"></td>
          </tr>
          <tr>
          <td>Valor Promocional</td>
            <td>
            <input name="valorPromocionalVeiculo" type="text">
          </td>
          </tr>
          <hr>
            </table>
            <input  type="submit" value="Enviar">
          </form>
          </div>

<?php include "rodape.php"; ?>

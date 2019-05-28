<?php include "cabecalho.php";
include "conecta.php";
$id = $_GET['id'];
  $comando="SELECT * FROM servicos WHERE codServico=$id";

  $rs = mysqli_query($con , $comando) or
  die("Erro na seleção do
   registro $id" . mysqli_error($con));

  $linhas = mysqli_num_rows($rs);

  if ($linhas <1)
   die("Código $id não encontrado. Registro foi excluído?" );

  $dados = mysqli_fetch_array($rs);
  $codServico = $dados["codServico"];
  $servicoAtivo = $dados["servicoAtivo"];
  $servicoPromocao = $dados["servicoPromocao"];
  $tipoServico = $dados["tipoServico"];
  $valorServico = $dados["valorServico"];
  $valorPromocao = $dados["valorPromocao"];
  $obsServico = $dados["obsServico"];

  if(array_key_exists("incluido", $_GET) && $_GET["incluido"]=='true') {
  				echo "<script type='text/javascript'>
   						alert('Cadastro alterado com sucesso!');
  					  </script>";
  	 		}
        ?>
        <div style='height: 100%; width: 85%; padding:10px;'>
      		 <h1> <center>Alteração de Serviços</h1></center>

           <table class="table table-striped">
            <form action='inserirServicos.php' method='post' enctype='multipart/form-data'>
          <tr>
            <input name="codServico" type="number"value="<?=$id?>" hidden>
            <td>Ativo</td>
            <input name="servicoAtivo" hidden value="1">
            <td><input name="servicoAtivo" type="checkbox" <?php if($servicoAtivo==0)echo "checked"; ?>></td>
            <td>Promoção</td>
              <input name="servicoPromocao" hidden value="1">
            <td><input name="servicoPromocao" type="checkbox"<?php if($servicoPromocao==0)echo "checked"; ?>></td>
          </tr>
          <tr>
            <td>Tipo de Serviço</td>
            <td><input type="text" name="tipoServico"value=<?=$tipoServico?> ></td>
          </tr>
          <tr>
            <td>OBS</td>
            <td><input name="obsServico" type="text" value=<?=$obsServico?>></td>
            </tr>
          <tr>
            <td>valor</td>
            <td><input type="text" name="valorServico" required min="0" step="0.00" value=<?=$valorServico?>></td>
          </tr>
          <tr>
            <td>valor Promocional</td>
            <td><input  type="text" name="valorPromocao" min="0"  step="0.00"value=<?=$valorPromocao?>></td>
          </tr>
          <hr>
            </table>
            <input  type="submit" value="Enviar">
</div>



<?php include "rodape.php";?>

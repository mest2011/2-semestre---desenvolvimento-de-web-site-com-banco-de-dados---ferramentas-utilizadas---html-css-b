<?php include "cabecalho.php";

        if(array_key_exists("incluido", $_GET) && $_GET["incluido"]=='true') {
          echo "<script type='text/javascript'>
              alert('Serviço incluido com sucesso!');
              </script>";
        }?>
	<div style='height: 100%; width: 85%; padding:10px;'>
		<h1> <center>Cadastro de Serviços</h1></center>

        <table class="table table-striped">
          <form action='inserirServicos.php' method='post' enctype='multipart/form-data'>
          <tr>
            <input name="codServico" type="number"value="0" hidden>
            <td>Ativo</td>
            <input name="servicoAtivo" hidden value="1">
            <td><input name="servicoAtivo" type="checkbox"</td>
            <td>Promoção</td>
              <input name="servicoPromocao" hidden value="1">
            <td><input name="servicoPromocao" type="checkbox"></td>
          </tr>
          <tr>
            <td>Tipo de Serviço</td>
            <td><input type="text" name="tipoServico" ></td>
          </tr>
          <tr>
            <td>valor</td>
            <td><input type="text" name="valorServico" required min="0" step="0.00"></td>
          </tr>
          <tr>
            <td>valor Promocional</td>
            <td><input  type="text" name="valorPromocao" min="0"  step="0.00" ></td>
          </tr>
          <tr>
            <td>OBS</td>
            <td><input name="obsServico" type="text"></td>
          </tr>
          <hr>
            </table>
            <input  type="submit" value="Enviar">
</div>



<?php include "rodape.php";?>

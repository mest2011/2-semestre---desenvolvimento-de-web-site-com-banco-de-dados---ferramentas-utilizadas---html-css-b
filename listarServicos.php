<?php include "cabecalho.php";?>
<div style='height: 100%; width: 85%; padding:10px;'>
	 <center><h1> Serviços Cadastrados</h1></center>
	 <br>
	 <table cellSpacing=1 cellPadding=0 width=544 border=5 align= center>
	 <tr>
	 <th>Código</th>
	 <th>ativo</th>
	 <th>promoção</th>
	 <th>Tipo de serviço</th>
	 <th>Valor do Serviço</th>
	 <th>Valor Promocional</th>
	 <th>Observações</th>
	 <th colspan='2'>Função </th>
	 </tr>

<?php

include 'conecta.php';
      // 3- criar variavel com o comando sql
			$consultaServico = "SELECT codServico,
        servicoAtivo,
        servicoPromocao,
        tipoServico,
        valorServico ,
        valorPromocao,
        obsServico
        FROM servicos;";

			$rs /*record set*/= mysqli_query($con, $consultaServico) or
			die ("Erro na seleção de dados" . mysqli_error($con));

			//4- Pega  o múmero de registros/linhas
			$linhas = mysqli_num_rows($rs);

			//se não tem nenhum resgistro, parar
			if($linhas < 1 ) die("tabela de <b> Serviços</b> esta vazia! :(");
			//retorno de mensagem na tela
			if(array_key_exists("incluido", $_GET) && $_GET["incluido"]=='true') {
				echo "<script type='text/javascript'>
						alert('Serviço Alterado com sucesso!');
						</script>";
			}
			if(array_key_exists("removido", $_GET) && $_GET["removido"]=='true') {
				echo "<script type='text/javascript'>
						alert('Servço excluído com sucesso!');
						</script>";
			}
			//listar os dados
			$contador = 0;

			while($contador < $linhas)
			{
				$dados = mysqli_fetch_array($rs);
				$codServico = $dados["codServico"];
				$servicoAtivo = $dados["servicoAtivo"];
				$servicoPromocao = $dados["servicoPromocao"];
				$tipoServico = $dados["tipoServico"];
				$valorServico = $dados["valorServico"];
				$valorPromocao = $dados["valorPromocao"];
        $obsServico = $dados["obsServico"];

				echo" <tr>";
				echo "<td>".$codServico."</td>";
				if($servicoAtivo == 1){
						echo"<td>Inativo</td>";
				}else{
					echo"<td>Ativo</td>";
				}if($servicoPromocao == 1){
						echo"<td>Inativo</td>";
				}else{
					echo"<td>Ativo</td>";
				}
				echo "<td>$tipoServico</td>";
				echo "<td>$valorServico </td>";
				echo "<td>$valorPromocao</td>";
        echo "<td>$obsServico</td>";
				echo "<td><a href='excluirservico.php?id=$codServico'>DELETAR</a></td>";
				echo "<td><a href='alterarservicos.php?id=$codServico'>ALTERAR</a></td>";
				echo "<tr>";
				$contador++;

			}
?></table>
		</div>
<?php include"rodape.php";?>

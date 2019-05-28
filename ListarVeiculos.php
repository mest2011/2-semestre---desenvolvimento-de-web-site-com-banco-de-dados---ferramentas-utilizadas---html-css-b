<?php include "cabecalho.php";?>
<div style='height: 100%; width: 85%; padding:10px;'>
<h1><center> Veículos Cadastrados</center></h1>
<br>
<table class ="table-responsive"cellSpacing=1 cellPadding=0 width=544 border=5>
<th>Código</th>
<th>Ativo</th>
<th>Promoção</th>
<th>Chassis</th>
<th>Fabricante</th>
<th>Motor</th>
<th>Veiculo</th>
<th>Cor</th>
<th>Qtd de Lugares</th>
<th>Qtd de Portas</th>
<th>Valor Promocional</th>
<th>Valor do Veiculo </th>
<th colspan='2'>Função </th>
</tr>
<?php

include 'conecta.php';
    // Comando de seleção no banco
			$consultaVeiculo = "SELECT
			  codVeiculo,
			  veiculoAtivo,
			  chassis,
				promocaoAtiva,
			  fabricante,
			  motor,
			  nomeVeiculo,
			  cor,
			  lugares,
			  portas,
			  valorPromocionalVeiculo,
			  valorVeiculo FROM veiculos;";


			$rs = mysqli_query($con, $consultaVeiculo) or
			die ("Erro na seleção de dados" . mysqli_error($con));

			//Pega  o múmero de registros/linhas
			$linhas = mysqli_num_rows($rs);

			//se não tem nenhum resgistro, parar
			if($linhas < 1 ) die("tabela de <b> Veículos</b> esta vazia! :(");
			//excluindo veiculos
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
        $codVeiculo =$dados["codVeiculo"];
        $veiculoAtivo =$dados["veiculoAtivo"];
				$chassis =$dados["chassis"];
				$promocaoAtiva =$dados["promocaoAtiva"];
        $fabricante =$dados["fabricante"];
        $motor = $dados["motor"];
        $nomeVeiculo =$dados["nomeVeiculo"];
        $cor =$dados["cor"];
        $lugares = $dados["lugares"];
        $portas = $dados["portas"];
        $valorPromocionalVeiculo = $dados["valorPromocionalVeiculo"];
        $valorVeiculo = $dados["valorVeiculo"];

				echo"<tr>";
				echo"<td>$codVeiculo</td>";
				if($veiculoAtivo == 1){
						echo"<td>Inativo</td>";
				}else{
					echo"<td>Ativo</td>";
				}if($promocaoAtiva == 1){
						echo"<td>Inativo</td>";
				}else{
					echo"<td>Ativo</td>";
				}
				echo"<td>$chassis</td>";
				echo"<td>$fabricante</td>";
				echo"<td>$motor</td>";
				echo"<td>$nomeVeiculo</td>";
				echo"<td>$cor</td>";
				echo"<td>$lugares</td>";
				echo"<td>$portas</td>";
				echo"<td>$valorPromocionalVeiculo</td>";
				echo"<td>$valorVeiculo </td>";
				echo"<td><a href='excluirveiculos.php?id=$codVeiculo'>DELETAR</a></td>";
				echo"<td><a href='alterarveiculo.php?id=$codVeiculo'>ALTERAR</a></td>";
				echo"<tr>";
				$contador++;
			}
		?>
		</table>
	</div>
<?php include "rodape.php";?>

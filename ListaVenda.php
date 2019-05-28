<?php include "cabecalho.php";
	  include "conecta.php";
	  
	  $ListarVenda = "Select codVenda, dataVenda, id_funcion, id_cliente, id_veiculo, fabricante, chassis, valorVenda, cupom, valorCupom from venda;";
	
	$rs = mysqli_query($con, $ListarVenda) or
			die ("Erro na seleção de dados" . mysqli_error($con));
		$linhas = mysqli_num_rows($rs);
		if($linhas < 1) die ("<center>Não existe cadastros de venda no momento. <br><center><button><a href='cadVendaH.php'>Cadastro</a></button></center><br>");
		$conta = 0;
		echo "<table border='1'>";
		echo "<tr>";
		echo "<th>Código</th>";
		echo "<th>Data de Venda</th>";
		echo "<th>Funcionário</th>";
		echo "<th>Cliente</th>";
		echo "<th>Veículo</th>";
		echo "<th>Fabricante</th>";
		echo "<th>Chassis</th>";
		echo "<th>Valor</th>";
		echo "<th>Cupom</th>";
		echo "<th>Valor do Cupom</th>";
		echo "</tr>";	
		
		while($conta < $linhas)
			{
				$dados = mysqli_fetch_array($rs);
	$codVenda = $dados["codVenda"];
	$dataVenda  = $dados["dataVenda"];
	$id_funcion = $dados["id_funcion"];
	$id_cliente = $dados["id_cliente"];
	$id_veiculo = $dados["id_veiculo"];
	$fabricante = $dados["fabricante"];
	$chassis = $dados["chassis"];
	$valorVenda = $dados["valorVenda"];
	$cupom = $dados["cupom"];
	$valorCupom = $dados["valorCupom"];
	
		echo "<tr>";
		echo "<td align='center'>$codVenda</td>";
		echo "<td align='center'>$dataVenda</td>";
		echo "<td>$id_funcion</td>";
		echo "<td>$id_cliente</td>";
		echo "<td>$id_veiculo</td>";
		echo "<td>$fabricante</td>";
		echo "<td>$chassis</td>";
		echo "<td align='right'>$valorVenda</td>";
		echo "<td align='center'>$cupom</td>";
		echo "<td align='right'>$valorCupom</td>";
		echo "<td><a href='alteraVenda.php?c=$codVenda'>Alterar</a></td>";
		echo "<td><a href='exlcuiVenda.php?a=$codVenda'>Excluir</a></td>";
		echo "</tr>";	
		$conta++;
			}

?>

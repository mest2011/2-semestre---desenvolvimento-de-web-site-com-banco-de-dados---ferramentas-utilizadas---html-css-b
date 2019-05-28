<?php include "cabecalho.php"; ?>
<style type="text/css">
/* unvisited link */
a:link {
    color: black;
}

/* mouse over link */
a:hover {
    color: white;
}

/* selected link */
a:active {
    color: blue;
}
.deletar{
padding-left: 2px;
padding-right: 2px;
background-color: #fd5e5e;

}
.editar{
padding-left: 2px;
padding-right: 2px;
background-color: #fdfb5e;
}

.editar a:hover{
	color: #b7b7b6;
}




</style>

		<h2>Listagem de agendamento</h2>
		<?php
			// 1 - Conectar no banco
			$con = mysqli_connect('localhost','root','');

			// 2 - Abrir/selecionar banco
			mysqli_select_db($con,"concessionaria") or
			die("Erro na seleção do banco". mysqli_error($con));

			// 3- criar variavel com o comando sql
			$comandoSQL = "select id_Agendamento, id_Veiculo, id_Cliente, tipo_servico, dia_agendamento, hora_agendamento from mecanica_agendamento;";

			$rs /*record set*/= mysqli_query($con, $comandoSQL) or
			die ("Erro na seleção de dados" . mysqli_error($con));

			//4- Pega  o múmero de registros/linhas
			$linhas = mysqli_num_rows($rs);

			//se não tem nenhum resgistro, parar
			if($linhas < 1 ) die("tabela de <b> Agendamento</b> esta vazia! :(");


			//listar os dados
			$contador = 0;
			echo"<table border='5' cellpadding='15,px' cellspancing='2px' bordercolor='#008B8B'>
			<tr bgcolor='#C0C0C0'>
			<th>Código</th>
			<th>Código veículo</th>
			<th>Código Cliente</th>
			<th>Serviço</th>
			<th>Data</th>
			<th>Hora</th>
			<th  colspan='2'>Ações</th>
			</tr>";

			while($contador < $linhas)
			{
				$dados = mysqli_fetch_array/*recupera os dados de uma linha*/($rs);
				$id_Agendamento = $dados["id_Agendamento"];
				$id_Veiculo = $dados["id_Veiculo"];
				$id_Cliente = $dados["id_Cliente"];
				$tipo_servico = $dados["tipo_servico"];
				$dia_agendamento = $dados["dia_agendamento"];
				$hora_agendamento = $dados["hora_agendamento"];





				echo "<td>".$id_Agendamento."</td>";
				echo "<td>".$id_Veiculo."</td>";
				echo "<td>".$id_Cliente ."</td>";
				echo "<td>".$tipo_servico ."</td>";
				echo "<td>".$dia_agendamento ."</td>";
				echo "<td>".$hora_agendamento ."</td>";
				echo "<td class='editar'><a href='alterarAgendamento.php?c=$id_Agendamento'>EDITAR</a></td>";
				/*chama o endereço pelometodoget*/
				echo "<td class='deletar' ><a href='excluirAgendamento.php?c=$id_Agendamento' >DELETAR</a></td>";
				echo "<tr>";
				$contador++;

			}
			if(array_key_exists("removido", $_GET) && $_GET["removido"]=='true') {
				echo "<script type='text/javascript'>
 						alert('Agendamento excluído com sucesso!');
					  </script>";
	 		}


	 		echo " </table>";


	 		 include "rodape.php";
		?>

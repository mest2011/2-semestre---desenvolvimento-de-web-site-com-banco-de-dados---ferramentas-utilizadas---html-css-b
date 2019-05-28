<?php include "cabecalho.php"; ?>
		<h2>Cadastro de Agendamento - Alteração</h2>

		<?php
			// verificando se o código (c) foi enviado

			if ( ! isset($_GET["c"]))
			   die("Programa chamado de forma incorreta!");
		   
		   // Vamos montar o comando de seleção de dados

		   $codigo = $_GET["c"];

		   $con = mysqli_connect('localhost','root','');
		   mysqli_select_db($con,'concessionaria') or
			die("Erro na seleção do banco". mysqli_error($con));
			
		   $comando="SELECT * FROM mecanica_agendamento WHERE id_agendamento=$codigo";
		   
		   $registro = mysqli_query($con , $comando) or 
			die("Erro na seleção do 
			  registro $codigo" . mysqli_error($con));
			  
			$linhas = mysqli_num_rows($registro);
			
			if ($linhas <1)
			  die("Código $codigo não encontrado. Registro
		            foi excluído?" );
			
			$dados=mysqli_fetch_array($registro);
			$id_Agendamento 	 = $dados["id_Agendamento"];
			$id_veiculo   	 = $dados["id_Veiculo"];
			$id_Cliente   	 = $dados["id_Cliente"];
			$tipo_servico   	 = $dados["tipo_servico"];
			$hora_agendamento  	 = $dados["hora_agendamento"];
			$dia_agendamento 	 = $dados["dia_agendamento"];
			$valor_orcamento   	 = $dados["valor_orcamento"];
			$obs	 = $dados["obs"];
		   
		?>
		<fieldset>
		<form 	action="agendamento.php" enctype="multipart/form-data" method="POST">
			Codigo do Agendamento: <br>
			<input type="number" name="id_Agendamento" value="<?php echo $id_Agendamento;?>" readonly>
			<br>
			Código do cliente: <br>
			<input type="number" name="idCliente" placeholder="Digite o num. de cad. do cliente" maxlength="10" value="<?php echo $id_Cliente;?>">
			<br>
			Código do veículo: <br>
			<input type="number" name="idVeiculo" placeholder="Digite o num. de cad. do veículo" maxlength="10" value="<?php echo $id_veiculo;?>">
			<br>ou<br>
			Selecione entre os veículos cadastrado:<br>
			<select name="id_veiculo">
				<option value="0" selected="">Escolha</option>
				<option value="002" <?php if($id_veiculo == '2')echo ("selected=''");?>>saveiro-shr0256</option>
				<option value="003" <?php if($id_veiculo == '3')echo ("selected=''");?>>corsa-jth4585</option>
				<option value="004" <?php if($id_veiculo == '4')echo ("selected=''");?>>santana-ktk9986</option>
		    </select>
			   <br>
			   Selecione o serviço que deseja realizar:<br>
			   <select name="tipoServico" > 
				<option value="" >Escolha</option>
				<option value="trocaOleo" <?php if($tipo_servico == 'trocaOleo')echo ("selected=''");?> >Troca de Óleo</option>
				<option value="limpezaDeBico" <?php if($tipo_servico  == 'limpezaDeBico')echo ("selected=''");?>>Limpeza de Bico Injetor</option>
				<option value="revisãoProg" <?php if($tipo_servico  == "revisãoProg")echo ("selected=''");?>>Revisão (Programada)</option>
				<option value="bateria" <?php if($tipo_servico  == "bateria")echo ("selected=''");?>>Troca da bateria</option>
				<option value="revisão" <?php if($tipo_servico  == "revisão")echo ("selected=''");?>>Revisão (Check-up)</option>

		    </select>
			   
		    
		
			<br>
			Selecione o dia desejado:<br>
			<input type="date" name="dia_do_agendamento" value="<?php echo $dia_agendamento;?>"><br>
			Selecione a hora desejada:<br>
			<input  type="time" name="hora_agendamento"  value="<?php echo $hora_agendamento;?>">
			<br>
			valor do serviço
			<br>
			<input type="text" name="valor_orcamento"
			placeholder="R$xxx,xx" readonly="" value="<?php echo $valor_orcamento;?>"><br>
			<hr>
			Deixe observações logo abaixo se necessário:<br>
			<input type="text" name="obs" size="50" rows="4" value="<?php echo $obs;?>">

			<br><br>
			
			<input type="submit" value="Enviar">
		
	</fieldset>
<br> <br>
	
</form>
<form action="listarAgendamento.php">
		<input type="submit" name="ListaCad" value="Lista de cadastrados">
<?php include "rodape.php"; ?>


<?php include "cabecalho.php"; ?>


<div style='height: 150%; width: 85%; padding:10px;'>

		<center><h2>Agendamento de manutenção ou revisão</h2></center>

		<form 	action="agendamento.php" enctype="multipart/form-data" method="POST" style="margin-left: 20px;">
			<input type="hidden" name="id_Agendamento" value="0" readonly>
			Código do cliente: <br>
			<input type="number" name="idCliente" placeholder="Digite o num. de cad. do cliente" maxlength="10">
			<br>
			Código do veículo: <br>
			<input type="number" name="idVeiculo" placeholder="Digite o num. de cad. do veículo" maxlength="10">
			<br>ou<br>
			Selecione entre os veículos cadastrado:<br>
			<select name="id_veiculo">
				<option value="0" selected="">Escolha</option>
				<option value="002">saveiro-shr0256</option>
				<option value="003">corsa-jth4585</option>
				<option value="004">santana-ktk9986</option>
		    </select>
			   <br>
			   Selecione o serviço que deseja realizar:
			   <br>
		    <select name="tipoServico">
				<option value="" selected="">Escolha</option>
				<option value="trocaOleo">Troca de Óleo</option>
				<option value="limpezaDeBico">Limpeza de Bico Injetor</option>
				<option value="revisãoProg">Revisão (Programada)</option>
				<option value="bateria">Troca da bateria</option>
				<option value="revisão">Revisão (Check-up)</option>

		    </select>
			<br>
			Selecione o dia desejado:<br>
			<input type="date" name="dia_do_agendamento"><br>
			Selecione a hora desejada:<br>
			<input type="time" name="hora_agendamento"><br>
			valor do serviço
			<br>
			<input type="text" name="valor_orcamento"
			placeholder="R$xxx,xx" readonly=""><br>
			<hr>
			Deixe observações logo abaixo se necessário:<br>
			<input type="text" name="obs" size="50" rows="4">

			<br><br>

			<input type="submit" value="Enviar">
		</form>

<br> <br>
	<form action="listarAgendamento.php">
		<input type="submit" name="ListaCad" value="Lista de cadastrados">
	</form>
</div>



<?php include "rodape.php"; ?>

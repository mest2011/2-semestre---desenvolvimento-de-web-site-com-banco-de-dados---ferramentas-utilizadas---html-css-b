<?php 	//conectar mysql
	$con = mysqli_connect('localhost','root','');
	
	// 2 - Abrir/selecionar banco
			mysqli_select_db($con,'concessionaria') or
			die("Erro na seleção do banco". mysqli_error($con));
			
	//recebe codigo no método get
	$codigo = $_GET['c'];
	$comandoSQL=" DELETE FROM mecanica_agendamento WHERE id_Agendamento='$codigo'";
	mysqli_query($con, $comandoSQL) or
		die("Erro na exclusão do agendamento" . mysqli_error($con));
		
	

header("Location: listarAgendamento.php?removido=true");
  die();

 include "rodape.php"; ?>
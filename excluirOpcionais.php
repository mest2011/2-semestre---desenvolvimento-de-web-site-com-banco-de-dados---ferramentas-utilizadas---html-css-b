<?php 
	//conectar mysql
	$con = mysqli_connect('localhost','root','');
	
	// 2 - Abrir/selecionar banco
			mysqli_select_db($con,'concessionaria') or
			die("Erro na seleção do banco". mysqli_error($con));
			
	//recebe codigo no método get
	$codigo = $_GET['d'];
	$comandoSQL=" DELETE FROM Opcionais WHERE id_Opcionais='$codigo'";
	mysqli_query($con, $comandoSQL) or
		die("Erro na exclusão do Opcional:" . mysqli_error($con));
		
	header("Location: listarOpcionais.php?removido=true");
  die();


 include "rodape.php"; ?>

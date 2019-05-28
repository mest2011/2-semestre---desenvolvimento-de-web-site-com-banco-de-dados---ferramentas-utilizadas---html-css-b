<?php 
	include "cabecalho.php";
	include "conecta.php";
	  
	$codVenda 		= $_POST["codVenda"];
	$id_funcion		= $_POST["id_funcion"];
	$id_cliente		= $_POST["id_cliente"];	
	$id_veiculo		= $_POST["id_veiculo"];	
	$chassis		= $_POST["chassis"];	
	$fabricante		= $_POST["fabricante"];		
	$servico		= $_POST["servico"];		
	$valorVenda		= $_POST["valorVenda"];			
	$cupom=0;
	if ( isset($_POST["cupom"])  )
	$cupom = (int) $_POST["cupom"];
	$valorCupom		= $_POST["valorCupom"];  
		
	$comandoSQL="UPDATE venda SET  
					id_funcion=$id_funcion,
					id_cliente='$id_cliente',
					id_veiculo=$id_veiculo,
					chassis=$chassis,
					fabricante='$fabricante',
					servico=$servico,
					valorVenda=$valorVenda,
					cupom='$cupom',
					valorCupom=$valorCupom
					WHERE codVenda='$codVenda'";
	mysqli_query($con, $comandoSQL) or die("Erro Mysql:" .mysqli_error($con));
	
	
?>
<fieldset>
<center>Dados alterado com sucesso !<br>
<button><a href='ListaVenda.php'>Listagem Venda</a></button></center>
</fieldset>
<?php include "rodape.php"; ?>
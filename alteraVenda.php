<?php include "cabecalho.php"; ?>
<h2>Alteração de Venda</h2>
	<p>Altere a seguir dados desejado:</p>
	<?php	
			if(!isset($_GET["c"]))
				die("Execução de forma incorreta ! Clique em 'Acessar' para acessar listagem de venda e execute novamente.
			
			<br><center><button><a href='ListaVenda.php'>Listagem Venda</a></button></center>");
			
			$codigo=(int) $_GET["c"];
			if($codigo<1)
				die("Execução incorreto!");
			
			include "conecta.php";
				
			$comandoSQL = "SELECT * FROM venda WHERE codVenda=$codigo";
			
			$rs = mysqli_query($con , $comandoSQL) or
				die("Erro na recuperação do registro 
				de venda: " . mysqli_error($con));
				
			$linhas = mysqli_num_rows($rs);
			if($linhas < 1)
				die("Código $codigo não encontrado. Está excluído ?");
			
			$dados = mysqli_fetch_array($rs) or
				die("Erro na criação de matriz de 
				dados: " . mysqli_error($con)); ;

		$codVenda = $dados["codVenda"];
		$dataVenda  = $dados["dataVenda"];
		$id_funcion = $dados["id_funcion"];
		$id_cliente = $dados["id_cliente"];
		$id_veiculo = $dados["id_veiculo"];
		$fabricante = $dados["fabricante"];
		$chassis = $dados["chassis"];
		$servico = $dados["servico"];
		$valorVenda = $dados["valorVenda"];
		$cupom = $dados["cupom"];
		$valorCupom = $dados["valorCupom"];
		
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
		<div style='height: 100%; width: 85%; padding:10px;'>
<form method="post" action="alteraDadosVenda.php">
	<input type="hidden" name="codVenda" value="<?=$codVenda?>">
	<input type="text" name="id_funcion" maxlength="30" placeholder="Codigo de Funcionario" value="<?php echo $id_funcion;?>"> <br><br>  
	<input type="text" name="id_cliente" maxlength="60" placeholder="Nome do Cliente" value="<?php echo $id_cliente;?>"><br><br>
	<input type="number" name="id_veiculo" placeholder="Veículo" value="<?php echo $id_veiculo;?>">
	<input type="text" name="chassis" placeholder="Chassis" maxlength="17" value="<?php echo $chassis;?>">
	<input type="text" name="fabricante" placeholder="Fabricante" value="<?php echo $fabricante;?>"> <br><br>  
	<input type="number" name="servico" placeholder="Código de serviço ? (Se houver)" value="<?php echo $servico;?>">	<br><br>
	<input type="number" name="valorVenda" placeholder="Valor" maxlength="9" value="<?php echo $valorVenda;?>">	<br><br>
	Tem cupom ?<input type="checkbox" name="cupom" value="1" <?php if($cupom==1) echo 'checked';?>>
	<input type="number" name="valorCupom" placeholder="Valor do Cupom" maxlength="9" value="<?php echo $valorCupom;?>"><br><br>
	<textarea placeholder="Observação" rows="3" cols=50></textarea>
    <br><br><center>
	<input type="submit" value='Gravar'></center>
</div>
</form>
<?php include "rodape.php"; ?>
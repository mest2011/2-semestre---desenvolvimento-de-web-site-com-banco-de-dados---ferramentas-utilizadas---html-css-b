<?php include "cabecalho.php";?>

<h2>Alteração de Acessórios Universais<br></h2>

<?php
			if(!isset($_GET["c"]))
				die("Rotina executada de forma incorreta!");
			
			$codAcessorio=$_GET['c'];
		
			if($codAcessorio<1)
				die("Código do acessório informado incorretamente!");
			
			include "conecta.php";

			$comandoSQL = "SELECT * FROM acessoriosuni WHERE codAcessorio=$codAcessorio";
			
			$rs = mysqli_query($con, $comandoSQL) or
				die("Erro na recuperação do regitro 
				do acessório: " . mysqli_error($con));
				
			$linhas = mysqli_num_rows($rs);
			if($linhas<1)
				die("Acessório código $codAcessorio não encontrado. Será que foi excluído?");

			$dados = mysqli_fetch_array($rs) or
				die("Erro na criação de matriz de 
				dados: " . mysqli_error($con));
			$ativoAcessorio = $dados["ativoAcessorio"];
			$nomeAcessorio = $dados["nomeAcessorio"];
			$codigoForn = $dados["codigoForn"];
			$precoAcessorio = $dados["precoAcessorio"];
			$qntdAcessorio = $dados["qntdAcessorio"];
		    $cod_car = $dados["cod_car"];
?>

<div class="container">
    <form action="alterarDadosAcessorio.php" method="post" enctype="multipart/form-data">
    	<input name="codAcessorio" type="number" value='<?php echo $codAcessorio;?>' hidden>
        <label>Ativo</label>
		<br>
			<select name="ativoAcessorio">
				<option value="1"<?php if($ativoAcessorio=='1') echo 'selected';?>>Sim</option>
				<option value="0"<?php if($ativoAcessorio=='0') echo 'selected';?>>Não</option>
			</select>
		<br>
		<label>Nome</label>
		<br>
		<input type="text" name="nomeAcessorio" size="30" maxlength="100"value='<?php echo $nomeAcessorio;?>'>
		<br>
		<label>ID Fornecedor</label>
		<br>
		<input type="text" name="codigoForn" size="3" value='<?php echo $codigoForn;?>'>
		<br>
		<label>Preço Acessório</label>
		<br>
		<input type="text" name="precoAcessorio" size="3" value='<?php echo $precoAcessorio;?>'>
		<br>
		<label>Quantidade</label>
		<br>
		<input type="number" name="qntdAcessorio" min="0" max="100" value='<?php echo $qntdAcessorio;?>'>
		<br>
		<label>ID Veículo</label>
		<br>
		<input type="text" name="cod_car" size="3" value='<?php echo $cod_car;?>'>
		<br>
		<br>
		<input type="submit" value="Enviar">
		<input type="reset" value="Limpar">
	</form>
</div>

<?php include "rodape.php";?>		
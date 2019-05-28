<?php include "cabecalho.php"; ?>
		<h2>Cadastro de Opcionais - Alteração</h2>

		<?php
			// verificando se o código (c) foi enviado

			if ( ! isset($_GET["d"]))
			   die("Programa chamado de forma incorreta!");
		   
		   // Vamos montar o comando de seleção de dados

		   $codigo = $_GET["d"];

		   $con = mysqli_connect('localhost','root','');
		   mysqli_select_db($con,'concessionaria') or
			die("Erro na seleção do banco". mysqli_error($con));
			
		   $comando="SELECT * FROM Opcionais WHERE id_Opcionais=$codigo";
		   
		   $registro = mysqli_query($con , $comando) or 
			die("Erro na seleção do 
			  registro $codigo" . mysqli_error($con));
			  
			$linhas = mysqli_num_rows($registro);
			
			if ($linhas <1)
			  die("Código $codigo não encontrado. Registro
		            foi excluído?" );
			
			$dados=mysqli_fetch_array($registro);
			$id_Opcionais 	 = $dados["id_Opcionais"];
			$fornecedor   	 = $dados["fornecedor"];
			$fabricante   	 = $dados["fabricante"];
			$modelo   	 = $dados["modelo"];
			$cor  	 = $dados["cor"];
			$material 	 = $dados["material"];
			$quantidade   	 = $dados["quantidade"];
			$valor	 = $dados["valor"];
		   
		?>
		<fieldset>
		<form 	action="opcionais.php" enctype="multipart/form-data" method="post">
			Codigo do Agendamento: <br>
			<input type="number" name="id_Opcionais" value="<?php echo $id_Opcionais;?>" readonly>
			<br>
			Código do fornecedor: <br>
			<input type="number" name="idFornecedor" maxlength="30" size="30" placeholder="Informe o codigo do fornecedor" value="<?php echo $fornecedor;?>">
			<br>
			Marca (Fabricante):<br>
			<input type="text" name="fabricante" maxlength="30" size="20" placeholder="Informe o fabricante." value="<?php echo $fabricante;?>">
			<br>
			Modelo:<br>
			<input type="text" name="modelo" maxlength="30" size="20" placeholder="Informe o modelo da peça." value="<?php echo $modelo;?>">
			   <br>
			Cor:<br>
			<select name="cor">
				<option value="" >Escolha uma cor</option>
				<option value="azul" <?php if($cor  == 'azul')echo ("selected=''");?>>azul</option>
				<option value="vermelho" <?php if($cor  == 'vermelho')echo ("selected=''");?>>vermelho</option>
				<option value="preto" <?php if($cor  == 'preto')echo ("selected=''");?>>preto</option>
				<option value="branco" <?php if($cor  == 'branco')echo ("selected=''");?>>branco</option>
				<option value="cinza" <?php if($cor  == 'cinza')echo ("selected=''");?>>cinza</option>
			</select>
			<br>
			Material:<br>
			<select name="material">
				<option value="" >Escolha o material</option>
				<option value="couro" <?php if($material  == 'couro')echo ("selected=''");?>>couro</option>
				<option value="corino" <?php if($material  == 'corino')echo ("selected=''");?>>corino</option>
				<option value="plastico_abs" <?php if($material  == 'plastico_abs')echo ("selected=''");?>>plastico (abs)</option>
				<option value="madeira" <?php if($material  == 'madeira')echo ("selected=''");?>>madeira</option>	
			</select><br>
			Modelo destinado:<br>
			<input type="text" name="modelo_destino" size="35" placeholder="Informe o modelo compativeu com a peça." value="<?php echo $quantidade;?>">
			<br>
			Quantidade:<br>
			<input type="number" name="quantidade" value="<?php echo $id_Opcionais;?>">
			<br>
			Valor unitário:<br>
			<input type="number" name="valor" value="<?php echo $valor;?>">
			<br>
			<input type="submit" value="Enviar" >
		</form>
	</fieldset>
<br><br>
<form action="listarOpcionais.php">
	<input type="submit" name="listaOpcionais" value="Lista de opcionais cadastrados">
</form>

<?php include "rodape.php"; ?>

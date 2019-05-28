<?php include "cabecalho.php"; ?>
<h2>Alteração de dados dos Fornecedores</h2>
	<p>Altere a seguir dados desejado:</p>
	<?php	
			if(!isset($_GET["c"]))
				die("Execução de forma incorreta ! Clique em 'Acessar' para acessar lista de fornecedores e execute novamente.
			
			<br><center><button><a href='ListaForn.php'>Acessar</a></button></center>");
			
			$codigo=(int) $_GET["c"];
			if($codigo<1)
				die("Execução incorreto!");
			
			include "conecta.php";
				
			$comandoSQL = "SELECT * FROM forn WHERE codigoForn=$codigo";
			
			$rs = mysqli_query($con , $comandoSQL) or
				die("Erro na recuperação do registro 
				de fornecedores: " . mysqli_error($con));
				
			$linhas = mysqli_num_rows($rs);
			if($linhas < 1)
				die("Código $codigo não encontrado. Está excluído ?");
			
			$dados = mysqli_fetch_array($rs) or
				die("Erro na criação de matriz de 
				dados: " . mysqli_error($con)); ;
	$codigoForn		= $dados["codigoForn"];
    $fornecedor		= $dados["fornecedor"];	
	$dataCadastro  	= $dados["dataCadastro"];
	$cnpj			= $dados["cnpj"];
	$atividade		= $dados["atividade"];	
	$nome			= $dados["nome"];		
	$endereco		= $dados["endereco"];	
	$cep			= $dados["cep"];		
	$cidade			= $dados["cidade"];		
	$uf				= $dados["uf"];			
	$email			= $dados["email"];		
	$telForn		= $dados["telForn"];  	
	$mensagem		= $dados["mensagem"];
				
				mysqli_query($con, $comandoSQL) or die("Erro Mysql:" .mysqli_error($con));
				
		?>
		<div style='height: 100%; width: 85%; padding:10px;'>
<form method="post" action="alteraDadosForn.php">
	<input type="hidden" name="codigoForn" value="<?=$codigoForn?>" >
	<input type="text" name="<?=$fornecedor?>" maxlength="30" placeholder="Nome da sua empresa">   
	<input type="number" value="<?=$cnpj?>" name="cnpj" maxlength="14" placeholder="CNPJ"><br><br>
	<input type="text" name="atividade" placeholder="Atividade" value="<?=$atividade?>"><br><br>
	<input type="text" name="nome" placeholder="Seu nome" value="<?=$nome?>"><br><br>
	<input type="text" name="endereco" placeholder="Endereço da empresa" value="<?=$endereco?>">   
	<input type="number" name="cep" placeholder="CEP" value="<?=$cep?>">	 
	<input type="text" name="cidade" placeholder="Cidade" value="<?=$cidade?>">	 
	<select name="uf" value="uf">	
	<option value="AC" <?php if($uf=='AC') echo 'selected';?>>AC</option>
	<option value="AL" <?php if($uf=='AL') echo 'selected';?>>AL</option>
	<option value="AP" <?php if($uf=='AP') echo 'selected';?>>AP</option>
	<option value="AM" <?php if($uf=='AM') echo 'selected';?>>AM</option>
	<option value="BA" <?php if($uf=='BA') echo 'selected';?>>BA</option>
	<option value="CE" <?php if($uf=='CE') echo 'selected';?>>CE</option>
	<option value="DF" <?php if($uf=='DF') echo 'selected';?>>DF</option>
	<option value="ES" <?php if($uf=='ES') echo 'selected';?>>ES</option>
	<option value="GO" <?php if($uf=='GO') echo 'selected';?>>GO</option>
	<option value="MA" <?php if($uf=='MA') echo 'selected';?>>MA</option>
	<option value="MT" <?php if($uf=='MT') echo 'selected';?>>MT</option>
	<option value="MS" <?php if($uf=='MS') echo 'selected';?>>MS</option>
	<option value="MG" <?php if($uf=='MG') echo 'selected';?>>MG</option>
	<option value="PA" <?php if($uf=='PA') echo 'selected';?>>PA</option>
	<option value="PB" <?php if($uf=='PB') echo 'selected';?>>PB</option>
	<option value="PR" <?php if($uf=='PR') echo 'selected';?>>PR</option>
	<option value="PE" <?php if($uf=='PE') echo 'selected';?>>PE</option>
	<option value="PI" <?php if($uf=='PI') echo 'selected';?>>PI</option>
	<option value="RJ" <?php if($uf=='RJ') echo 'selected';?>>RJ</option>
	<option value="RN" <?php if($uf=='RN') echo 'selected';?>>RN</option>
	<option value="RS" <?php if($uf=='RS') echo 'selected';?>>RS</option>
	<option value="RO" <?php if($uf=='RO') echo 'selected';?>>RO</option>
	<option value="RR" <?php if($uf=='RR') echo 'selected';?>>RR</option>
	<option value="SC" <?php if($uf=='SC') echo 'selected';?>>SC</option>
	<option value="SP" <?php if($uf=='SP') echo 'selected';?>>SP</option>
	<option value="SE" <?php if($uf=='SE') echo 'selected';?>>SE</option>
	<option value="TO" <?php if($uf=='TO') echo 'selected';?>>TO</option>
	</select><br><br>
	<input type="text" name="email" placeholder="E-mail" value="<?=$email?>"> 
	<input type="number" name="telForn" size="11" placeholder="Telefone" value="<?=$telForn?>"><br><br>
	<textarea name="mensagem" placeholder="Apresente sua empresa."><?=$mensagem?></textarea>     <br>  
	<input type="submit" value="Gravar">
</div>
</form>
<?php include "rodape.php"; ?>
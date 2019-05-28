<?php 	include "cabecalho.php";
		include "conecta.php";
			$listarForn = "select
		codigoForn, fornecedor, dataCadastro, cnpj, atividade, nome, endereco, cep, cidade, uf, email, telForn, 
		mensagem from forn;";

			$rs = mysqli_query($con, $listarForn) or
			die ("Erro na seleção de dados" . mysqli_error($con));

			$linhas = mysqli_num_rows($rs);
			
			if($linhas < 1 ) die("tabela de <b> Fornecedores </b> esta vazia! :(");

			$contador = 0;
			echo"<table border='1'>";
			echo"<tr>";
			echo"<th>Código</th>";
			echo"<th>Fornecedor</th>";
			echo"<th>Cadastro</th>";
			echo"<th>CNPJ</th>";
			echo"<th>Atividade</th>";
			echo"<th>Nome</th>";
			echo"<th>Endereco</th>";
			echo"<th>CEP</th>";
			echo"<th>Cidade</th>";
			echo"<th>UF</th>";
			echo"<th>Email</th>";
			echo"<th>Telefone</th>";
			echo"<th>Mensagem</th>";
			echo"</tr>";

			while($contador < $linhas)
			{
				$dados = mysqli_fetch_array($rs);
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
      

				echo"<tr>";
				echo"<td align='center'>$codigoForn</td>";
				echo"<td>$fornecedor</td>";
				echo"<td>$dataCadastro</td>";
				echo"<td>$cnpj</td>";
				echo"<td>$atividade</td>";
				echo"<td>$nome</td>";
				echo"<td>$endereco</td>";
				echo"<td>$cep</td>";
				echo"<td>$cidade</td>";
				echo"<td>$uf</td>";
				echo"<td>$email</td>";
				echo"<td>$telForn</td>";
				echo"<td>$mensagem</td>";
				echo"<td><a href='alteraForn.php?c=$codigoForn'>Alterar</a></td>";
				echo"<td><a href='excluiForn.php?c=$codigoForn'>Excluir</a></td></tr>";
				$contador++;
			}

		?>
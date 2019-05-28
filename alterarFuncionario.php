<?php include "cabecalho.php";?>

<h2>Alteração de Funcionários<br></h2>

<?php
			if(!isset($_GET["c"]))
				die("Rotina executada de forma incorreta!");
			
			$codFuncionario=$_GET['c'];
		
			if($codFuncionario<1)
				die("Código do funcionário informado incorretamente!");
			
			include "conecta.php";

			$comandoSQL = "SELECT * FROM funcionario WHERE codFuncionario=$codFuncionario";
			
			$rs = mysqli_query($con, $comandoSQL) or
				die("Erro na recuperação do regitro 
				do funcionário: " . mysqli_error($con));
				
			$linhas = mysqli_num_rows($rs);
			if($linhas<1)
				die("Funcionário código $codFuncionario não encontrado. Será que foi excluído?");

			$dados = mysqli_fetch_array($rs) or
				die("Erro na criação de matriz de 
				dados: " . mysqli_error($con));
			$ativoFuncionario = $dados["ativoFuncionario"];
			$nomeFuncionario = $dados["nomeFuncionario"];
			$dataNasc = $dados["dataNasc"];
			$rgFuncionario = $dados["rgFuncionario"];
			$cpfFuncionario = $dados["cpfFuncionario"];
			$ddd = $dados["ddd"];
			$foneCelular = $dados["foneCelular"];
			$foneCasa = $dados["foneCasa"];
			$emailFuncionario = $dados["emailFuncionario"];
			$endereco = $dados["endereco"];
			$bairro = $dados["bairro"];
			$cidade = $dados["cidade"];
			$cep = $dados["cep"];
			$uf = $dados["uf"]; 
			$dataContratacao = $dados["dataContratacao"];
			$turno = $dados["turno"];
			$salario = $dados["salario"];
			$funcao = $dados["funcao"];
			$obs = $dados["obs"];
?>
<div class="container">
    <table class="table-">
    	<form action="alterarDadosFuncionario.php" method="post" enctype="multipart/form-data">
    	<input name="codFuncionario" type="number" value='<?php echo $codFuncionario;?>' hidden>
        
        	<tr>
        		<td><label>Ativo</label><br>
				<select name="ativoFuncionario">
				<option value="1"<?php if($ativoFuncionario=='1') echo 'selected';?>>Sim</option>
				<option value="0"<?php if($ativoFuncionario=='0') echo 'selected';?>>Não</option>
				</select></td>
				<td><label>Nome</label><br><input type="text" name="nomeFuncionario" size="30" maxlength="100" value='<?php echo $nomeFuncionario;?>'></td>
				<td><label>Data Nascimento</label><br><input type="date" name="dataNasc" value='<?php echo $dataNasc;?>'></td>
			</tr>
			<tr>
				<td><label>RG</label><br><input type="text" name="rgFuncionario" size="8" maxlength="12" value='<?php echo $rgFuncionario;?>'></td>
				<td><label>CPF</label><br><input type="text" name="cpfFuncionario" size="8" maxlength="13" value='<?php echo $cpfFuncionario;?>'></td>
				<td><label>E-mail</label><br><input type="email" name="emailFuncionario" size="32" maxlength="100" value='<?php echo $emailFuncionario;?>'></td>
			</tr>
			<tr>
				<td><label>DDD</label><br><input type="text" name="ddd" size="2" maxlength="2" value='<?php echo $ddd;?>'></td>
				<td><label>Celular</label><br><input type="text" name="foneCelular" size="8" maxlength="10" value='<?php echo $foneCelular;?>'></td>
				<td><label>Telefone</label><br><input type="text" name="foneCasa" size="8" maxlength="9" value='<?php echo $foneCasa;?>'></td>
				<td><label>Endereço</label><br><input type="text" name="endereco" size="24" maxlength="50" value='<?php echo $endereco;?>'></td>
			</tr>
			<tr>
				<td><label>Bairro</label><br><input type="text" name="bairro" size="11" maxlength="50" value='<?php echo $bairro;?>'></td>
				<td><label>Cidade</label><br><input type="text" name="cidade" size="11" maxlength="50" value='<?php echo $cidade;?>'></td>
				<td><label>CEP</label><br><input type="text" name="cep" size="10" maxlength="11" value='<?php echo $cep;?>'></td>
				<td><label>UF</label><br><input type="text" name="uf" size="2" maxlength="2" value='<?php echo $uf;?>'></td>
			</tr>
			<tr>
				<td><label>Data Contratação</label><br><input type="date" name="dataContratacao" value='<?php echo $dataContratacao;?>'></td>
				<td><label>Turno</label><br>
				<select name="turno">
				<option value="M"<?php if($turno=='M') echo 'selected';?>>Manhã</option>
				<option value="T"<?php if($turno=='T') echo 'selected';?>>Tarde</option>
				<option value="N"<?php if($turno=='N') echo 'selected';?>>Noite</option>
				</select></td>
			</tr>
			<tr>
				<td><label>Salário</label><br><input type="text" name="salario" size="3" placeholder="0000.00" value='<?php echo $salario;?>'></td>
				<td><label>Função</label><br><input type="text" name="funcao" size="25" maxlength="50" value='<?php echo $funcao;?>'></td>
			</tr>
			<tr>
				<td><label>Observações</label><br><textarea name="obs" rows="3" cols="50" value='<?php echo $obs;?>'></textarea></td>
			</tr>
     </table>

	<input type="submit" value="Enviar">
	<input type="reset" value="Limpar">
	</form>
</div>
<br>
<?php include "rodape.php";?>

<style>
	table{
border:0;
border-spacing: 0;
}

p{
	padding: 0;
	margin: 0;
}
td {    
    display: block;
    float: left;
    padding: 10px 0;
    margin-right:5px;
}
td:last-child {
    margin-right: 0;
}
</style>
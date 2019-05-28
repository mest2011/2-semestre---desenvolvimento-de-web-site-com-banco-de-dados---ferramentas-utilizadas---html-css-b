<?php include "cabecalho.php";?>

<h2>Cadastro de Funcionário<br></h2>
<div class="container">
    <table class="table-">
        <form action="inserirFuncionario.php" method="post" enctype="multipart/form-data">
        	<tr>
        		<td><label>Ativo</label><br>
				<select name="ativoFuncionario">
				<option value="1">Sim</option>
				<option value="0">Não</option>
				</select></td>
				<td><label>Nome</label><br><input type="text" name="nomeFuncionario" size="30" maxlength="100"></td>
				<td><label>Data Nascimento</label><br><input type="date" name="dataNasc"></td>
			</tr>
			<tr>
				<td><label>RG</label><br><input type="text" name="rgFuncionario" size="8" maxlength="12"></td>
				<td><label>CPF</label><br><input type="text" name="cpfFuncionario" size="8" maxlength="13"></td>
				<td><label>E-mail</label><br><input type="email" name="emailFuncionario" size="32" maxlength="100"></td>
			</tr>
			<tr>
				<td><label>DDD</label><br><input type="text" name="ddd" size="2" maxlength="2"></td>
				<td><label>Celular</label><br><input type="text" name="foneCelular" size="8" maxlength="10"></td>
				<td><label>Telefone</label><br><input type="text" name="foneCasa" size="8" maxlength="9"></td>
				<td><label>Endereço</label><br><input type="text" name="endereco" size="24" maxlength="50"></td>
			</tr>
			<tr>
				<td><label>Bairro</label><br><input type="text" name="bairro" size="11" maxlength="50"></td>
				<td><label>Cidade</label><br><input type="text" name="cidade" size="11" maxlength="50"></td>
				<td><label>CEP</label><br><input type="text" name="cep" size="10" maxlength="11"></td>
				<td><label>UF</label><br><input type="text" name="uf" size="2" maxlength="2"></td>
			</tr>
			<tr>
				<td><label>Data Contratação</label><br><input type="date" name="dataContratacao"></td>
				<td><label>Turno</label><br>
				<select name="turno">
				<option value="M">Manhã</option>
				<option value="T">Tarde</option>
				<option value="N">Noite</option>
				</select></td>
			</tr>
			<tr>
				<td><label>Salário</label><br><input type="text" name="salario" size="3" placeholder="0000.00"></td>
				<td><label>Função</label><br><input type="text" name="funcao" size="25" maxlength="50"></td>
			</tr>
			<tr>
				<td><label>Observações</label><br><textarea name="obs" rows="3" cols="50"></textarea></td>
			</tr>
          		<td><label>Foto</label><input type="file" name="foto" class="btn"></td>
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
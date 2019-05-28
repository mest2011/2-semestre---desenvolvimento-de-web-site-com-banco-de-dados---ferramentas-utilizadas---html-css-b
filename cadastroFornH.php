<?php
	include "cabecalho.php";
?>
<div style='height: 100%; width: 85%; padding:10px;'>
	<h2>Cadastro de Fornecedor</h2>
	<p>Deseja ser nosso fornecedor ? Apenas preencha os dados abaixo e apresente sua empresa, peças e preços para nós</p>
<form action="cadastroforn.php" method="post">
	<input type="text" name="fornecedor" maxlength="30" placeholder="Nome da sua empresa">
	<input type="number" value="cnpj" name="cnpj" maxlength="14" placeholder="CNPJ"><br><br>
	<input type="text" name="atividade" placeholder="Atividade"><br><br>
	<input type="text" name="nome" placeholder="Seu nome"><br><br>
	<input type="text" name="endereco" placeholder="Endereço da empresa">
	<input type="number" name="cep" placeholder="CEP">
	<input type="text" name="cidade" placeholder="Cidade">
	<select name="UF" value="">	
	<option value="AC">AC</option>
	<option value="AL">AL</option>
	<option value="AP">AP</option>
	<option value="AM">AM</option>
	<option value="BA">BA</option>
	<option value="CE">CE</option>
	<option value="DF">DF</option>
	<option value="ES">ES</option>
	<option value="GO">GO</option>
	<option value="MA">MA</option>
	<option value="MT">MT</option>
	<option value="MS">MS</option>
	<option value="MG">MG</option>
	<option value="PA">PA</option>
	<option value="PB">PB</option>
	<option value="PR">PR</option>
	<option value="PE">PE</option>
	<option value="PI">PI</option>
	<option value="RJ">RJ</option>
	<option value="RN">RN</option>
	<option value="RS">RS</option>
	<option value="RO">RO</option>
	<option value="RR">RR</option>
	<option value="SC">SC</option>
	<option value="SP" selected>SP</option>
	<option value="SE">SE</option>
	<option value="TO">TO</option>
	</select><br><br>
	<input type="text" name="email" placeholder="E-mail">
	<input type="number" name="telForn" size="11" placeholder="Telefone"><br><br>
	<textarea name="mensagem" placeholder="Apresente sua empresa."></textarea>     <br>
	<input type="submit" value="Cadastrar">
</div>
</form>
	<?php include "rodape.php";?>

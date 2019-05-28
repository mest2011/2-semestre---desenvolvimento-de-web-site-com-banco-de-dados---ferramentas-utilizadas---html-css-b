<?php include "cabecalho.php";
include "conecta.php";
if(array_key_exists("incluido", $_GET) && $_GET["incluido"]=='true') {
	echo "<script type='text/javascript'>
			alert('Cliente incluido com sucesso!');
			</script>";
}?>
<div style='height: 125%; width: 85%; padding:10px;'>

<center> <h2>Cliente </h2> </center>
	<form action="dadosCliente.php" method ="post" enctype="multipart/form-data">
<table>
<fieldset>
<th>
	<input name="id_cliente" type="number"value="0" hidden>

			<input type ="radio" name ="sexo" value ="F">Feminino
</th><th>
			<input type ="radio" name ="sexo" value ="M" checked>Masculino
</th>
</fieldset>
<br><br>

			<tr>
	<th>Nome</th> <td>		<input type ="text" name ="nome" placeholder ="Digite seu nome"></td>
</tr> <tr>
	<th>Sobrenome</th> <td>	<input type ="text" name ="sobrenome" placeholder ="Sobrenome"></td>
</tr><tr>
	<th>Tel</th><td>			<input type ="telefone" name ="telefone" placeholder ="(xx)xxxx-xxxx" maxlength ="10" ></td>
</tr><tr>
<th>	Idade </th><td><input type ="number" name ="idade" placeholder= "idade" maxlenght="3" max ="99" min ="1"></td>
</tr><tr>
	<th>RG </th><td>			<input type ="text" name ="rg" placeholder ="RG" maxlength ="9" ></td>
</tr><tr>
<th>CPF</th><td>	 		<input type ="text" name ="cpf" placeholder ="CPF" maxlength ="14"></td>
</tr><tr>
<input type ="number" name ="ativo" value ="1" hidden>

<th>Ativo</th><td> <input type = "checkbox" name="ativo" ></td>

	<th>Data De Nascimento</th><td> <input type ="date" name ="data" ></td>
</tr><tr>
	<th>Endereço</th><td><input type ="text" name ="endereco" ></td>
</tr>
<tr>
	<th>Foto</th><td> <input type ="file" name ="foto"></td>
</tr><tr>
	<th>Peso</th> <td><input type ="text" name ="peso"></td>
</tr>
</table>
	Obs 	<textarea name ="obs" ></textarea>
<br>
<hr>
	<label for ="submit" value ="enviar">
	<input type="submit" >
	</div>

	<?php include "rodape.php";
?>

<?php include "cabecalho.php";
include "conecta.php";
$id = $_GET['id'];
  $comando="SELECT * FROM cliente WHERE id_cliente=$id";

  $rs = mysqli_query($con , $comando) or
  die("Erro na seleção do registro $id" . mysqli_error($con));

  $linhas = mysqli_num_rows($rs);

  if ($linhas <1)
   die("Código $id não encontrado. Registro foi excluído?" );

  $dados = mysqli_fetch_array($rs);
  $id_cliente  = $dados["id_cliente"];
  $ativo = $dados["ativo"];
  $nome = $dados["nome"];
  $sobrenome = $dados["sobrenome"];
  $idade = $dados["idade"];
  $peso = $dados["peso"];
  $rg = $dados["rg"];
  $sexo = $dados["sexo"];
  $cpf =$dados["cpf"];
  $telefone =$dados["telefone"];
  $data		=$dados["data"];
  $endereco =$dados["endereco"];
   $foto =$dados["foto"]["name"];
  $obs =$dados["obs"];
 

  if(array_key_exists("incluido", $_POST) && $_POST["incluido"]=='true') {
  				echo "<script type='text/javascript'>
   						alert('Cliente alterado com sucesso!');
  					  </script>";
  	 		}
        ?>
		
        <div style='height: 100%; width: 85%; padding:10px;'>
      		 <h1> <center>Alteração de Cliente</h1></center>
	<form action="dadosCliente.php" method ="post" enctype="multipart/form-data">
<table>
<fieldset>
<th>
	<input name="id_cliente" type="number"value="<?=$id_cliente?>" hidden>
			<input type ="radio" name ="sexo" value ="F" <?php if($sexo == 'F') echo 'checked';?>>Feminino
</th><th>
			<tr><input type ="radio" name ="sexo" value ="M" <?php if($sexo == 'M') echo 'checked';?>>Masculino
    </th>
	<tr>
		  <th>Ativo</th><td> <input type = "checkbox" name="ativo" <?php if($ativo == '1') echo 'checked'?>></td>
		  <input type ="number"
				name ="ativo" 
				value ="1" 
				hidden>
		  </tr>
		<tr>
	<th>Nome</th> <td><input 	type ="text" 
								name ="nome" 
								placeholder ="Digite seu nome"
								value = "<?= $nome ?>"></td>
</tr> <tr>
	<th>Sobrenome</th><td><input type ="text" 
								name ="sobrenome"
								placeholder ="Sobrenome"></td>
</tr><tr>
	<th>Tel</th><td><input type ="tel"
							name ="telefone" 
							placeholder ="(xx)xxxx-xxxx" 
							maxlength ="10" ></td>
</tr><tr>
<th>	Idade </th><td><input type ="number" 
							name ="idade"
							placeholder= "idade" 
							maxlenght="3" 
							max ="99"
							min ="1"></td>
</tr><tr>
	<th>RG </th><td><input type ="text" 
	name ="rg" 
	placeholder ="RG" 
	maxlength ="9" ></td>
</tr><tr>
<th>CPF</th><td><input type ="text" 
name ="cpf" 
placeholder ="CPF" 
maxlength ="14"></td>
</tr><tr>


	<th>Data De Nascimento</th><td><input type ="date" 
	name ="data" ></td>
</tr><tr>
	<th>Endereço</th><td><input type ="text" 
	name ="endereco" ></td>
</tr>
<tr>
	<th>Foto</th><td> <input type ="file" 
	name ="foto"></td>
</tr><tr>
	<th>Peso</th> <td><input type ="text" 
	name ="peso"></td>
</tr>
</table>
	<label for>Observações</label>
	<textarea name ="obs" ></textarea>
<hr>
	Enviar<input type="submit" >

		</tr>
        
       
</div>



<?php include "rodape.php";?>
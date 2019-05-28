<html>
<meta charset="utf-8">
<head>
<title>Peças </title>
</head>
<body><center> <h2>Peças </h2> </center>

    <?php
      //verificando se o codico (c) foi enciado
      if (!isset($_GET["c"]))
        die("Progrma chamado de forma incorreta");

      //Comando de seleção de dados
      $codigo = $_GET["c"];
      include "conexão.php"

      $omando = "SELECT * FROM peças WHERE codigo=$codigo";
      die("Erro na seleção do registro $codigo" . mysqli_error($con));

      $linha = mysli_num_rows($estoque);

      if ($linha <1)
      die ("Codigo $codigo não encontra. Peça foi excluida??");

    $dados          = mysqli_fetch_array ($estoque);
    $id             = $dados["id"];
  	$nome				    = $dados["nome"];
  	$preço				  = $dados["preço"];
  	$estoque			  = $dados["estoque"];
  	$codigoPeca			= $dados["CodicoPeca"];
  	$tipoCarro     	= $dados["tipoCarro"];
  	$descricao 			= $dados["descricao"];
    $foto           = $dados["foto"];

    ?>


  	<fieldset>
  	<form     action="Pecas.php" enctype="multipart/form-data" method="post">
  	id:<br>
  	<input type="text" name="id"
  			maxlength="20" size="20"
  			placeholder="Informe o nome da peca"
        valeu="<?php echo $nome;?>">
  		<br>

  	nome:<br>
  	<input type="text" name="name"
  		maxlength="30" size="30"
  		placeholder="nome da peca"
      value="<?php echo $nome;?>">
  		<br

  	preço:<br>
  	<input type="text" name="preco"
  	maxlength="10000" size="25"
  	placeholder="preco"
    value="<?php echo $preco;?>" >
  	<br>

  	estoque:<br>
  	<select name="estoque">
  		<option value="" select="">Escolha</option>
  		<option value="S" <?php if ($tipo == "S") echo "selected"; ?> >Sim Possui</option>
  		<option value="N" <?php if ($tipo == "N") echo "selected"; ?> >Não Possui</option>
  	<br>

  	Codigo da Peça:<br>
  	<input type="text" name="codigoPecas"
  	maxlength="6" size="6"
  	placeholder="CodigoPeca"
    value"<?php echo $codigoPeca;?>">
  	<br>


  	Tipo do Carro:<br>
  	<input type="text" name="nomeCarro"
  		maxlength="10" size="10"
  		placeholder="infome seu carro"
      value"<?php echo $tipoCarrro;?>">
  		<br>

  	Descrição:<br>
  	<input type="text" name="Descrição"
  	maxlength="100" size="100"
  	hidden="descrição" valeu=<?php echo $descricao?>><br>


  		<input type="submit" value="Procurar">

  		 foto:<br>
  		<input type="file"  
  		<br>

  		</select>

  	</form>
  	</fieldset>
  </body>
  </html>

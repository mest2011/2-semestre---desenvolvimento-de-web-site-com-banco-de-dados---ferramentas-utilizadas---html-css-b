<?php include "cabecalho.php"
include "conecta.php" $rs = mysqli_query($con, $Pecas)  or
  die ("Erro na seleção de dados" . mysqli_error($con));

//4- Pega o numero de registro/linha
$linhas = mysli_num_rows($rs);

?>

<h2>Peças & Estoque </h2> </center>

	<fieldset>
	<form     action="Peças & Estoque" enctype="multipart/form-data" method="post">
	Peça:<br>
	<input type="text" name="nome da peça"
			maxlength="20" size="20"
			placeholder="Informe o nome da peça">
		<br>

	Carro:<br>
	<input type="text" name="nome do carro"
		maxlength="10" size="10"
		placeholder="infome seu carro">
		<br>

	Ano do Carro:<br>
      <select name="tipo_de_serviço">
          <option value="" selected="">Escolha</option>
          <option value="ano2010">2010</option>
          <option value="ano2011">2011</option>
          <option value="ano2012">2012</option>
          <option value="ano2013">2013</option>
          <option value="ano2014">2014</option>
          <option value="ano2015">2015</option>
          <option value="ano2016">2016</option>
          <option value="ano2017">2017</option>
          <option value="ano2018">2018</option>
          <option value="ano2019">2019</option>
    			<hr>
    			<br><br>

			<input type="submit" value="Procurar">

		</select>

	</form>
	</fieldset>
</body>

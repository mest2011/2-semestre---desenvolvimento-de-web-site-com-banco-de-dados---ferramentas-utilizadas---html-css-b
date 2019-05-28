<?php include "cabecalho.php";?>
<div style='height: 100%; width: 85%; padding:10px;'>
	 <center><h1> Clientes Cadastrados</h1></center>
	 <br>
	 <table cellSpacing=1 cellPadding=0 width=400 border=5 align= center>
	 <tr>
	 <th>Código</th>
	 <th>ativo</th>
	 <th>nome</th>
	 <th>Sobrenome</th>
	 <th>Peso</th>
   <th>sexo</th>
 <th>telefone</th>
  <th>idade</th>
   <th>rg</th>
    <th>cpf</th>
   <th>data</th>
    <th>Endereço</th>
	<th>Foto</th>
	 <th>Observações</th>
	 <th colspan='2'>Função </th>
	 </tr>

<?php

include 'conecta.php';
      // 3- criar variavel com o comando sql
			$consultaCliente = "SELECT
      id_cliente ,
      nome	 		  ,
    	sobrenome   ,
    	sexo	 		 ,
    	cpf  			,
    	rg  			,
    	endereco	,
    	idade			 ,
    	peso			 ,
    	ativo 		,
      data ,
	  foto ,
    	obs    		,
    	telefone
        FROM cliente;";

			$rs= mysqli_query($con, $consultaCliente) or
			die ("Erro na seleção de dados" . mysqli_error($con));

			//4- Pega  o múmero de registros/linhas
			$linhas = mysqli_num_rows($rs);

			//se não tem nenhum resgistro, parar
			if($linhas < 1 ) die("tabela de <b> Cliente</b> esta vazia! :(");
			//retorno de mensagem na tela
			if(array_key_exists("incluido", $_GET) && $_GET["incluido"]=='true') {
				echo "<script type='text/javascript'>
						alert('Cliente Alterado com sucesso!');
						</script>";
			}
			if(array_key_exists("removido", $_GET) && $_GET["removido"]=='true') {
				echo "<script type='text/javascript'>
						alert('Cliente removido com sucesso!');
						</script>";
			}
			//listar os dados
			$contador = 0;

			while($contador < $linhas)
			{
				$dados = mysqli_fetch_array($rs);
			    $id_cliente	 = $dados["id_cliente"];
			$nome 	 = $dados["nome"];
				$endereco = $dados["endereco"];
			$sobrenome  = $dados["sobrenome"];
				$peso= $dados["peso"];
				$sexo = $dados["sexo"];
        $ativo = $dados["ativo"];
        $telefone =$dados["telefone"];
        $idade =$dados["idade"];
        $rg =$dados["rg"];
        $cpf =$dados["cpf"];
		$foto =$dados["foto"]["name"];
        $data =$dados["data"];
        $obs =$dados["obs"];

				echo" <tr>";
				echo "<td>".$id_cliente."</td>";
				if($ativo == 1){
						echo"<td>Inativo</td>";
				}else{
					echo"<td>Ativo</td>";
}
				echo "<td>$nome</td>";
				echo "<td>$sobrenome </td>";
        echo "<td>$peso</td>";
        echo "<td>$sexo</td>";
        echo "<td>$telefone</td>";
        echo "<td>$idade</td>";
        echo "<td>$rg</td>";
        echo "<td>$cpf</td>";
        echo "<td>$data</td>";
        echo "<td>$endereco</td>";
		echo "<td>$foto </td>";
        echo "<td>$obs</td>";

				echo "<td><a href='excluirCliente.php?id=$id_cliente'>DELETAR</a></td>";
				echo "<td><a href='alterarCliente.php?id=$id_cliente'>ALTERAR</a></td>";
				echo "<tr>";
				$contador++;

			}
?>
		</div>

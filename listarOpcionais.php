<?php include "cabecalho.php"; ?>
<style type="text/css">
/* unvisited link */
a:link {
    color: black;
}
/* mouse over link */
a:hover {
    color: white;
}

/* selected link */
a:active {
    color: blue;
}
.deletar{
padding-left: 2px;
padding-right: 2px;
background-color: #fd5e5e;
	
}
.editar{
padding-left: 2px;
padding-right: 2px;
background-color: #fdfb5e;
}

.editar a:hover{
	color: #b7b7b6;
}




</style>

		<h2>Listagem de Opcionais cadastrados:</h2>
		<?php
			// 1 - Conectar no banco
			$con = mysqli_connect('localhost','root','');
			
			// 2 - Abrir/selecionar banco
			mysqli_select_db($con,"concessionaria") or
			die("Erro na seleção do banco". mysqli_error($con));
			
			// 3- criar variavel com o comando sql
			$comandoSQL = "select id_Opcionais , fabricante	 , modelo		 , cor		 , material, quantidade	 	  from Opcionais;";
			
			$rs /*record set*/= mysqli_query($con, $comandoSQL) or
			die ("Erro na seleção de dados" . mysqli_error($con));
			
			//4- Pega  o múmero de registros/linhas
			$linhas = mysqli_num_rows($rs);
			
			//se não tem nenhum resgistro, parar
			if($linhas < 1 ) die("tabela de <b> Opcionais</b> esta vazia! :(");
			
			//listar os dados
			$contador = 0;
			echo"<table border='5' cellpadding='15,px' cellspancing='2px' bordercolor='#008B8B'>";
			echo"<tr bgcolor='#C0C0C0'>";
			echo"<th>Código</th>";
			echo"<th>Fabricante</th>";
			echo"<th>Modelo</th>";
			echo"<th>Cor</th>";
			echo"<th>Material</th>";
			echo"<th>Quantidade</th>";
			echo"<th  colspan='2'>Ações</th>";
			echo"</tr>";
			
			while($contador < $linhas)
			{
				$dados = mysqli_fetch_array/*recupera os dados de uma linha*/($rs);
				$id_Opcionais  = $dados["id_Opcionais"];
				$fabricante	  = $dados["fabricante"];
				$modelo		  = $dados["modelo"];
				$cor		  = $dados["cor"];
				$material	  = $dados["material"];
				$quantidade	  = $dados["quantidade"];
				
				
				
				
				
				echo "<td>".$id_Opcionais ."</td>";
				echo "<td>".$fabricante	 ."</td>";
				echo "<td>".$modelo		  ."</td>";
				echo "<td>".$cor		  ."</td>";
				echo "<td>".$material	  ."</td>";
				echo "<td>".$quantidade	."</td>"; 
				echo "<td class='editar'><a href='alterarOpcionais.php?d=$id_Opcionais'>EDITAR</a></td>";
				/*chama o endereço pelometodoget*/
				echo "<td class='deletar'><a href='excluirOpcionais.php?d=$id_Opcionais'>DELETAR</a></td>";
				echo "<tr>";
				$contador++;
				
			}
			if(array_key_exists("removido", $_GET) && $_GET["removido"]=='true') {
				echo "<script type='text/javascript'>
 						alert('Opcional excluído com sucesso!');
					  </script>";
	 		}
	echo " </table>";


	 		 include "rodape.php";
		?>
	
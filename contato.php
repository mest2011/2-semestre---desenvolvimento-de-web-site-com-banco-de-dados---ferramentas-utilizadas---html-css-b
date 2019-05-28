<?php include "cabecalho.php";
if(array_key_exists("recebido", $_GET) && $_GET["recebido"]=='true') {
  echo "<script type='text/javascript'>
      alert('E-mail enviado com sucesso!');
      </script>";
}
?>
<div style='height: 100%; width: 85%; padding:10px;'>
  <center><h1> Entre em contato </h1></center>
<hr>

<b> Deixe sua opinião!! </b>
  <br>
  <p>Retornaremos o contato o mais breve possivel !</p>
  <br>
  <form action='email.php' method='post' enctype='multipart/form-data'>
  <b>Nome :</b></th>
		<input  type="text"
						size="80"
						maxlength="60"
						placeholder="At&eacute; 60 caracteres"
						required
						name="nome"> <br>

			<b>Email : </b>
			<input 	type="email"
					name="email"
					size="80"
					required
					maxlength="60"
					placeholder="At&eacute; 60 caracteres">
      <br>
    <b>Observações:</b><br>
    <textarea name="obs"
				rows="5" cols="90">
    </textarea>
    <hr>
    <input type="submit">
</div>


<?php include "rodape.php";?>

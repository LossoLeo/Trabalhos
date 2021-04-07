<?php 
	session_start();

	if ($_SESSION['nome']) {
		?>
<!DOCTYPE html>
<html>
<head>
	<title>Medicine CountDown</title>

	<link rel = "stylesheet" type = "text/css" href = "../css/estilo1.css" media = "screen"/>

</head>

<body align = "center">
	<table align = "center" border = 1% width = "100%">
			<tr>
				<td colspan="1" width="25%">
			<button onclick = "window.location.href = '../view/PaginaInicialPac.php'" >Voltar</button>
		</td>
				<td colspan="1">
					<h1>Medicine CountDown</h1>
				</td>
			</tr>
		</table>

<form method = "post" action = "../controller/ControllerAtualizarDadosPac.php">

	<table align = "center" border = 1% cellspacing = "10" width = "30%">
		<tr>
			<td colspan="2">
				<h1>Atualizar Dados</h1>
			</td>
		</tr>
		<tr>
			<td colspan = "1">
				<input type = "text" name = "nome" placeholder = "Digite seu nome" required = "yes" maxlength = "50" value=<?php echo $_SESSION['nome']; ?>>
			</td>
			<td colspan = "1">
				<input type = "text" name = "sobrenome" placeholder = "Digite seu sobrenome" required = "yes" maxlength = "50" value=<?php echo $_SESSION['sobrenome']; ?>>
			</td>
		</tr>		<tr>
			<td colspan = "2">
				<input type = "text" name = "email" placeholder = "Digite seu e-mail" required = "yes" maxlength = "30" value=<?php echo $_SESSION['email']; ?>>
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input syze = 40% type = "endereco" name = "endereco" placeholder = "Digite seu endereço" required = "yes" maxlength = "50" value =<?php echo $_SESSION['endereco'];?>>
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input syze = 40% type = "nomeMae" name = "nomeMae" placeholder = "Digite o nome da sua mãe" required = "yes" maxlength = "40" value =<?php echo $_SESSION['nomeMae'];?>>
			</td>
		</tr>
		<tr>
			<td><h4>Data de Nascimento</h4></td>
		</tr>
		<tr>
			<td colspan = "2">
				<input syze = 40% type = "date" name = "dataNascimento" placeholder = "Digite a data do seu nascimento" required = "yes" maxlength = "30" value =<?php echo $_SESSION['dataNascimento'];?>>
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input type = "text" name = "telefone" placeholder = "Digite seu telefone" required = "yes" max = "99999999999" min = "00000000000" maxlength = "11" oninput = "maxLengthCheck(this)" value=<?php echo $_SESSION['telefone']; ?>>

				<script>
  					function maxLengthCheck(object)
  					{
   						if (object.value.length > object.maxLength)
      						object.value = object.value.slice(0, object.maxLength)
  					}
				</script>

			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input syze = 40% type = "number" name = "cpf" placeholder = "00000000000" required = "yes" max = "99999999999" min = "00000000001" maxlength = "11" oninput = "maxLengthCheck(this)" value =<?php echo $_SESSION['cpf'];?>> 

				<script>
  					function maxLengthCheck(object)
  					{
   						if (object.value.length > object.maxLength)
      						object.value = object.value.slic(e0, object.maxLength)
  					}
				</script>
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input size = 40% type = "password" name = "senha" placeholder = "Digite sua senha" required = "yes" minlength = "4" maxlength = "16" value=<?php echo $_SESSION['senha']; ?>>
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input size = 40% type = "password" name = "confirmarsenha" placeholder = "Confirme sua senha" required = "yes" minlength = "4" maxlength = "16" value=<?php echo $_SESSION['senha']; ?>>
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<label class="drop-down-select" >
				<select id = "Perguntas" name="pergunta">
					<option selected><?php echo $_SESSION['pergunta']; ?></option>
					<option>Nome do Pai</option>
					<option>Nome do cachorro</option>
					<option>Melhor amigo</option>
					<option>Onde sua mãe nasceu</option>
					<option>Primeiro emprego</option>
					<option>Primeira professora</option>
					<option>Seu apelido</option>
				</select>
				</label>
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<?php 
				
				 ?>
				<input size = 40% type = "text" name = "resposta" placeholder = "Resposta" required = "yes" maxlength = "20" value=<?php echo $_SESSION['resposta']; ?>>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				 <button type = "submit" >
					Concluido
				</button>
			</td>
		</tr>
	</table>

</form>
</body>
</html>
<?php 
	}
	else{
		echo "Voce nao esta logado";
		header('Location: ../view/LoginPac.php');
	}

 ?>
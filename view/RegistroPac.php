<!DOCTYPE html>
<html>
<head>
	<title>
		Medicine CountDown
	</title>
	<link rel = "stylesheet" type = "text/css" href = "../css/estilo1.css" media = "screen"/>

</head>

<body align = "center">

	<table align = "center" border = 1% width = "100%">
			<tr>
				<td colspan="1" width="25%">
			<button onclick = "window.location.href = '../view/LoginPac.php'" >Voltar</button>
		</td>
				<td colspan="1">
					<h1>Medicine CountDown</h1>
				</td>
			</tr>
		</table>

<form method = "post" action = "../controller/ControllerRegistroPac.php">

	<table align = "center" border = 1% cellspacing = "10" width = "30%">
		<tr>
			<td colspan = "2">
				<h1>Registre-se</h1>
			</td>
		</tr>
		<tr>
			<td colspan = "">
				<input syze = 40% type = "text" name = "nome" placeholder = "Digite seu nome" required = "yes" maxlength = "50">
			</td>
			<td colspan = "">
				<input syze = 40% type = "text" name = "sobrenome" placeholder = "Digite seu sobrenome" required = "yes" maxlength = "50">
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input syze = 40% type = "number" name = "telefone" placeholder = "DDD9xxxxxxxx" required = "yes" max = "99999999999" min = "00000000000" maxlength = "11" oninput = "maxLengthCheck(this)"> 

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
				<input syze = 40% type = "number" name = "cpf" placeholder = "Digite seu CPF, SEM PONTO e HÍFEN" required = "yes" oninput = "maxLengthCheck(this)" maxlength =    "11">

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
				<input syze = 40% type = "email" name = "email" placeholder = "Digite seu e-mail" required = "yes" maxlength = "30">
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input syze = 40% type = "endereco" name = "endereco" placeholder = "Digite seu endereço" required = "yes" maxlength = "50">
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input syze = 40% type = "nomeMae" name = "nomeMae" placeholder = "Digite o nome da sua mãe" required = "yes" maxlength = "40">
			</td>
		</tr>
		<tr>
			<td><h4>Data de Nascimento</h4></td>
		</tr>
		<tr>
			<td colspan = "2">
				<input syze = 40% type = "date" name = "dataNascimento" placeholder = "Digite a data do seu nascimento" required = "yes" maxlength = "30">
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input syze = 40% type = "password" name = "senha" placeholder = "Digite sua senha" required = "yes" minlength = "4" maxlength = "16">
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input size = 40% type = "password" name = "confirmarsenha" placeholder = "Confirme sua senha" required = "yes" minlength = "4" maxlength = "16">
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<label class="drop-down-select">
				<select id = "Pergunta" name="pergunta">
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
				<input size = 40% type = "text" name = "resposta" placeholder = "Resposta" required = "yes" maxlength = "20">
			</td>
		</tr>
		
		<tr>
			<td colspan = "2">
				<button type = "submit">
					Registrar-se
				</button> 
			</td>
		</tr>
	</table>

</form>


</body>
</html>
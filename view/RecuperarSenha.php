<!DOCTYPE html>
<html>
<head>
	<title>
		Medicine CountDown
	</title>
	<link rel = "stylesheet" type = "text/css" href = "../css/estilo1.css" media = "screen" />

</head>

<body aling = "center">
	<table align = "center" border = 1% width = "100%">
			<tr>
				<td colspan="1" width="25%">
			<button onclick = "window.location.href = '../view/Login.php'" >Voltar</button>
		</td>
				<td colspan="1">
					<h1>Medicine CountDown</h1>
				</td>
			</tr>
		</table>

<form method = "post" action = "../controller/ControllerRecuperarSenha.php">

	<table align = "center" border = "1%" cellspacing = "25">
		<tr>
			<td>
				<h1>Recuperar Senha</h1>
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input size = 40% type = "email" name = "email" placeholder = "Digite seu e-mail" required = "yes">
			</td>
		</tr>
		
		<tr>
			<td colspan = "2">
				<button type = "submit">OK</button>
			</td>
		</tr>
	</table>
	
</form>

</body>
</html>


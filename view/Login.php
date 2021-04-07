
<?php 
session_start();
session_destroy(); ?>

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
				<td colspan = "1" width = "25%">
					<button onclick = "window.location.href = '../view/Escolha_usuario.php'" >Voltar</button>
				</td>
				<td>
					<h1>Medicine CountDown</h1>
				</td>
			</tr>
		</table>


  	<form method = "post" action = "../controller/ControllerLogin.php">

		<table align = "center" border = 1% cellspacing = "25">
			<tr>
				<td colspan = "2">
					<h1>Login Médico</h1>
				</td>
			</tr>
			<tr>
				<td colspan = "2">
					<input size = 40% type = "email" name = "email" placeholder = "Digite seu e-mail" required = "yes" maxlength = "30">
				</td>
			</tr>
			<tr>
				<td colspan = "2">
					<input size = 40% type = "password" name = "senha" placeholder = "Digite sua senha" required = "yes" minlength = "4" maxlength = "16">
				</td>
			</tr>
			<tr>
				<td colspan = "2">
					<button type = "submit">
						Entrar
					</button>
				</td>
			</tr>

	</form>

			<tr>
				<td>
						<a href = "../view/Registro.php">
							Registre-se
						</a>		
				</td>
				<td>
						<a href = "../view/RecuperarSenha.php"> 
							Esqueci minha senha
						</a>					
				</td>
			</tr>
		</table>


</body>
</html>
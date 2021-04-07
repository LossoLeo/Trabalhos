<!DOCTYPE html>
<html>
<head>
	<title>
		MedicineCountDown
	</title>
	<link rel = "stylesheet" type = "text/css" href = "../css/estilo1.css" media = "screen"/>
</head>
<body>
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
	

	<?php 
		require_once("../conexao/conexao.php");
		$email = $_POST['email'];
		$resposta = $_POST['resposta'];

 		$sql="SELECT * FROM `medico` WHERE email = '$email'";



    	$con=$mysqli->query($sql) or die ($mysqli->error);


		

			if ($dado=$con->fetch_array()) {
			
			
				$resposta = $dado["resposta"];

			}
			else{
				header('Location: ../view/RecuperarSenha.php');
			}

			if ($resposta == $_POST['resposta']) {
				
				?>

				<form method = "post" action = "../controller/ControllerRecuperarSenha3.php">

	<table align = "center" border = 1% cellspacing = "10" width = "30%">
		<tr>
			<td colspan = "2">
				<h1>Recuperar Senha</h1>
			</td>
		</tr>
		
		<tr>
			<td colspan = "2">
				<input syze = 40% type = "password" name = "senha" placeholder = "Digite sua senha" required = "yes">
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input syze = 40% type = "password" name = "confirmarsenha" placeholder = "confirme sua senha" required = "yes">
			</td>
		</tr>
		<tr>
		<td colspan = "2">
				<input syze = 40% type = "hidden" name = "email" placeholder = "Digite sua resposta" required = "yes" value=<?php echo $email; ?>>
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<button type = "submit">
					OK
				</button> 
			</td>
		</tr>
	</table>

</form>


</body>
</html>

				<?php
			}else{
				header('Location: ../view/RecuperarSenha.php');
			}
	?>

	
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
			<button onclick = "window.location.href = '../view/LoginPac.php'" >Voltar</button>
		</td>
				<td colspan="1">
					<h1>Medicine CountDown</h1>
				</td>
			</tr>
		</table>
	<?php 
		require_once("../conexao/conexao.php");
		$email = $_POST['email'];

 		$sql="SELECT * FROM `paciente` WHERE email = '$email'";



    	$con=$mysqli->query($sql) or die ($mysqli->error);


		

			if ($dado=$con->fetch_array()) {
			
			
				$pergunta = $dado["pergunta"];

			}
			else{
				header('Location: ../view/RecuperarSenhaPac.php');
			}
	?>

	<form method = "post" action = "../controller/ControllerRecuperarSenhaPac2.php">

	<table align = "center" border = 1% cellspacing = "10" width = "30%">
		<tr>
			<td colspan = "2">
				<h1>Recuperar Senha</h1>
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<h1><?php echo $pergunta; ?></h1>
			</td>

		</tr>
		<tr>
			<td colspan = "">
				<input syze = 40% type = "text" name = "resposta" placeholder = "Digite sua resposta" required = "yes">
			</td>
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
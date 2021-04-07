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
			<button onclick = "window.location.href = '../view/PaginaInicial.php'" >Voltar</button>
		</td>
				<td colspan="1">
					<h1>Medicine CountDown</h1>
				</td>
			</tr>
		</table>

<form method="post" action="../controller/ControllerReceita.php">
	<table align = "left" border = "1%" cellspacing = "25">
		<tr>
			<td colspan = "3">
				<h1>Horário de tomar Remédio</h1>
			</td>
		</tr>
		<tr>
			<td colspan = "3">
				<input type = "text" name = "cpf" placeholder = "CPF do Paciente" required = "yes" minlength = "11" maxlength = "11">
			</td>
		</tr>
		<tr>
			<td colspan = "3">
				<input type = "text" name = "nome" placeholder = "Nome do remedio" required = "yes" maxlength = "100">
			</td>
		</tr>
		<tr>
			<td>
				<input type = "date" name = "inicioRemedio" required = "yes">
			</td>
			<td>
				<h4> até </h4>
			</td>
			<td>
				<input type = "date" name = "finalRemedio" required = "yes">
			</td>
		</tr>
		<tr>
			<td colspan = "3">
				<h4>Intervalo do Remédio</h4>
				<input type = "time" name = "intervalo" required = "yes">
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<button type="submit">Concluido</button>
			</td>
		</tr>
	</table>
</form>

<table align = "center" width = "50%" border = "1%" cellspacing = "20">
	<tr>
		<td>
			<h1>Receitas: </h1>
		</td>
	</tr>

	<?php 
		require_once("../conexao/conexao.php");

		$data=date('Y-m-d');
		$crm=$_SESSION['crm'];
	

 		$sql="SELECT * FROM `exame` where `crm`= '$crm' order by 2,3";



    	$con=$mysqli->query($sql) or die ($mysqli->error);


		

			while ($dado=$con->fetch_array()) {

				?>

				<tr>
					<td>
						<?php 


							echo $dado["cpf"];
							echo " ";
							echo $dado["nome"];
							echo " ";
							echo $dado["inicioRemedio"];
							echo " ";
							echo $dado["finalRemedio"];
							echo " ";
							echo $dado["intervalo"];
						 ?>
						 
					</td>
				</tr>
			
				<?php	

					}

				?>
	
</table>

</body>
</html>
<?php 
	}
	else{
		echo "Voce nao esta logado";
		header('Location: ../view/Login.php');
	}

 ?>
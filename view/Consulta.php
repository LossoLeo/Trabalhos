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

<form method = "post" action = "../controller/ControllerConsulta.php">
	<table align = "left" border = 1% cellspacing = "10" width = "30%" >
		<tr>
			<td colspan = "2">
				<h1>Marcar Consulta</h1>
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input type = "text" name = "nome" placeholder = "Nome do paciente" required = "yes" maxlength = "50">
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input type = "text" name = "sobrenome" placeholder = "Sobrenome do paciente" required = "yes" maxlength = "50">
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input syze = 40% type = "text" name = "cpf" placeholder = "00000000000" required = "yes" max = "99999999999" min = "00000000000" maxlength = "11" oninput = "maxLengthCheck(this)"> 

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
				<textarea cols = "50" rows = "5" wrap = "hard" placeholder = "Sobre a consulta" required = "yes" name="sobre" maxlength = "500"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input type = "date" name = "data" required = "yes">
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input type = "time" name = "horario" required = "yes">
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<button type = "submit">Concluido</button>
			</td>
		</tr>
	</table>
</form>

<table align = "center" width = "50%" border = "1%" cellspacing = "20">
	<tr>
		<td>
			<h1>Consultas marcadas:</h1>
		</td>
	</tr>

	<?php 
		require_once("../conexao/conexao.php");

		$data=date('Y-m-d');
		$crm=$_SESSION['crm'];
	

 		$sql= "SELECT * FROM `consulta` where `data` >=  '$data' and `crm`= '$crm' order by data DESC";



    	$con=$mysqli->query($sql) or die ($mysqli->error);


		

			while ($dado=$con->fetch_array()) {

				?>

				<tr align = "left">
					<td>Nome do Paciente = <?php echo $dado["nome"]; ?></td>
				</tr>
				<tr align = "left">
					<td>Data da consulta = <?php echo $dado["data"]; ?></td>
				</tr>
				<tr align = "left">
					<td>Horário da consulta = <?php echo $dado["horario"]; ?></td>
				</tr>
				<tr align = "left">
					<td>Sobre a consulta = <?php echo $dado["sobre"]; ?></td>
				</tr>
				<tr align = "left">
					<td>----------------------------------------------------------------------------------------------------------------</td>
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



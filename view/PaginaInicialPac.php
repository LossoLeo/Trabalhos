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

<body align = "center" onload = "inicializaRecarga()">

<table align = "center" width = "100%" border = "1%">
	<tr>
		<td>
			<h1 class = "h1R"><?php echo $_SESSION['nome']; echo " "; echo $_SESSION['sobrenome']; ?></h1>
		</td>
	</tr>
</table>


<table align = "left" border = "1%" width = "20%" cellspacing = "20">
	<tr>
		<td>
			<button onclick = "window.location.href = '../view/HistoricoPac.php'" >
				Histórico
			</button>
		</td>
	</tr>
	
	<tr>
		<td>
			<button onclick = "window.location.href = '../view/AtualizarDadosPac.php'" >
				Atualizar Dados
			</button>
		</td>
	</tr>
	<tr>
		<td>
			<button onclick = "window.location.href = '../view/LoginPac.php'" >
				Sair
			</button>
		</td>
	</tr>

</table>


<table align = "center" width = "50%" border = "1%" cellspacing = "20">
	<tr>
		<td>
			<h1>Consultas de hoje:</h1>
		</td>
	</tr>

	<?php 
		require_once("../conexao/conexao.php");

		date_default_timezone_set('America/Sao_Paulo');
		$data=date('Y-m-d');
		$cpf=$_SESSION['cpf'];
	

 		$sql="SELECT * FROM `consulta` where `data` = '$data' and `cpf`= '$cpf' order by 'ASC'";


    	$con=$mysqli->query($sql) or die ($mysqli->error);


			while ($dado=$con->fetch_array()) {

				?>

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
			header('Location: ../view/LoginPac.php');
	}

 ?>
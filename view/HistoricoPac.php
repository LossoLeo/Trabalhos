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


<table align = "center" border = "1%" cellspacing = "20" width = "60%">
	<tr>
		<td>
			<h1>Seu Histórico <?php echo $_SESSION['nome']; echo " "; echo $_SESSION['sobrenome']; ?></h1>
		</td>
	</tr>
	<?php 
		require_once("../conexao/conexao.php");

		$data=date('Y-m-d');
		$cpf=$_SESSION['cpf'];

 		$sql="SELECT * FROM `consulta` where `data` < '$data' and `cpf`= '$cpf' order by data DESC";



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
					<td>----------------------------------------------------------------------------------------------------------------------------------------</td>
				</tr>
				<br>


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

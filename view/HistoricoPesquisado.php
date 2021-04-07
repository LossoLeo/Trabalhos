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

<form method="post" action="../view/HistoricoPesquisado.php">
	<table  align = "left" border = "1%" cellspacing = "20" width = "25%">
	<tr>
		<td colspan = "2">
			<input type = "text" name = "busca" placeholder = "Pesquisar Paciente" required = "yes">
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<button type="submit">buscar</button>
		</td>
	</tr>
	
</table>
</form>

<table align = "center" border = "1%" cellspacing = "20">
	<tr>
		<td>
			<h1>Histórico do(a) Paciente Pesquisado(a):</h1>
		</td>
	</tr>
	<?php 
		require_once("../conexao/conexao.php");

		$data=date('Y-m-d');

		$busca=$_POST["busca"];

 		$sql="SELECT * FROM `consulta` where `data` < '$data' and `nome` like '%$busca%'  order by 2,3";



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
		header('Location: ../view/Login.php');
	}

 ?>

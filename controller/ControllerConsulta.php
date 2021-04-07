<?php 
	
	session_start();
	
	require_once("../model/consulta.php");
 ?>

	<?php 

		$con = new Consulta;
		$con->nome = $nome = $_POST["nome"];
		$con->sobrenome = $nome = $_POST["sobrenome"]; 
		$con->crm = $crm = $_SESSION["crm"];
		$con->data = $data = $_POST["data"];
		$con->horario = $horario = $_POST["horario"];
		$con->cpf = $cpf = $_POST["cpf"];
		$con->sobre = $sobre = $_POST["sobre"];
		

		
			$con->Registro($con);
	

	?>
	
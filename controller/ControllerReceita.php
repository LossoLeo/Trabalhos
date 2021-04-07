<?php 
	
	
	require_once("../model/receita.php");
 ?>

	<?php 

		$rec = new Receita;
		$rec->nome = $nome = $_POST["nome"];
		
		$rec->cpf = $cpf = $_POST["cpf"];
		$rec->inicioRemedio = $inicioRemedio = $_POST["inicioRemedio"];
		$rec->finalRemedio = $finalRemedio = $_POST["finalRemedio"];
		$rec->intervalo = $intervalo = $_POST["intervalo"];
		

		
			$rec->Registro($rec);
		
		
	?>
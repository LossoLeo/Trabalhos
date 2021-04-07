<?php 
	
	
	require_once("../model/medico.php");
 ?>

	<?php 

		$med = new Medico;
		$med->email = $email = $_POST["email"];
		$med->senha = $senha = $_POST["senha"];
		
			$med->Login($med);
		
	?>
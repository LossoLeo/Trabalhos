<?php 
	
	
	require_once("../model/paciente.php");
 ?>

	<?php 

		$pac = new Paciente;
		$pac->email = $email = $_POST["email"];
		$pac->senha = $senha = $_POST["senha"];
		
			$pac->LoginPac($pac);
		
	?>
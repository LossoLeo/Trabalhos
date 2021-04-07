<?php 
	
	
	require_once("../model/paciente.php");
 ?>

	<?php 

		$pac = new Paciente;
		$pac->email = $email = $_POST["email"];
		$pac->senha = $senha = $_POST["senha"];
		$pac->confirmarsenha = $confirmarsenha = $_POST["confirmarsenha"];
		if ($senha == $confirmarsenha) {
			$pac->AtualizarSenhaPac($pac);
		} else{
				header('Location: ../controller/ControllerRecuperarSenhaPac2.php');
		}
		
	?>
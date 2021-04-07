<?php 
	
	
	require_once("../model/medico.php");
 ?>

	<?php 

		$med = new Medico;
		$med->email = $email = $_POST["email"];
		$med->senha = $senha = $_POST["senha"];
		$med->confirmarsenha = $confirmarsenha = $_POST["confirmarsenha"];
		if ($senha == $confirmarsenha) {
			$med->AtualizarSenha($med);
		} else{
				header('Location: ../controller/ControllerRecuperarSenha2.php');
		}
		
	?>
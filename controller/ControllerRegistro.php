<?php 
	
	
	require_once("../model/medico.php");
 ?>

	<?php 

		$med = new Medico;
		$med->nome = $nome = $_POST["nome"];
		$med->sobrenome = $sobrenome= $_POST["sobrenome"];
		$med->telefone = $telefone = $_POST["telefone"];
		$med->crm = $crm = $_POST["crm"];
		$med->email = $email = $_POST["email"];
		$med->senha = $senha = $_POST["senha"];
		$med->confirmarsenha = $confirmarsenha = $_POST["confirmarsenha"];
		$med->pergunta = $pergunta = $_POST["pergunta"];
		$med->resposta = $resposta = $_POST["resposta"];

		if ($senha == $confirmarsenha) {
			$med->Registro($med);
		} else{
			header('Location: ../view/Registro.php');
		}
	?>
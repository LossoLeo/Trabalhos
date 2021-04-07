<?php 
	
	
	require_once("../model/paciente.php");
 ?>

	<?php 

		$pac = new Paciente;
		$pac->nome = $nome = $_POST["nome"];
		$pac->sobrenome = $sobrenome= $_POST["sobrenome"];
		$pac->telefone = $telefone = $_POST["telefone"];
		$pac->cpf = $cpf = $_POST["cpf"];
		$pac->endereco = $endereco = $_POST["endereco"];
		$pac->nomeMae = $nomeMae = $_POST["nomeMae"];
		$pac->dataNascimento = $dataNascimento = $_POST["dataNascimento"];
		$pac->email = $email = $_POST["email"];
		$pac->senha = $senha = $_POST["senha"];
		$pac->confirmarsenha = $confirmarsenha = $_POST["confirmarsenha"];
		$pac->pergunta = $pergunta = $_POST["pergunta"];
		$pac->resposta = $resposta = $_POST["resposta"];

		if ($senha == $confirmarsenha) {
			$pac->RegistroPac($pac);
		} else{
			header('Location: ../view/RegistroPac.php');
		}
	?>
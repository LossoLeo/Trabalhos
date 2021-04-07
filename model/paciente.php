<?php 

session_start();

 class Paciente
 {
 	

 		var $nome; 
		var $sobrenome;
		var $telefone; 
		var $cpf;
		var $endereco;
		var $nomeMae;
		var $dataNascimento;
		var $email; 
		var $senha; 
		var $confirmarsenha; 
		var $pergunta; 
		var $resposta; 
 	
 	function RegistroPac(Paciente $pac){

 		require_once("../conexao/conexao.php");

 		$sql="INSERT INTO `paciente` (`nome`, `sobrenome`, `telefone`, `cpf`, `dataNascimento`, `endereco`, `nomeMae`, `email`, `senha`, `confirmarsenha`, `pergunta`, `resposta`) VALUES ('$pac->nome', '$pac->sobrenome', '$pac->telefone', '$pac->cpf', '$pac->dataNascimento', '$pac->endereco', '$pac->nomeMae', '$pac->email', '$pac->senha', '$pac->confirmarsenha', '$pac->pergunta', '$pac->resposta')";


		$con=$mysqli->query($sql) or die ($mysqli->error);

		$_SESSION['nome'] = $pac->nome;
		$_SESSION['sobrenome'] = $pac->sobrenome;
		$_SESSION['telefone'] = $pac->telefone;
		$_SESSION['cpf'] = $pac->cpf;
		$_SESSION['endereco'] = $pac->endereco;
		$_SESSION['nomeMae'] = $pac->nomeMae;
		$_SESSION['dataNascimento'] = $pac->dataNascimento;
		$_SESSION['email'] = $pac->email;
		$_SESSION['senha'] = $pac->senha;
		$_SESSION['confirmarsenha'] = $pac->confirmarsenha;
		$_SESSION['pergunta'] = $pac->pergunta;
		$_SESSION['resposta'] = $pac->resposta;

		header('Location: ../view/PaginaInicialPac.php');


 	}
 	function LoginPac(Paciente $pac){

 		require_once("../conexao/conexao.php");

 		$sql="SELECT * FROM `paciente` WHERE email = '$pac->email' and senha = '$pac->senha'";



    	$con=$mysqli->query($sql) or die ($mysqli->error);


		

			if ($dado=$con->fetch_array()) {
			
				$_SESSION['nome'] = $dado["nome"];
				$_SESSION['sobrenome'] = $dado["sobrenome"];
				$_SESSION['telefone'] = $dado["telefone"];
				$_SESSION['cpf'] = $dado["cpf"];
				$_SESSION['endereco'] = $dado["endereco"];
				$_SESSION['nomeMae'] = $dado["nomeMae"];
				$_SESSION['dataNascimento'] = $dado["dataNascimento"];
				$_SESSION['email'] = $dado["email"];
				$_SESSION['senha'] = $dado["senha"];
				$_SESSION['confirmarsenha'] = $dado["confirmarsenha"];
				$_SESSION['pergunta'] = $dado["pergunta"];
				$_SESSION['resposta'] = $dado["resposta"];

				header('Location: ../view/PaginaInicialPac.php');

			}
			else{
				
				header('Location: ../view/LoginPac.php');
			}

	}

 	function AtualizarDadosPac(Paciente $pac){

 		require_once("../conexao/conexao.php");


 		$sql="INSERT INTO `paciente` (`nome`, `sobrenome`, `telefone`, `cpf`, `dataNascimento`, `endereco`, `nomeMae`, `email`, `senha`, `confirmarsenha`, `pergunta`, `resposta`) VALUES ('$pac->nome', '$pac->sobrenome', '$pac->telefone', '$pac->cpf', '$pac->dataNascimento', '$pac->endereco', '$pac->nomeMae', '$pac->email', '$pac->senha', '$pac->confirmarsenha', '$pac->pergunta', '$pac->resposta')";


		$con=$mysqli->query($sql) or die ($mysqli->error);

		$_SESSION['nome'] = $pac->nome;
		$_SESSION['sobrenome'] = $pac->sobrenome;
		$_SESSION['telefone'] = $pac->telefone;
		$_SESSION['cpf'] = $pac->cpf;
		$_SESSION['endereco'] = $pac->endereco;
		$_SESSION['nomeMae'] = $pac->nomeMae;
		$_SESSION['dataNascimento'] = $pac->dataNascimento;
		$_SESSION['email'] = $pac->email;
		$_SESSION['senha'] = $pac->senha;
		$_SESSION['confirmarsenha'] = $pac->confirmarsenha;
		$_SESSION['pergunta'] = $pac->pergunta;
		$_SESSION['resposta'] = $pac->resposta;

		header('Location: ../view/PaginaInicialPac.php');
	}

	function AtualizarSenhaPac(Paciente $pac){

 		require_once("../conexao/conexao.php");

 		$sql="UPDATE `paciente` SET `senha`='$pac->senha' WHERE `email`='$pac->email'";

		$con=$mysqli->query($sql) or die ($mysqli->error);

		$sql="SELECT * FROM `paciente` WHERE email = '$pac->email' and senha = '$pac->senha'";



    	$con=$mysqli->query($sql) or die ($mysqli->error);


		

			if ($dado=$con->fetch_array()) {
			
				$_SESSION['nome'] = $dado["nome"];
				$_SESSION['sobrenome'] = $dado["sobrenome"];
				$_SESSION['telefone'] = $dado["telefone"];
				$_SESSION['cpf'] = $dado["cpf"];
				$_SESSION['endereco'] = $dado["endereco"];
				$_SESSION['nomeMae'] = $dado["nomeMae"];
				$_SESSION['dataNascimento'] = $dado["dataNascimento"];
				$_SESSION['email'] = $dado["email"];
				$_SESSION['senha'] = $dado["senha"];
				$_SESSION['confirmarsenha'] = $dado["confirmarsenha"];
				$_SESSION['pergunta'] = $dado["pergunta"];
				$_SESSION['resposta'] = $dado["resposta"];

				header('Location: ../view/PaginaInicialPac.php');

			}

		
	}

 } ?>
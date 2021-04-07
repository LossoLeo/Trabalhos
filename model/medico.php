<?php 

session_start();

 class Medico
 {
 	

 		var $nome; 
		var $sobrenome;
		var $telefone; 
		var $crm; 
		var $email; 
		var $senha; 
		var $confirmarsenha; 
		var $pergunta; 
		var $resposta; 
 	
 	function Registro(Medico $med){

 		require_once("../conexao/conexao.php");

 		$sql="INSERT INTO `medico` (`nome`, `sobrenome`, `telefone`, `crm`, `email`, `senha`, `pergunta`, `resposta`) VALUES ('$med->nome', '$med->sobrenome', '$med->telefone', '$med->crm', '$med->email', '$med->senha', '$med->pergunta', '$med->resposta')";

		$con=$mysqli->query($sql) or die ($mysqli->error);

		$_SESSION['nome'] = $med->nome;
		$_SESSION['sobrenome'] = $med->sobrenome;
		$_SESSION['telefone'] = $med->telefone;
		$_SESSION['email'] = $med->email;
		$_SESSION['crm'] = $med->crm;
		$_SESSION['pergunta'] = $med->pergunta;
		$_SESSION['resposta'] = $med->resposta;
		$_SESSION['senha'] = $med->senha;

		header('Location: ../view/PaginaInicial.php');


 	}
 	function Login(Medico $med){

 		require_once("../conexao/conexao.php");

 		$sql="SELECT * FROM `medico` WHERE email = '$med->email' and senha = '$med->senha'";



    	$con=$mysqli->query($sql) or die ($mysqli->error);


		

			if ($dado=$con->fetch_array()) {
			
				$_SESSION['nome'] = $dado["nome"];
				$_SESSION['sobrenome'] = $dado["sobrenome"];
				$_SESSION['telefone'] = $dado["telefone"];
				$_SESSION['email'] = $dado["email"];
				$_SESSION['crm'] = $dado["crm"];
				$_SESSION['pergunta'] = $dado["pergunta"];
				$_SESSION['resposta'] = $dado["resposta"];
				$_SESSION['senha'] = $dado["senha"];

				header('Location: ../view/PaginaInicial.php');

			}
			else{
				
				header('Location: ../view/Login.php');
			}

	}

 	function AtualizarDados(Medico $med){

 		require_once("../conexao/conexao.php");

 		$crmAntigo = $_SESSION['crm'];

 		$sql="UPDATE `medico` SET `nome`='$med->nome',`sobrenome`='$med->sobrenome',`telefone`='$med->telefone',`crm`='$med->crm',`email`='$med->email',`senha`='$med->senha',`resposta`='$med->resposta',`pergunta`='$med->pergunta' WHERE `crm`='$crmAntigo'";

		$con=$mysqli->query($sql) or die ($mysqli->error);

		$_SESSION['nome'] = $med->nome;
		$_SESSION['sobrenome'] = $med->sobrenome;
		$_SESSION['telefone'] = $med->telefone;
		$_SESSION['email'] = $med->email;
		$_SESSION['crm'] = $med->crm;
		$_SESSION['pergunta'] = $med->pergunta;
		$_SESSION['resposta'] = $med->resposta;
		$_SESSION['senha'] = $med->senha;

		header('Location: ../view/PaginaInicial.php');
	}

	function AtualizarSenha(Medico $med){

 		require_once("../conexao/conexao.php");

 		$sql="UPDATE `medico` SET `senha`='$med->senha' WHERE `email`='$med->email'";

		$con=$mysqli->query($sql) or die ($mysqli->error);

		$sql="SELECT * FROM `medico` WHERE email = '$med->email' and senha = '$med->senha'";



    	$con=$mysqli->query($sql) or die ($mysqli->error);


		

			if ($dado=$con->fetch_array()) {
			
				$_SESSION['nome'] = $dado["nome"];
				$_SESSION['sobrenome'] = $dado["sobrenome"];
				$_SESSION['telefone'] = $dado["telefone"];
				$_SESSION['email'] = $dado["email"];
				$_SESSION['crm'] = $dado["crm"];
				$_SESSION['pergunta'] = $dado["pergunta"];
				$_SESSION['resposta'] = $dado["resposta"];
				$_SESSION['senha'] = $dado["senha"];

				header('Location: ../view/PaginaInicial.php');

			}

		
	}

 } ?>
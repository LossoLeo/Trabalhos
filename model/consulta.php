<?php 


 class Consulta
 {
 	

 		var $nome; 
 		var $sobrenome;
		var $data;
		var $horario; 
		var $cpf; 
		var $sobre; 
		var $crm; 
 	
 	function Registro(Consulta $con){

 		require_once("../conexao/conexao.php");

 		$sql="INSERT INTO `consulta`(`nome`, `sobrenome`, `data`, `horario`, `cpf`, `sobre`, `crm`) VALUES ('$con->nome', '$con->sobrenome', '$con->data', '$con->horario','$con->cpf','$con->sobre','$con->crm')";

		$con=$mysqli->query($sql) or die ($mysqli->error); 

		header('Location: ../view/PaginaInicial.php');

	}

	function AtualizarConsulta(Consulta $con){

 		require_once("../conexao/conexao.php");

 		$crmAntigo = $_SESSION['crm'];

 		$sql="UPDATE `consulta` SET `nome`='$con->nome',`sobrenome`='$con->sobrenome',`data`='$con->data',`horario`='$con->horario', `sobre`='$con->sobre' WHERE cpf = '$con->cpf' and crm = '$crmAntigo'";


		$con=$mysqli->query($sql) or die ($mysqli->error);

		header('Location: ../view/PaginaInicial.php');
	}

}

?>
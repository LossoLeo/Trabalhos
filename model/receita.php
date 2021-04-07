<?php 

session_start();

 class Receita
 {
 	

 		 
		var $crm; 
		var $cpf; 
		var $nomeRemedio; 
		var $inicioRemedio; 
		var $finalRemedio; 
		var $intervalo; 
		 
 	
 	function Registro(Receita $rec){

 		require_once("../conexao/conexao.php");

 		$crm=$_SESSION['crm'];

 		$sql="INSERT INTO `exame`(`nome`, `crm`, `inicioRemedio`, `finalRemedio`, `intervalo`, `cpf`) VALUES ('$rec->nome','$crm','$rec->inicioRemedio','$rec->finalRemedio','$rec->intervalo','$rec->cpf')";

		$con=$mysqli->query($sql) or die ($mysqli->error);

		header('Location: ../view/PaginaInicial.php');


 	}

 }
 
 ?>
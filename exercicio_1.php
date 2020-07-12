<?php
    /*Questão 1: Ler um número inteiro entre 1 e 12 e escrever o semestre correspondente ao mês. Caso o número seja
fora desse intervalo, informar que não existe mês com este número.*/

	$numero = $_POST["numero"];
	
	if ($numero >= 1 and $numero < 7 ){
		echo "Você digitou o número $numero e este corresponde a um mês do primeiro semestre.";		
	}elseif($numero >= 7 and $numero <= 12){
		echo "Você digitou o número $numero e este corresponde a um mês do segundo semestre.";	
	}else{
		echo "O número $numero não corresponde a nenhum mês.";
	}
	echo "<hr>";

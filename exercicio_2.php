<?php
    /*Questão 2: Ler um número inteiro entre 1 e 12 e escrever o trimestre correspondente ao mês. Caso o número seja
fora desse intervalo, informar que não existe mês com este número.*/
    
    $num = $_POST["num"];

    if ($num >= 1 and $num < 4){
	    echo "Você digitou o $num que corresponde a um mês do primerio trimestre.";
	}elseif($num >= 4 and $num < 7){
		echo "Você digitou o $num que corresponde a um mês do segundo trimestre.";
	}elseif($num >= 7 and $num < 10){
		echo "Você digitou o $num que corresponde a um mês do terceiro trimestre.";	
	}elseif($num >= 10 and $num <= 12){
		echo "Você digitou o $num que corresponde a um mês do quarto trimestre.";		
	}else{
		echo "O número $num não corresponde a nenhum mês.";
	}	
	echo "<hr>";
<?php
		/*Questão 4: Construir um script em PHP que leia 2 números e efetue a adição entre eles. Apresentar o resultado na
tela, incluindo se este número é par ou ímpar.*/

    $x = $_POST["x"];
	$y = $_POST["y"];
	$s = $x + $y;
	if($s % 2 == 0){
		echo "O resultado da soma é $s que é um número par. ";		
	}else{
		echo "O resultado da soma é $s que é um número ímpar.";
	}
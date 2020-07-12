<?php
    /*Questão 3: Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25
anos, imprimir a mensagem: FULANO, VOCÊ FOI ACEITA. Caso contrário, imprimir a mensagem: FULANO, TENTE
NOVAMENTE NA PRÓXIMA*/

    $nome = $_POST["nome"];
	$genero = $_POST["genero"];
	$idade = $_POST["idade"];
	
		if($genero == "feminino" and ($idade > 0 and $idade <= 25)){
		echo "$nome, você foi aceita.";	
	}else{
		echo "$nome, você não foi aceito(a).";
	}
	echo "<hr>";
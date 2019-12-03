<?php
//Usa $_POST para pegar as informações digitadas no formulário.

    $login = $_POST['nome'];

    $senha = $_POST['senha'];

//Irá comparar as informações que foram digitadas no formulário com o login e senha corretos que estão no formulário.

    if( $login != bomdia || $senha != pravc ) {

//Se for difirente, retonar a mensagem:

    echo "Login e senha incorretos";

//Se for iguais os dados, corretos, aparece a página:

    }else{

    

            $para = "roxelly.tavares@gmail.com";
			$assunto = "Site - Diego, Roxelly, Eliude";
			$nome = $_REQUEST['nome'];
			$telefone = $_REQUEST['telefone'];
			$email = $_REQUEST['email'];

		$corpo="<strong> Nosso site </strong><br><br>";
		$corpo .= "https://auladoclaudio.000webhostapp.com/";
				
		$header = "Content-Type: text/html; charset = utf-8\n";
		
		
		
mail($para,$assunto,$corpo,$header);

echo "<p align=center>$nome, sua mensagem foi enviada com sucesso!</p>";
}

?>
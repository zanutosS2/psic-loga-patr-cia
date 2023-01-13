<?php
if(isset($_POST['email']) && !empty(|$_POST['email'])){

    $nome = addcslashes($_POST['name'])
    $sobrenome = addcslashes($_POST['sobrenome'])
    $email = addcslashes($_POST['email'])
    $escrever = addcslashes($_POST['escrever'])

    $to = "matzanelli11@gmail.com";
    $subject = "Contato - Teste zanelli "
    $body = "Nome: "$nome. "\n"
            "Sobrenome: "$sobrenome. "\n". 
            "Email: "$email. "\n". 
            "Mensagem: ".$mensagem;
    $header = "From:matzanelli11@gmail.com"."\r\n"."Reply-To:".$email. "\e\n" ."x=mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){
        echo("Email enviado com sucesso!");
    }else{
        echo(" O Email não pode ser enviado!")
    }
}

?>
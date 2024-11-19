<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="stylestyle.css">
</head>
<body>
    <header> Obrigada por seu contato!

    </header>
    <main>
        <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"] ?? '';
        $email = $_POST["email"] ?? '';
        $telefone = $_POST["telefone"] ?? '';
        $mensagem = $_POST["mensagem"] ?? '';
    

        $to = "aliencruzbarbosa@gmail.com";
        $subject = "Contato - Site Transforma";
        $body = "Nome: $nome\n";
        $body .= "E-mail: $email\n";
        $body .= "Telefone: $telefone\n";
        $body .= "Mensagem: $mensagem\n";
    
        $header = "From: aliencruz.jogos@gmail.com\r\n";
        $header .= "Reply-To: $email\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
    
 
        if (mail($to, $subject, $body, $header)) {
            echo "Email enviado com sucesso!";
        } else {
            echo "Email não pode ser enviado.";
        }
    }
    ?>
    


 ?>
        
    </main>
</body>
</html>
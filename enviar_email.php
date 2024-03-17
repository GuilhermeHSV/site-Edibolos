<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "gustavolsantos2022@gmail.com";
    $subject = "Novo contato pelo site Edi Bolos";
    $message = "Nome: " . $_POST['Nome'] . "\n";
    $message .= "Email: " . $_POST['Email'] . "\n";
    $message .= "Telefone: " . $_POST['Telefone'] . "\n";
    $message .= "Mensagem: " . $_POST['Mensagem'] . "\n";

    // Utilize o cabeçalho a seguir para garantir que o email seja enviado com a formatação correta
    $headers = "From: webmaster@example.com" . "\r\n" .
    "Reply-To: webmaster@example.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    // Envia o email
    mail($to, $subject, $message, $headers);

    // Redireciona de volta para a página de contato
    header("Location: contato.php?enviado=sim");
    exit();
} else {
    // Se alguém tentar acessar este script diretamente, redireciona para a página de contato
    header("Location: contato.php");
    exit();
}
?>

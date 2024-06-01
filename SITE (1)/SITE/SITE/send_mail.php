<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    $to = $email;
    $subject = "Mensagem do Formulário de Contato";
    $body = "Olá $nome,\n\nVocê recebeu a seguinte mensagem:\n\n$mensagem";
    $headers = "From: marcoskingone@hotmail.com\r\n";
    $headers .= "Reply-To: marcoskingone@hotmail.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Método de solicitação inválido.";
}
?>


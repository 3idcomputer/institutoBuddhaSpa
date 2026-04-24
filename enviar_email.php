<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Se estiver usando Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome     = htmlspecialchars($_POST['nome']);
    $email    = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    $mail = new PHPMailer(true);

    try {
        // Configurações do Gmail SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'joaoalansilva@gmail.com';             // Seu Gmail
        $mail->Password   = 'pqeormjpybcaetrb';        // Senha de app do Gmail
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Remetente e destinatário
        $mail->setFrom('joaoalansilva@gmail.com', 'Instituto Buddha Spa');
        $mail->addAddress('joao.silva@buddhaspa.com.br');  // Destinatário

        // Conteúdo do email
        $mail->isHTML(false);
        $mail->Subject = 'Novo contato do site';
        $mail->Body    = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nMensagem:\n$mensagem";

        $mail->send();
        echo 'Mensagem enviada com sucesso!';
    } catch (Exception $e) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
}
?>
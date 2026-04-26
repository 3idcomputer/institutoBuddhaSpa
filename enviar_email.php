<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json; charset=utf-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
require __DIR__ . '/PHPMailer/src/Exception.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'erro',
        'mensagem' => 'Requisição inválida.'
    ]);
    exit;
}

$nome     = trim($_POST['nome'] ?? '');
$email    = trim($_POST['email'] ?? '');
$telefone = trim($_POST['telefone'] ?? '');
$mensagem = trim($_POST['mensagem'] ?? '');
$site     = trim($_POST['site'] ?? '');

if (!empty($site)) {
    echo json_encode([
        'status' => 'erro',
        'mensagem' => 'Mensagem bloqueada por segurança.'
    ]);
    exit;
}

if (empty($nome) || empty($email) || empty($telefone) || empty($mensagem)) {
    echo json_encode([
        'status' => 'erro',
        'mensagem' => 'Preencha todos os campos.'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'status' => 'erro',
        'mensagem' => 'Informe um e-mail válido.'
    ]);
    exit;
}

$mail = new PHPMailer(true);

try {
    $mail->CharSet = 'UTF-8';

    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'contatoforminstitutobuddhaspa@gmail.com';
    $mail->Password   = 'mzjqkfcwnhykgilk';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('contatoforminstitutobuddhaspa@gmail.com', 'Contato Instituto Buddha Spa');
    $mail->addAddress('amanda.teixeira@buddhaspa.com.br');
    $mail->addReplyTo($email, $nome);

    $mail->isHTML(true);
    $mail->Subject = 'Novo contato pelo site - Instituto Buddha Spa';

    $mail->Body = "
        <h2>Novo contato recebido pelo site</h2>

        <p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>
        <p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>
        <p><strong>Telefone:</strong> " . htmlspecialchars($telefone) . "</p>

        <p><strong>Mensagem:</strong></p>
        <p>" . nl2br(htmlspecialchars($mensagem)) . "</p>

        <hr>
        <small>Mensagem enviada pelo formulário do site Instituto Buddha Spa.</small>
    ";

    $mail->AltBody = "
Nome: {$nome}
E-mail: {$email}
Telefone: {$telefone}

Mensagem:
{$mensagem}
    ";

    $mail->send();

    echo json_encode([
        'status' => 'sucesso',
        'mensagem' => 'Mensagem enviada com sucesso! Em breve entraremos em contato.'
    ]);
    exit;

} catch (Exception $e) {
    echo json_encode([
        'status' => 'erro',
        'mensagem' => 'Erro ao enviar mensagem: ' . $mail->ErrorInfo
    ]);
    exit;
}

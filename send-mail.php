<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(array('success' => false, 'message' => 'Nieprawidlowa metoda.'));
    exit;
}

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if (empty($name) || empty($email) || empty($message)) {
    echo json_encode(array('success' => false, 'message' => 'Wypelnij wymagane pola.'));
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(array('success' => false, 'message' => 'Nieprawidlowy adres email.'));
    exit;
}

require_once __DIR__ . '/includes/Mailer.php';

$mailer = new Mailer();

if (empty($subject)) {
    $subject = 'Wiadomosc z portfolio od ' . $name;
}

$result = $mailer->send($email, $name, $subject, $message);

echo json_encode($result);

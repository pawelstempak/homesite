<?php
/**
 * Klasa Mailer - wysylanie e-maili przez SMTP
 */

class Mailer {
    private $smtpHost;
    private $smtpPort;
    private $smtpUser;
    private $smtpPass;
    private $fromEmail;
    private $fromName;
    private $toEmail;
    private $encryption;

    public function __construct() {
        $this->smtpHost   = 'h39.seohost.pl';
        $this->smtpPort   = 465;
        $this->smtpUser   = 'formularz@pawelstempak.pl';
        $this->smtpPass   = 'Ohn3phae123#ttjgd';
        $this->encryption = 'ssl';
        $this->fromEmail = 'formularz@pawelstempak.pl';
        $this->fromName  = 'Portfolio - Pawel Stempak';
        $this->toEmail   = 'pawelstempak@gmail.com';
    }

    public function send($from, $sender, $subject, $message) {
        return $this->sendSmtp($from, $sender, $subject, $message);
    }

    private function sendSmtp($from, $sender, $subject, $message) {
        try {
            $host = $this->encryption === 'ssl' ? 'ssl://' . $this->smtpHost : $this->smtpHost;
            $socket = @fsockopen($host, $this->smtpPort, $errno, $errstr, 30);

            if (!$socket) {
                return array('success' => false, 'message' => "Blad polaczenia SMTP: $errstr ($errno)");
            }

            $this->smtpRead($socket);
            $this->smtpCommand($socket, "EHLO " . gethostname());

            if ($this->encryption === 'tls') {
                $this->smtpCommand($socket, "STARTTLS");
                stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
                $this->smtpCommand($socket, "EHLO " . gethostname());
            }

            $this->smtpCommand($socket, "AUTH LOGIN");
            $this->smtpCommand($socket, base64_encode($this->smtpUser));
            $this->smtpCommand($socket, base64_encode($this->smtpPass));

            $this->smtpCommand($socket, "MAIL FROM:<{$this->fromEmail}>");
            $this->smtpCommand($socket, "RCPT TO:<{$this->toEmail}>");

            $this->smtpCommand($socket, "DATA");

            $body = $this->buildHtmlBody($sender, $from, $subject, $message);
            $headers = "MIME-Version: 1.0\r\n"
                . "Content-Type: text/html; charset=UTF-8\r\n"
                . "From: {$this->fromName} <{$this->fromEmail}>\r\n"
                . "Reply-To: {$sender} <{$from}>\r\n"
                . "To: {$this->toEmail}\r\n"
                . "Subject: =?UTF-8?B?" . base64_encode($subject) . "?=\r\n"
                . "Date: " . date('r') . "\r\n";

            fwrite($socket, $headers . "\r\n" . $body . "\r\n.\r\n");
            $this->smtpRead($socket);

            $this->smtpCommand($socket, "QUIT");
            fclose($socket);

            return array('success' => true, 'message' => 'Wiadomosc zostala wyslana.');
        } catch (Exception $e) {
            if (isset($socket)) fclose($socket);
            return array('success' => false, 'message' => 'Blad SMTP: ' . $e->getMessage());
        }
    }

    private function smtpCommand($socket, $command) {
        fwrite($socket, $command . "\r\n");
        $this->smtpRead($socket);
    }

    private function smtpRead($socket) {
        $response = '';
        while ($line = @fgets($socket, 512)) {
            $response .= $line;
            if (isset($line[3]) && $line[3] === ' ') break;
        }
        return $response;
    }

    private function buildHtmlBody($sender, $from, $subject, $message) {
        $msg = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
        $snd = htmlspecialchars($sender, ENT_QUOTES, 'UTF-8');

        return '<!DOCTYPE html>
<html lang="pl">
<head><meta charset="UTF-8"></head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background: linear-gradient(135deg, #6c63ff, #e34f26); padding: 20px; border-radius: 8px 8px 0 0;">
        <h1 style="color: #fff; margin: 0; font-size: 1.5rem;">Nowa wiadomosc z portfolio</h1>
    </div>
    <div style="background: #f9f9f9; padding: 20px; border: 1px solid #ddd; border-top: none; border-radius: 0 0 8px 8px;">
        <p><strong>Od:</strong> ' . $snd . ' (' . $from . ')</p>
        <p><strong>Temat:</strong> ' . $subject . '</p>
        <hr style="border: none; border-top: 1px solid #ddd; margin: 15px 0;">
        <p>' . $msg . '</p>
    </div>
</body>
</html>';
    }
}

<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'vendor/autoload.php';
    require 'config/config.php';

    if (!isset($_POST['g-recaptcha-response'])) {
        $_SESSION['form_status'] = ['success' => false, 'message' => 'reCAPTCHA verification failed.'];
        header('Location: index.php?page=contact');
        exit();
    }

    $recaptcha_secret = RECAPTCHA_SECRET_KEY;
    $recaptcha_response = $_POST['g-recaptcha-response'];

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_data = [
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response,
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($recaptcha_data),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($recaptcha_url, false, $context);
    $result_json = json_decode($result, true);

    if (!$result_json['success']) {
        $_SESSION['form_status'] = ['success' => false, 'message' => 'reCAPTCHA verification failed.'];
        header('Location: index.php?page=contact');
        exit();
    }

    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        $_SESSION['form-status'] = ['success' => false, 'message' => t('Please fill out all fields correctly.')];
        header('Location: index.php?page=contact');
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'zahidrizkyfakhri@gmail.com';
        $mail->Password   = 'yapykfnvkmtdpzlf';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom($email, $name);
        $mail->addAddress('zahidrizkyfakhri@gmail.com', 'Zahid Fakhri');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = sprintf(t('New Contact Form Submission from %s'), $name);
        $mail->Body    = sprintf(
            t("You have received a new message from your website contact form.<br><br><b>Name:</b> %s<br><b>Email:</b> %s<br><br><b>Message:</b><br>%s"),
            $name,
            $email,
            nl2br($message)
        );
        $mail->AltBody = sprintf(
            t("Name: %s\nEmail: %s\n\nMessage:\n%s"),
            $name,
            $email,
            $message
        );

        $mail->send();

        $_SESSION['form-status'] = ['success' => true, 'message' => t('Thank you! Your message has been sent.')];
        header('Location: index.php?page=contact');
        exit();
    } catch (Exception $e) {
        $_SESSION['form-status'] = ['success' => false, 'message' => sprintf(t("Sorry, the message could not be sent. The Mailer sent an error of the following: %s"), $mail->ErrorInfo)];
        header('Location: index.php?page=contact');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}

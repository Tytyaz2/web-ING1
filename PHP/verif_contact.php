<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure le fichier autoload.php de Composer
require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if (!$nom || !$email || !$message || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?error=formcontactinvalide");
        exit();
    }

// Créer une instance de PHPMailer
$mail = new PHPMailer(true);

try {
    // Paramètres SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tankpomme@gmail.com';
    $mail->Password = 'tankpomme1234';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Paramètres de l'e-mail
    $mail->setFrom('tankpomme@gmail.com', 'tankpomme');
    $mail->addAddress('gabrielbrossat@gmail.com', 'Gabriel');
    $mail->Subject = 'Sujet de l\'e-mail';
    $mail->Body = 'Salut, cest pour te dire que ton abonnement pornhub est permie pense a le reprendre sinon tu vas tennuyer la nuit tous seul';

    // Envoyer l'e-mail
    $mail->send();
    echo 'L\'e-mail a été envoyé avec succès.';
} catch (Exception $e) {
    echo 'Une erreur s\'est produite lors de l\'envoi de l\'e-mail : ', $mail->ErrorInfo;
}

    header("Location: ../index.php");
    exit();
}
?>

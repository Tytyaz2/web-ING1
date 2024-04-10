<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Inclure le fichier autoload.php de Composer
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    //verifier si tous les champs sont entrés et que c'est bien une adresse email qui est rentré
    if (!$nom || !$email || !$message || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../web-ING2/index.php?error=formcontactinvalide");
        exit();
    }

// Créer une instance de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Paramètres SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'votre_adresse_email@example.com';
        $mail->Password = 'votre_mot_de_passe';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Paramètres de l'e-mail
        $mail->setFrom('votre_adresse_email@example.com', 'Votre Nom');
        $mail->addAddress('adresse_email_destinataire@example.com', 'Nom du destinataire');
        $mail->Subject = 'Sujet de l\'e-mail';
        $mail->Body = 'Contenu du message';

        // Envoyer l'e-mail
        $mail->send();
        echo 'L\'e-mail a été envoyé avec succès.';
    } catch (Exception $e) {
        echo 'Une erreur s\'est produite lors de l\'envoi de l\'e-mail : ', $mail->ErrorInfo;
    }
    header("Location: ../index.php");
    exit();

}
header("Location: ../index.php");
?>

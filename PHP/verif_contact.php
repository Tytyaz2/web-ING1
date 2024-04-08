<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if (!$nom || !$email || !$message || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?error=formcontactinvalide");
        exit();
    }

    $to = "martinssoa@cy-tech.fr";
    $subject = "Nouveau message de $nom";
    $body = "Nom: $nom\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";
    $headers = "From: soares.flavio2002@gmail.com";

    $mail_sent = mail($to, $subject, $message, $headers);

    header("Location: ../index.php");
    exit();
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date_contact = $_POST["dateContact"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $genre = $_POST["genre"];
    $dateN = $_POST["dateDeNaissance"];
    $metier = $_POST["metier"];
    $message = $_POST["message"];
    $sujet = $_POST["sujet"];

    // Vérification des champs et de l'e-mail
    if (!$nom || !$email || !$message || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?error=formcontactinvalide");
        exit();
    } else {
        // Inclusion du fichier autoload de PHPMailer
        require '../vendor/autoload.php';

        // Création d'une instance de PHPMailer
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        // Paramètres SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Adresse du serveur SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'tankpomme9@gmail.com'; // Votre adresse e-mail
        $mail->Password = 'jhkm kyiz pqry vrrv'; // Votre mot de passe
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587; // Port SMTP (587 est le port TLS)

        // Paramètres de l'e-mail
        $mail->setFrom('tankpomme9@gmail.com', 'pommestore');
        $mail->addAddress('gabrielbrossat@gmail.com', 'Mr Brossat');
        $mail->Subject = $sujet;
        $mail->Body = $nom ." ". $prenom . " né le " . $dateN . " exerçant le métier de ".$metier." souhaite prendre contact avec vous le ". $date_contact . " en vous transmettant le message suivant : ".$message;

        // Envoi de l'e-mail
        if ($mail->send()) {
            header("Location: ../../web-ING2/index.php?mailenvoye");
            exit();
        } else {
            echo 'Erreur lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>

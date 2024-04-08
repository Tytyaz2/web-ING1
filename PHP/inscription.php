<?php
$filePath = 'users.json';
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$confirm_password = $_POST['confirm_password'];

if ($password !== $confirm_password) {
    echo "Les mots de passe ne correspondent pas. Veuillez réessayer.";
    header('Location: ../index.php?error=password');
} else {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $data = json_decode(file_get_contents($filePath), true);

    foreach ($data as $user) {
        if ($user['email'] === $email) {
            header('Location: ../index.php?error=mailexiste');
            exit;
        }
        else if ($user['username'] === $username) {
            header('Location: ../index.php?error=utilisateurdejapris');
            exit;
        }
    }

    $data[] = ['email' => $email, 'username' => $username, 'password' => $hashedPassword];
    file_put_contents($filePath, json_encode($data, JSON_PRETTY_PRINT));
    header('Location: ../index.php');
}

?>


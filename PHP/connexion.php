

<?php
session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $filePath = 'users.json';
        $data = json_decode(file_get_contents($filePath), true);

        $found = false;
        foreach ($data as $user) {
            if ($user['email'] === $email || $user['username'] === $email) {
                $found = true;
                if (password_verify($password, $user['password'])) {
                    $_SESSION['username'] = $user['username'];
                    header("Location: ../index.php");
                } else {
                    header("Location: ../index.php?error=motdepasseincorrect");
                }
                exit;
            }
        }
        header("Location: ../page_inscription.inc.php?error=mailexistepas");
        exit;
    }
?>

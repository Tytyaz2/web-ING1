<link rel="stylesheet" href="../CSS/form_connexion_inscription.css">
<form method='post' action='PHP/inscription.php'>
            <label for='email'></label><input type='email' class="input" id='email' placeholder='email' name='email' resuired>
            <label for='username'></label><input class="input" type='text' id='username'' placeholder='username' name='username' required>
            <label for='password'></label><input class="input" type='password' id='password' placeholder='password' name='password' required>
            <label for='confirm_password'></label><input autocomplete="off" class="input" type='password' id='confirm_password' placeholder='confirm_password' name='confirm password' required>
            <input type='submit' id='submit_inscription' value="S'inscrire">
        </form>
<form method='post' action='index.php'>
    <input type='submit' id='submit_connexion' value='Se connecter' >
</form>

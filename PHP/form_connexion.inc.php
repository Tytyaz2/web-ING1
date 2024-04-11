<link rel="stylesheet" href="../CSS/form_connexion.css">
<div id="connexion" >
<form method="post" action="PHP/connexion.php">
                <label for="email"></label><input type="text" id="email" placeholder="email/username" name="email" required>
                <label for="password"></label><input type="password" id="password" placeholder="password" name="password" required>
                <input type="submit" id="submit_connexion" value="se connecter">
            </form>
            <form method="post" action="index.php?error=mailexistepas">
                <input type="submit" id="submit_inscription" value="inscription" >
            </form>
</div>
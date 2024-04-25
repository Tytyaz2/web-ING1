<link rel="stylesheet" href="../CSS/form_connexion_inscription.css">
<div id="connexion" >
<form method="post" action="PHP/connexion.php">
                <label for="email"></label><input autocomplete="off" class="input" type="text" id="email" placeholder="email/username" name="email" required>
                <label for="password"></label><input autocomplete="off" class="input" type="password" id="password" placeholder="password" name="password" required>
                <input type="submit" id="submit_connexion" value="se connecter">
            </form>
            <form method="post" action="../web-ING2/index.php?forminscription">
                <input type="submit" id="submit_inscription" value="inscription" placeholder="text">
            </form>
</div>



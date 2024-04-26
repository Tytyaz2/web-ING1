<?php
$file = fopen("data/Panier.csv", "r") or die ("Unable to open file"); //on ouvre le fichier panier
$price = 0;
$nbrproduit = 0;
echo "<link rel='stylesheet' href='../CSS/panier.css'> <div class='tablepanier'><table class='tablepanier' >";

while (!feof($file)) {
    $line = fgets($file);
    if(strlen($line)){ //on récupère chacune des lignes afin de construire la page panier
        $idpwd = explode(";", $line);

        echo "<tr>"; //on construit le tableau avec l'image, le nom et le prix
                            
        echo "<td><a  href='/IMAGE/".$idpwd[0].".png' target='_blank'><img class='image' src='/IMAGE/".$idpwd[0].".png' alt='".$idpwd[0].".png')></a></td>";
        echo "<td><p>".$idpwd[0]."</p></td>";
        echo "<td><p>Prix : ".$idpwd[2]."€</p></td>";
        echo "<td><button id = '".$idpwd[0]."' onclick = 'removepanier(this.id)'> X </button></td><br>";
        echo "</tr>";
                            
        $price = $price + (int)$idpwd[2]*$idpwd[1];
        $nbrproduit = $nbrproduit + $idpwd[1];
    }
                        

                        
    }
echo "</table>";
echo "<br><form method='post'><p>Vous avez ".$nbrproduit." article dans votre panier.<br>Somme totale = ".$price."€<p>"; //affiche le nombre d'articles et le prix total hors taxe
echo "<br><p>Voulez-vous valider votre panier ?<p>";
echo '<input type="submit" name="bouton" value="Cliquez ici">
    </form></div>';

    if(isset($_POST['bouton'])) {
        // Afficher une alerte JavaScript
        echo "<script>alert('Votre panier est validé !!');</script>";
        
        // Rediriger vers une autre page après 3 secondes
        echo "<script>setTimeout(function(){ window.location.href = '../web-ING2/index.php'; }, 1);</script>";
    }
    

?>
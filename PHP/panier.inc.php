<?php
$file = fopen("data/Panier.csv", "r") or die ("Unable to open file"); //on ouvre le fichier panier
$price = 0;
$nbrproduit = 0;
echo "<table style='margin-top:100px'>";

while (!feof($file)) {
    $line = fgets($file);
    if(strlen($line)){ //on récupère chacune des lignes afin de construire la page panier
        $idpwd = explode(";", $line);
                            
        echo "<tr>"; //on construit le tableau avec l'image, le nom et le prix
                            
        echo "<td><a href='/IMAGE/".$idpwd[0].".png' target='_blank'><img src='/IMAGE/".$idpwd[0].".png' alt='".$idpwd[0].".png'style='height:130px; width:190px')></a></td>";
        echo "<td><p>".$idpwd[0]."</p></td>";
        echo "<td><p>Prix : ".$idpwd[2]."€</p></td>";
        echo "<td><button id = '".$idpwd[0]."' onclick = 'removepanier(this.id)'> X </button></td><br><br>";
        echo "</tr>";
                            
        $price = $price + (int)$idpwd[2]*$idpwd[1];
        $nbrproduit = $nbrproduit + $idpwd[1];
    }
                        

                        
    }
echo "</table>";
echo "<br><p>Vous avez ".$nbrproduit." article dans votre panier.<br>Somme totale = ".$price."€<p>"; //affiche le nombre d'articles et le prix total hors taxe
?>
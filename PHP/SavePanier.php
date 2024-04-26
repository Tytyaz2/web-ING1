<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<body>
    

<?php  //on ouvre le fichier panier
            try {
                $str = $_POST["str"];
                $dbh = new PDO('mysql:host=127.0.0.1;port=3306;dbname=PommeStore', 'root', "");
    
                $sql = "SELECT prix,nom,stock FROM produit WHERE nom=('$str')";
                $resultat = $dbh->query($sql);
                $row = $resultat->fetch(PDO::FETCH_ASSOC);

                $file2 = fopen("../data/Panier.csv", "a") or die ("Unable to open file");

                $tmp = $row['stock'] - $_POST["nbrarticles"];
                $bdd = "UPDATE produit SET stock = ('$tmp') WHERE nom=('$str')";
                $stmt = $dbh->prepare($bdd);
                $stmt->execute();

                
                $text = $row["nom"].";".$_POST["nbrarticles"].";".$row["prix"].";"."
";
                fwrite($file2, $text);
                
                fclose($file2);

                header('Location: ../web-ING2/index.php');
    
                $dbh = null;
                }catch (PDOException $e) {
                    echo "Erreur: ".$e->getMessage()."<br/>";
                    die();
                }
            


              
          
            
?>

</body>
</html>
 <?php //Connexion à la BDD
$dsn = 'mysql:host=localhost;dbname=Portfolio;charset=utf8';
try {
 
    $pdo = new PDO($dsn, 'root' , '');
    
    }
    catch (PDOException $exception) {
     
     exit('Erreur de connexion à la base de données');
    }
?>

    <?php //Ecriture des commentaires
    $req = $bdd->prepare('INSERT INTO commentaires(prenom, nom, mail, message) VALUES(:prenom, :nom, :mail, :message)');
    $req->execute(array(
        'nom' => $nom,
        'prenom' => $possesseur,
        'mail' => $console,
        'message' => $message
        ));
    
    echo 'Le comentaire a bien été ajouté !';
    ?>

<?php //Lecture des commentaires
    $query = $pdo->query("SELECT * FROM `commentaires` LIMIT 0, 5"); //Query SQL

  while($query = $query->fetch())
  {
        ?>
        <div class="wrapper-commentaire">
            <p>Prénom : <?php echo $query['prenom'] ?></p>
            <p>Nom : <?php echo $query['nom'] ?></p>
            <p>E-mail : <?php echo $query['mail'] ?></p>
            <p>Commentaire : <?php echo $query['message'] ?></p>
        </div>
            <?php
  }

?> 


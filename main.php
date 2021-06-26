 <?php //Connexion à la BDD
$dsn = 'mysql:host=localhost;dbname=Portfolio;charset=utf8';
try {
 
    $pdo = new PDO($dsn, 'root' , '');
    
    }
    catch (PDOException $exception) {
     
     exit('Erreur de connexion à la base de données');
    }
?>
<!-- 
 <?php
        //Ecriture des commentaires
$req = $pdo->prepare('INSERT INTO commentaires (prenom, nom, mail, message) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['prenom'], $_POST['nom'], $_POST['mail'], $_POST['message']));
     
     echo 'Le comentaire a bien été ajouté !';
    // Redirection du visiteur vers le PortFolio
     header('Location: index.php#commentaires');
?>  -->

<?php //Lecture des commentaires
    $query = $pdo->query("SELECT * FROM `commentaires` ORDER BY id DESC LIMIT 0, 5"); //Query SQL

  while($data = $query->fetch())
  {
        ?>
        <div class="wrapper-commentaire">
            <p>Prénom : <?php echo $data['prenom'] ?></p>
            <p>Nom : <?php echo $data['nom'] ?></p>
            <p>E-mail : <?php echo $data['mail'] ?></p>
            <p>Commentaire : <?php echo $data['message'] ?></p>
        </div>
            <?php
  }

?> 


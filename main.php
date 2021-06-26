 <?php
$dsn = 'mysql:host=localhost;dbname=tp-dev;charset=utf8';
try {
 
    $pdo = new PDO($dsn, 'root' , '');
    
    }
    catch (PDOException $exception) {
     
    //  mail('VOTRE_EMAIL', 'PDOException', $exception->getMessage());
     exit('Erreur de connexion à la base de données');
    }


    $query = $pdo->query("SELECT message FROM `message`");

    $resultat = $query->fetchAll();
    echo json_encode($resultat);
?> 

        <div class="form">
            <h1>Déposer un commentaire</h1>
    <form method="post" action="post.php">.
        <div class="col-1">
            
            <input type="text"  id="nom" name="nom" placeholder="Nom"  />
            <input type="text"  id="prenom" name="prenom" placeholder="prénom" />
            <input type="text"  id="mail" name="mail" placeholder="Mail" />
         </div>
         <div class="col-2">
            <input type="text"  id="message" name="message" placeholder="Message" />       
            <input type="submit" value="Envoyer" />
        </div>
        </form>
    
    </div>

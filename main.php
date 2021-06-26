 <?php
$dsn = 'mysql:host=localhost;dbname=Portfolio;charset=utf8';
try {
 
    $pdo = new PDO($dsn, 'root' , '');
    
    }
    catch (PDOException $exception) {
     
     exit('Erreur de connexion à la base de données');
    }

    $query = $pdo->query("SELECT * FROM `commentaires`");

    $resultat = $query->fetchAll();
    echo json_encode($resultat);
?> 


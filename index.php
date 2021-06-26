<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="reset.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Le PortFolio de Julien Massé</title>
</head>
<body>

<header>
    <nav>
        <div class="logo">
        <img src="images/logoJMtest.jpg" height="80px"></img>
        </div>
        <ul>
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="#biographie">Biographie</a></li>
            <li><a href="#competences">Compétences</a></li>
            <li><a href="#realisations">Réalisations</a></li>
            <li><a href="#commentaires">Commentaires</a></li>
        </ul>
    </nav>
</header>

<main>
    <section>
        <div id="accueil">
            <h1 class="bienvenue">Bienvenue sur mon PortFolio</h1>
        </div>
    </section>
    
    <section>
        <div id="biographie">
            <h1 class="title">
                Biographie
            </h1>
            <div class="contenu-biographie">
                Je suis actuellement étudiant en Sup De Web 3 (SDW3) de 24ans à Angouleme, qui forme au métier de chef de projet web. Et je travail à SolocalMS en Alternance. 
                <button class="CV"> <a target="_blank" href="https://pdfhost.io/v/h.LhPA6Lw_Julien_Mass.pdf"> Consulter Mon CV </a></button> 
            <img src="images/profil_picture.jpg">
            </div>
        </div>
    </section>

    <section>
        <div id="competences">
            <h1 class="title">
                Competences
            </h1>
            <div class="slider">
                <figure>
                    <img src="images/HTML.png"></img>
                    <img src="images/CSS.png" ></img>
                    <img src="images/JS.png" ></img>
                    <img src="images/PHP.png" ></img>
                    <img src="images/PY.png" ></img>
                    <img src="images/PS.png" ></img>
                    <img src="images/ILL.png" ></img>                
                </figure>
            </div>
        </div>
    <section>

    <section>
        <div id="realisations">
            <h1 class="title">
                realisations
            </h1>
            <div class="wrapper">
                <figure>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaUZMbfBcvrHifx398SaQct_dtVfGSaPD1ee6lBOGPSlRc4Q90yvJhWTRQopKON7yrMi0&usqp=CAU"
                         alt="Elephant at sunset">
                    <figcaption>Mon premier projet</figcaption>
                </figure>
                <figure>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaUZMbfBcvrHifx398SaQct_dtVfGSaPD1ee6lBOGPSlRc4Q90yvJhWTRQopKON7yrMi0&usqp=CAU"
                         alt="Elephant at sunset">
                    <figcaption>Mon 2eme projet</figcaption>
                </figure>
                <figure>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaUZMbfBcvrHifx398SaQct_dtVfGSaPD1ee6lBOGPSlRc4Q90yvJhWTRQopKON7yrMi0&usqp=CAU"
                         alt="Elephant at sunset">
                    <figcaption>Mon 3eme projet</figcaption>
                </figure>
                <figure>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaUZMbfBcvrHifx398SaQct_dtVfGSaPD1ee6lBOGPSlRc4Q90yvJhWTRQopKON7yrMi0&usqp=CAU"
                         alt="Elephant at sunset">
                    <figcaption>Mon 4eme projet</figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section>
        <div id="commentaires">
            <h1 class="title">
                commentaires
            </h1>
        <?php  include('config.php'); ?>

        </div>
    </section>
    <button onclick="backToTop()" id="backToTopBTN" title="Retour en haut !">∧</button>
</main>
    <footer>
        <p>&copy Portfolio de Julien Massé - 2021</p>
    </footer>

    
    <script src="main.js"></script>
</body>
</html>
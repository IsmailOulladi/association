<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo_sport">
        <img src="images/Capture.png">
        </div>
        <div class="logo">
            <p><span>Association</span>Sportive</p>
        </div>
        <ul class="menu">
            <li><a href="#home">Acceuil</a></li>
            <li><a href="#liste">Listes</a></li>
            <li><a href="login.php">Deconnexion</a></li>
        </ul>

        <!-- menu responsive -->
        <div class="toggle_menu"></div>
    </header>

    <!-- section acceuil home -->

    <section id="home">
        <div class="left">
            <h4>Bienvenue</h4>
            <h1>ADMIN</h1>
         
        </div>
        <div class="right">
            <img src="images/img1.png">
        </div>
    </section>
    <div class="sous_titre titre">
        <h2 class="titre-texte"><span>L</span>es listes des adhérents</h2>
        <p>Voici les liste de tout nos adhérents !</p>
    </div>
    <section class="expert" id="liste">
        
        <div class="categorie">
            <div class="contenu">
                <div class="box">
                    <div class="imbox">
                      <button class="as3"><a href="foot.php">Football</a></button>  
                    </div>
                    <div class="text branche">
                        <h3></h3>
                    </div>
                </div>
            </div>

                <div class="contenu">
                    <div class="box">
                        <div class="imbox">
                        <button class="as3"><a href="hand.php">Handball</a></button>  
                        </div>
                        <div class="text branche">
                            <h3></h3>
                        </div>
                    </div>
                </div>
        
                <div class="contenu">
                    <div class="box">
                        <div class="imbox">
                            <button class="as3"><a href="basket.php">Basketball</a></button>  
                        </div>
                        <div class="text branche">
                            <h3></h3>
                        </div>
                    </div>
                </div>
        </div>
        <div class="categorie">
            <div class="contenu">
                <div class="box">
                    <div class="imbox">
                        <button class="as3"><a href="judo.php">Judo</a></button>  
                    </div>
                    <div class="text">
                        <h3></h3>
                    </div>
                </div>
            </div>
            <div class="contenu">
                <div class="box">
                    <div class="imbox">
                        <button class="as3"><a href="karate.php">Karaté</a></button>  
                    </div>
                    <div class="text">
                        <h3></h3>
                    </div>
                </div>
            </div>
            <div class="contenu">
                <div class="box">
                    <div class="imbox">
                        <button class="as3"><a href="mma.php">MMA</a></button>  
                    </div>
                    <div class="text">
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
               
    </section>
    
    
</body>
</html>
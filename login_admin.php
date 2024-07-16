<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icons css -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Login</title>
</head>

<body>
    
    <header>
        <h1><span>A</span>ssociation sportif </h1>
    </header>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Connexion</span>
                <form method="POST" action="admin.php">
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Entrer votre email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="mot_de_passe" placeholder="Entrer votre mot de passe" required>
                        <i class="uil uil-lock icon"></i>
                        
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logcheck">
                            <label for="logcheck" class="text">S'est souvenu de moi</label>
                        </div>
                        <a href="#" class="text">mot de passe oublier ?</a>
                    </div>
                    <div class="logiin button input-field">
                       <a href="user.html"><button name="connexion"><input type="button" value="Connexion" name="connexion">Connexion</button></a> 
                    </div>
                </form>     
            </div>
        </div>
    </div>
</body>
</html>

<?php
session_start();
    if(isset($_POST['Connexion'])){

        // nous allons vérifier les informations du formulaire

        if( !empty($_POST['email']) && !empty($_POST['mot_de_passe'])){ // on vérifie ici si l'utiliateur a rentré des informations
            $email_par_defaut = "menhourmohamed2003@gmail.com";
            $mot_de_passe_par_defaut = "menhourmohamed";
            
            $email_saisi = htmlspecialchars($_POST['email']);
            $mot_de_passe_saisi = htmlspecialchars($_POST['mot_de_passe']);
            if($email_saisi ==$email_par_defaut && $mot_de_passe_saisi == $mot_de_passe_par_defaut){
                $_SESSION['mot_de_passe'] = $mot_de_passe_saisi;
                header("location:admin.php");
            }
            else{
                echo "votre mot de passe ou email incorrect";
            }
        
        }
    }
?>
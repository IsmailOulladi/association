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
                <form method="POST" action="user.html">
                    <div class="input-field">
                        <input type="email" id="email" name="email" placeholder="Entrer votre email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password" placeholder="Entrer votre mot de passe" required>
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
                        <button name="connexion"><input type="button" value="Connexion" name="connexion">Connexion</button></a> 
                    </div>
                </form>    
                    <div class="login-signup">
                        <span class="text">vous n'avez pas un compte
                            <a href="inscription.php" class="text signup-text signup-link">Créer un compte</a>
                        </sapn>
                    </div> 
                    <div class="login-signup">
                        <span class="text">Vous etes un admin? connecter par
                            <a href="login_admin.php" class="text signup-text signup-link">ici</a>
                        </span>
                    </div>    
        

            </div>   
    <script src="script.js"></script>
</body>
</html>
<?php
$host = 'localhost' ;
$user = 'root' ;
$mot_de_passe = '' ;
$db = 'association' ;
$connect = mysqli_connect($host,$user,$mot_de_passe,$db) ;
$connecter = "SELECT * from user" ;
$email = '' ;
$mot_de_passe = '' ;
if(isset($_POST['add'])){
    $un = $_POST['email'] ;
    $pw = $_POST['mot_de_passe'] ;
    $sql = mysqli_query($connect,"SELECT mot_de_passe from user where email='$un'");
    while( $row = mysqli_fetch_array($sql)){
        if($pw==$row['mot_de_passe']){
            header('Location: user.html ');
            exit();
        }
        else
            echo "<script>alert('invalid password')</script>";
    }
}
    //else 
      //  echo "<script>alert('invalid email')</script>"  ; 

?>
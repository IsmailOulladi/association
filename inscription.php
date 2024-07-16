<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- section inscription -->
<section id="inscription">
        <h4 class="mini_title">Inscription</h4>
        <h2 class="title"> Veuillez inscrire</h2>
        <form action="" method="POST">
            <label for="nom"> Nom</label>
            <input id="nom" name="nom" type="text" required placeholder="votre nom" onblur="check_first_name();">
            <span id="msg_error_nom" style="visibility:hidden;">La première lettre doit être en majuscule, les autres en miniscules</span>
            
            <label for="prenom"> Prenom</label>
            <input id="prenom" name="prenom" type="text" required placeholder="votre prenom" onblur="check_last_name();">
            <span id="msg_error_prenom" style="visibility:hidden;">La première lettre doit être en majuscule, les autres en miniscules</span>
            
            <label> Email</label>
            <input id="email" name="email" type="email" required placeholder="votre mail">
            
            <label> Mot de passe</label>
            <input id="pwd" name="mot_de_passe" type="password" required placeholder="votre mot de passe">
            
            <label> Age</label >
            <input id="age" name="age" type="number" min="1" required>
            
            <label> Adresse</label>
            <input id="adresse" name="adresse" type="text" required placeholder="votre adresse">
            
            <label> Sport</label>
            <div class="checkbox">
                <input type="checkbox" name="sport" value="football"/> <label>football </label>
                <input type="checkbox" name="sport" value="mma"/> <label>mma </label>
                <input type="checkbox" name="sport" value="basketball"/> <label>basketball </label>
                <input type="checkbox" name="sport" value="judo"/> <label>judo </label>
                <input type="checkbox" name="sport" value="handball"/> <label>handball </label>
                <input type="checkbox" name="sport" value="karate"/> <label>karaté </label>
            </div>
            <input name="add" type="submit" value="Inscrire">
            
        </form>
        <div class="login-signup">
                <span class="text">vous avez un compte ?
                    <a href="login.php" class="text signup-text signup-link">Connexion</a>
                </sapn>
        </div>  
      </section>
</body>
</html>

<?php
    // les info de notre bdd
    $host = 'localhost' ;
    $user = 'root' ;
    $pass = '' ;
    $db = 'association' ;
    $connect = mysqli_connect($host,$user,$pass,$db) ;
    // create les colone variable de la bdd
    $nom = '' ;
    $prenom = '' ;
    $email = '' ;
    $mot_de_passe = '';
    $age = '';
    $adresse = '';
    $sport = '' ;
   
    if(isset($_POST['nom'])){
        $nom= $_POST['nom'] ;
    }
    if(isset($_POST['prenom'])){
        $prenom= $_POST['prenom'] ;
    }
    if(isset($_POST['email'])){
        $email= $_POST['email'] ;
    }
    if(isset($_POST['mot_de_passe'])){
        $mot_de_passe= $_POST['mot_de_passe'] ;
    }
    if(isset($_POST['age'])){
        $age= $_POST['age'] ;
    }
    if(isset($_POST['adresse'])){
        $adresse= $_POST['adresse'] ;
    }
    if(isset($_POST['sport'])){
        $sport= $_POST['sport'] ;
    }
    
    // la requete insert
    $sqlins='' ;
    if(isset($_POST['add'])){
        $sqlins="insert into user(nom,prenom,email,mot_de_passe,age,adresse,sport) value('$nom','$prenom','$email','$mot_de_passe','$age','$adresse','$sport')" ;
        mysqli_query($connect,$sqlins) ;
        // refreach la page
        header("location: user.html") ;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/liste.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Adhérents en Basketball</title>
</head>
<body>
<?php
    // les info de notre bdd
    $host = 'localhost' ;
    $user = 'root' ;
    $pass = '' ;
    $db = 'association' ;
    $connect = mysqli_connect($host,$user,$pass,$db) ;
    $res = mysqli_query($connect," SELECT * from user WHERE sport LIKE 'basketball' ORDER BY nom") ;
    // create les colone variable de la bdd
    $id = '' ;
    $nom = '' ;
    $prenom = '' ;
    $age = '' ;
    if(isset($_POST['id'])){
        $id= $_POST['id'] ;
    }
    if(isset($_POST['nom'])){
        $nom= $_POST['nom'] ;
    }
    if(isset($_POST['prenom'])){
        $prenom= $_POST['prenom'] ;
    }
    if(isset($_POST['age'])){
        $age= $_POST['age'] ;
    }
    ?>
    <div id="container">
        <form method='POST'>        
            <!--afficher la liste -->
            <main>
            <div class="pym">
                     </div>
                <table id="table">
                    <h2 class="titre"><span>L</span>iste des Adhérents en Basketball<span></span>:</h2>
                    <tr>
                        <th>ID Adhérent</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($res)) {
                        echo "<tr>" ;
                        echo "<td>".$row['id']."</td>" ;
                        echo "<td>".$row['nom']."</td>" ;
                        echo "<td>".$row['prenom']."</td>" ;
                        echo "<td>".$row['age']."</td>" ;
                        echo "</tr>" ;
                    }
                    ?>
                </table>         
            </main>   
        </form>
    </div>   
</body>
</html>
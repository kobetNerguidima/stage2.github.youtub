<?php
    if (isset($_POST["nom"]) &&isset($_POST["email"]) &&isset($_POST["message"])) {
        $nom=$_POST["nom"];
        $email=$_POST["email"];
        $message=$_POST["message"];

        $host="localhost";
        $user="root";
        $pwd="";
        $db="universite";
        $con=mysqli_connect($host,$user,$pwd,$db);
        if (!$con) {
            die("Error connexion ...".mysqli_connect_error());
        }
        $req="INSERT INTO valider(nom,email,message)VALUES('$nom','$email','$message')";
        if (mysqli_query($con,$req)) {
            echo"<h2>enregistrement a été effectué avec succès</h2>";
        }
    }
?>
<a href="javascript:history.back()">Essayez à nouveau</a><br>
<a href="opinions.php">Voir les autres opinions</a>



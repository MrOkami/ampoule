<?php
ob_start();

$email_valide = "admin@admin.com";
$mot_de_passe_valide = "admin15##";


if(isset($_POST['email']) && !empty($_POST['email'])  && isset($_POST['password']) && !empty($_POST['password'])){

    if($email_valide == $_POST['email'] && $mot_de_passe_valide  == $_POST['password']){
        session_start();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header("Location:http://localhost/ampoule/listeAmpoule.php");
    }else{
        echo "<p class='alert-danger p-3'>Erreur votre email ou mot de passe sont invalide ou des sont vide</p>";
        echo "<a href='index.php' class='btn btn-danger'>Retour</a>";
    }
}else{
    echo "<p class='alert-warning p-3'> ERREUR : Merci de renter un email et mot de passe valide ou de remplir tous les champ</p>";
    echo "<a href='index.php' class='btn btn-danger'>Retour</a>";
}

//$content de template.php definis ce qui ce trouve dans le body
//Retourne le contenu du tampon de sortie et termine la session de temporisation.
//Si la temporisation n'est pas activée, alors false sera retourné.
$content = ob_get_clean();
//Rappel du template sur chaque page
require "template.php";
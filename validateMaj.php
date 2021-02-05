<?php



//Met les en-tete, temporairement en memoire tampon
ob_start();

//Connexion BDD
$user = "root";
$pass = "";
//teste de co
try {
    //stockage et instance PDO pour connect php et mySQL
    $db = new PDO("mysql:host=localhost;dbname=ecommerce;charset=utf8", $user, $pass);
    //debub static PDO en cas d'erreur. Affiche les tableaux orange, jaune et rouge si il y a une erreur.
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p style='color:#4285F4'>PDO-SQL connecter !</p>";
} catch (PDOException $exception) {
    die("Erreur de connexion PDO-SQL : " . $exception->getMessage());
}


if (isset($_POST['date_changement']) && !empty($_POST['date_changement'])) {
    $date_changement = ($_POST['date_changement']);
} else {
    echo "<p class='alert-danger'>Erreur, merci de remplir le champ nom du produit</p>";
}


if (isset($_POST['etage']) && !empty($_POST['etage'])) {
    $etage = ($_POST['etage']);
} else {
    echo "<p class='alert-danger'>Erreur, merci de remplir le champ nom du produit</p>";
}

if (isset($_POST['position_ampoule']) && !empty($_POST['position_ampoule'])) {
    $position_ampoule = ($_POST['position_ampoule']);
} else {
    echo "<p class='alert-danger'>Erreur, merci de remplir le champ nom du produit</p>";
}

if (isset($_POST['prix_ampoule']) && !empty($_POST['prix_ampoule'])) {
    $prix_ampoule = ($_POST['prix_ampoule']);
} else {
    echo "<p class='alert-danger'>Erreur, merci de remplir le champ nom du produit</p>";
}

$sql = "UPDATE ampoules SET date_changement = ?, etage = ?, position_ampoule = ?, prix_ampoule = ? WHERE id_ampoule = ?";
$maj = $db->prepare($sql);

$maj->bindParam(1, $date_changement);
$maj->bindParam(2, $etage);
$maj->bindParam(3, $position_ampoule);
$maj->bindParam(4, $prix_ampoule);

$id_maj = $_GET['maj_id'];
$result_maj = $maj->execute(array($date_changement, $etage, $position_ampoule, $prix_ampoule, $id_maj));

if ($result_maj) {
    header("Location:http://localhost/ampoule/listeAmpoule.php");

} else {
    echo "<p class='alert-danger p-2'>Une erreur c'est produite !</p>";
    echo "<a class='btn btn-danger' href='listeAmpoule.php'>Retour a la liste des opérations</a>";
}

//$content de template.php définis ce qui ce trouve dans le body
//Retourne le contenu du tampon de sortie et termine la session de temporisation.
//Si la temporisation n'est pas activée, alors false sera retourné.
$content = ob_get_clean();
//Rappel du template sur chaque page
require "template.php";
?>
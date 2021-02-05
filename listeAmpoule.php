<?php
session_start();
//$title est lier au titre du head.
$title = "Projet Ampoule";

ob_start();


//connexion PDO
$user = 'root';
$pass = "";

//Connexion à la BDD.
try {
    //host + db name + encoding + user and pass
    $db = new PDO("mysql:host=localhost;dbname=ecommerce;charset=utf8", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $exception){
    die("Erreur de connexion PDO-SQL : " . $exception->getMessage());
}
?>


    <section>
        <h1 class="text-info text-center">OpérationAmpoule.com</h1>
        <div class="container s1">
            <?php
            include "ajouterAmpoule.php";
            ?>
        </div>
    </section>


<?php
//Query sql
$sql = "SELECT * FROM ampoules ORDER BY date_changement DESC";
$result = $db-> query($sql);
?>
<div class="jumbotron">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Date de changement</th>
                <th scope="col">Etage</th>
                <th scope="col">Position de l'ampoule</th>
                <th scope="col">Prix</th>
                <th scope="col">Détails</th>
                <th scope="col">Editer</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>

        <!--Appel des $row + nom de l'objet de la table produits-->
        <tbody>

<?php
//Boucle de lecture (connexion = $db + fonction query() PDO + requ?te SQL = $row)
foreach ($result as $row) {
    $date_formater = new DateTime($row['date_changement']);


?>

        </thead>
        <tbody>

        <tr class="table-secondary">
            <td><?= $date_formater->format('d/m/Y'); ?></td>
            <td><?= $row['etage'] ?></td>
            <td><?= $row['position_ampoule'] ?></td>
            <td><?= $row['prix_ampoule'] ?> €</td>


<!---------------------------------------------Detail de l'ampoule-------------------------------->
        <td>
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#detailsAmpoule<?= $row['id_ampoule'] ?>">
                Détails
            </button>
            <?php
            include "detailsAmpoule.php";
            ?>


        </td>

<!----------------------------------MISE A JOUR AMPOULE---------------------------------------------------------->
        <td>

            <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#majAmpoule<?= $row['id_ampoule'] ?>">
                Editer
            </button>
            <?php
            include "majAmpoule.php";
            ?>

        </td>

<!-----------------------------------------------SUPPRESSION AMPOULE-------------------------------------------------->
        <td>

            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteAmpoule<?= $row['id_ampoule'] ?>">
                Supprimer
            </button>

            <div class="modal fade" id="deleteAmpoule<?= $row['id_ampoule'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Supprimer l'opération <?= $row['id_ampoule'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <a href="deleteAmpoule.php?id=<?= $row['id_ampoule'] ?>" class="btn btn-info">SUPPRIMER L'OPÉRATION</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </td>

</tr>

<?php
}
?>


        </tbody>
    </table>
</div>
<?php

$content = ob_get_clean();
require "template.php";
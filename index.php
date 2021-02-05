<?php
$title = "Projet ampoule";
ob_start();
?>
    <h1 class="text-danger text-center">Projet Ampoule</h1>
    <div class="text-center" id="login-form">
        <form action="connect.php" method="post">
            <!----------------------------------------EMAIL----------------------------->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email" required>
            </div>

            <!------------------------------------------PASSWORD---------------------------------->
            <div class="form-group">
                <label for="password">Votre mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-outline-info mt-5">CONNEXION</button>
        </form>

    </div>

<?php

$content = ob_get_clean();
require "template.php";

<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-center">
    <a class="navbar-brand" href="listeAmpoule">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Liste Ampoules
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://www.silamp.fr/culot-ampoule">Type d'ampoules</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://www.thebusinessplanshop.com/fr/blog/ouvrir-une-conciergerie">Type de concierge</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://amzn.to/3aDsJ7Z">Commander des Ampoules</a>
            </li>
        </ul>
        <p id="move" class="text-info text-center">Espace d'administration : Bonjour Admin. </p>
        <div class="text-center">

            <?php
            if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                ?>
                <a href="disconnect.php" id="btn" class="btn btn-danger">Deconnexion</a>
                <?php
            }
            ?>
    </div>
</nav>
<link rel="stylesheet" href="css/styles.css">
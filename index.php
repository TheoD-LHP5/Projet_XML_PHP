<?php

require_once "controller_index.php";

if (isset($_GET["page"])) {
    $recupGet = $_GET["page"];
    $menu = intval($recupGet);
} else {
    $menu = 0;
}
?>

<!doctype html>
<html lang="fr">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div>

        <nav class="navbar navbar-expand-lg navbar-light bg-secondary sticky-top">
            <a class="navbar-brand maconOcordoTitle">Maçonnerie Ocordo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="accueil.html"><?= $XML->page[0]->menu ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="qui-sommes-nous.html"><?= $XML->page[1]->menu ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nos-clients-temoignent.html"><?= $XML->page[2]->menu ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"><?= $XML->page[3]->menu ?></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">

            <?php
            echo $XML->page[$menu]->content;
            ?>
        </div>
    </div>

    <footer class="position-sticky mt-5">
        <p class="text-center pt-4">Copyright: @TeamLaManu Théo, Céline et Antonin</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
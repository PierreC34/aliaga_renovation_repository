<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://bootswatch.com/5/sandstone/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= URL ?>public/css/style.css">
</head>

<body>
    <header class="sticky-top">

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarColor01">
                <a class="nav-link active text-warning accueil text-warning" href="<?= URL ?>accueil">Accueil</a>
                <a class="nav-link active activite text-warning" href="<?= URL ?>photo">Photo</a>
                <a class="nav-link active service text-warning" href="<?= URL ?>service">Service</a>
                <a class="nav-link active contact text-warning" href="<?= URL ?>contact">Contact</a>
            </div>
            <!-- <form class="form-inline form-recherche">
                <input class="form-control form-area" type="search" placeholder="Recherche..." aria-label="Search">
                <button class="btn btn-outline-warning button-recherche" type="submit">Rechercher</button>
            </form> -->
        </nav>
    </header>

    <div class="container">
        <?= $content ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>

</html>
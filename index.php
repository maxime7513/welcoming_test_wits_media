<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <title>Generator</title>
</head>
<body>
    <header class="w-100 bg-dark text-white">
        <a class="fs-3 ms-5 p-3 text-reset text-decoration-none" href="index.php">Generator</a>
    </header>
    <div class="d-sm-flex flex-row-reverse align-items-center justify-content-around px-3 px-sm-5 py-5 mx-3">
        <img src="assets/images/team.jpg" alt="image représentant l'équipe" class="w-75 rounded" style="min-width:300px;">
        <div class="me-3">
            <h2 class="text-primary fs-1 mt-3" style="font-family: 'Lobster', cursive;">Utilisez notre superbe générateur !</h2>
            <p class="fs-5">Créez facilement deux équipes de deux joueurs.</p>
            <p class="fw-light">Ce générateur bénéficie d'un algorithme de tri super puissant mais ne donne aucun super skills aux joueurs !</p>
            <a class="btn btn-white text-primary border border-primary rounded p-3" data-bs-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse" onClick="setTimeout(ancre, 500);">
            Découvrir <i class="fas fa-arrow-down"></i></a>
        </div>
    </div>

    <div class="w-75 border rounded mx-auto mb-5 collapse" id="collapse">
        <h3 class="bg-light text-center border-bottom p-2 fs-4">Formulaire de génération d'équipe</h3>
        <form action="#accordion" class="my-3 m-sm-5 px-3" method="post">
            <p class="text-secondary">Remplissez le formulaire suivant :</p>
            <div class="d-sm-flex flex-row">
                <div class="container-sm me-4">
                    <label for="FormControlInput1" class="form-label">Joueur 1 *</label>
                    <input type="text" class="form-control" id="FormControlInput1" name="j1" required pattern="[0-9A-Za-z-_()]*">
                    <label for="FormControlInput2" class="form-label mt-4">Joueur 2 *</label>
                    <input type="text" class="form-control" id="FormControlInput2" name="j2" required pattern="[0-9A-Za-z-_()]*">
                </div>
                <div class="container-sm">
                    <label for="FormControlInput3" class="form-label">Joueur 3 *</label>
                    <input type="text" class="form-control" id="FormControlInput3" name="j3" required pattern="[0-9A-Za-z-_()]*">
                    <label for="FormControlInput4" class="form-label mt-4">Joueur 4 *</label>
                    <input type="text" class="form-control" id="FormControlInput4" name="j4" required pattern="[0-9A-Za-z-_()]*">
                </div>
            </div>
            <button type="submit" name="valider" class="w-100 mt-3 p-2 bg-success text-white border rounded">Valider</button>
        </form>
    </div>

    <?php
        if(isset($_POST['valider'])){
            $arrayJoueur = array($_POST['j1'], $_POST['j2'], $_POST['j3'], $_POST['j4']);
            shuffle($arrayJoueur);

            echo <<<x
            <div class="w-75 mx-auto my-5">
                <p class="text-center fw-bold fs-3">A vous de jouer maintenant !</p>
                <div class="accordion w-" id="accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Equipe #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>$arrayJoueur[0]</p>
                                <p>$arrayJoueur[1]</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Equipe #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>$arrayJoueur[2]</p>
                                <p>$arrayJoueur[3]</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            x;
        }
    ?>
<script>
function ancre()
{
    window.location.href = '#collapse';
}
</script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>
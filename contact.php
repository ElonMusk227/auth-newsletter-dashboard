<?php
    session_start();
    require 'config.php';
    require 'functions.php';
    date_default_timezone_set('Africa/Niamey');
    $heure = $_GET['heure'] ?? date("G");
    $jour = $_GET['jour'] ?? date('N') - 1;
    $crenaux = CRENAUX[$jour];
    $ouvert = in_crenaux($heure, $crenaux);
    $color = $ouvert ? 'green' : 'red';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <div class="row">
        <div class="col-md-6">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ducimus dolorum dolore nobis repudiandae officiis adipisci facere repellat dicta, odit rerum, exercitationem hic dolorem amet, error ad animi temporibus molestiae.</p>
        </div>
        <div class="col-md-4">
            <h2> Horaire d'ouverture</h2>
            <?php if($ouvert): ?>
            <div class="alert alert-success">
                Le magasin sera ouvert
            </div>
            <?php else: ?>
            <div class="alert alert-danger">
                Le magasin sera fermé
            </div> 
            <?php endif ?>  
            <form action="" method="get">
                <div class="form-group">
                    <?= select('jour', $jour, JOURS); ?>  <br>
                    <input class="form-control" type="number" name="heure" value="<?=$heure?>" id="">
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Voir si le magasin est ouvert</button>
            </form>
            <ul>
                <?php foreach(JOURS as $k => $jour): ?>
                <li>
                    <strong><?= $jour ?> :</strong>
                    <?= crenaux_html(CRENAUX[$k])?>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>







    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
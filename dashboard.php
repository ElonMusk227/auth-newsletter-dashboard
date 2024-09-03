<?php
    $title = 'Dashboard'; 
    require 'header.php'; 
    forcer_utilisateur_connecte();  
    require 'functions/compteur.php';
    $annee = (int)date('Y');
    $annee_selection = empty($_GET['annee']) ? null :(int)$_GET['annee'];
    $moi_selection = empty($_GET['mois']) ? null : $_GET['mois'];
    if($annee_selection && $moi_selection){
        $total = nombre_vues_mois($annee_selection, $moi_selection);
        $details = nombre_vues_detail_mois($annee_selection, $moi_selection);
    }else{
        $total = nombre_vue();
    }
    $mois = [
        '01' => 'Janvier',
        '02' => 'Février',
        '03' => 'Mars',
        '04' => 'Avril',
        '05' => 'Mais', 
        '06' => 'Juin',
        '07' => 'Juillet',
        '08' => 'Aout',
        '09' => 'Septembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'Décembre'
    ]
?>
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <?php for ($i = 0; $i <5 ; $i++): ?>
                <a href="dashboard.php?annee=<?= $annee - $i ?>" class="list-group-item <?= $annee - $i === $annee_selection ? 'active' : ''?>"     ><?= $annee - $i ?></a>
                    <?php if($annee - $i === $annee_selection): ?>
                        <div class="list-group">
                            <?php foreach ($mois as $k => $nom):?>
                            <a href="dashboard.php?annee=<?=$annee_selection?>&mois=<?=$k?>" class="list-group-item<?= $k === $moi_selection ? ' active' : ''?> "><?=$nom ?></a>    
                            <?php endforeach ?>
                        </div>
                    <?php endif ?>
                <?php endfor ?> 
                </div>
        </div>
        <div class="col-md-8">
        <div class="card">
            <div class="card_body text-center">
                <strong style="font-size:3em"><?= $total?></strong>
                Visite<?= $total > 1 ? 's' : "" ?> totale
            </div>
         </div>
        <?php if(isset($details)) : ?>
            <h2>Détails des visites pour le mois <?= $mois[$moi_selection] ?></h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Jour</th>
                        <th>Nombre de visite</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach($details as $ligne): ?>
                        <td><?= $ligne['jour'] ?></td>
                        <td><?= $ligne['visites'] ?> visite<?= $ligne['visites'] > 1 ? 's' : '' ?></td>
                        <?php endforeach ?>
                    </tr>
                </tbody>
            </table>
        <?php endif ?>
        </div>
    </div>
<?php require 'footer.php' ?>
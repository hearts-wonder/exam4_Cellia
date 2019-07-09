<?php ob_start(); ?>

<a href="<?= url('vehicules/' . $vehicule->getId()) ?>">
    < Retour au cours</a>
    
    <form action="<?= url('vehicules/' . $vehicule->getId() . '/edit') ?>" method="post">

        <div class="form-group">
            <label for="marqueid">Marque du véhicule</label>
            <input type="text" name="marque" id="marqueid" class="form-control" value="<?= $vehicule->getMarque()  ?>">
        </div>

        <div class="form-group">
            <label for="modeleid">Modèle de voiture</label>
            <input type="text" name="modele" id="modeleid" class="form-control" value="<?= $vehicule->getModele()  ?>">
        </div>

        <div class="form-group">
            <label for="couleurid">Couleur de la voiture</label>
            <input type="text" name="couleur" id="couleurid" class="form-control" value="<?= $vehicule->getCouleur()  ?>">
        </div>

        <div class="form-group">
            <label for="immatriculationid">Immatriculation :</label>
            <input type="text" name="immatriculation" id="immatriculationid" class="form-control" value="<?= $vehicule->getImmatriculation()  ?>">
        </div <button class="btn btn-success float-right">Mettre à jour</button>
        </form>


        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>
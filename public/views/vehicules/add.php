<?php ob_start(); ?>

<form action="<?= url('vehicules/save') ?>" method="post">

    <div class="form-group">
        <label for="marqueid">Marque du véhicule</label>
        <input type="text" name="marque" id="marqueid" class="form-control">
    </div>

    <div class="form-group">
        <label for="modeleid">Modèle de voiture</label>
        <input type="text" name="modele" id="modeleid" class="form-control">
    </div>

    <div class="form-group">
        <label for="couleurid">Couleur de la voiture</label>
        <input type="text" name="couleur" id="couleurid" class="form-control">
    </div>

    <div class="form-group">
        <label for="immatriculationid">Immatriculation :</label>
        <input type="text" name="immatriculation" id="immatriculationid" class="form-control">
    </div>

    <button class="btn btn-success float-right">Ajouter un véhicule</button>
</form>


<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>
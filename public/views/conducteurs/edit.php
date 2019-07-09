<?php ob_start(); ?>

<a href="<?= url('conducteurs/' . $conducteur->getId()) ?>">
    < Retour au cours</a>

     <form action="<?= url(' conducteurs / '.$conducteur->getId() . ' / edit ') ?>" method="post">

        <div class="form-group">
            <label for="nom">Nom du conducteur</label>
            <input type="text" name="nom" id="nom" class="form-control" value="<?= $conducteur->getNom()  ?>">
        </div>

        <div class="form-group">
            <label for="nom">Prénom du conducteur</label>
            <input type="text" name="prenom" id="prenom" class="form-control" value="<?= $conducteur->getPrénom()  ?>">
        </div>


        <button class="btn btn-success float-right">Mettre à jour</button>
        </form>


        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>
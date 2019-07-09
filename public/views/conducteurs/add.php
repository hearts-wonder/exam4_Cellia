<?php ob_start(); ?>


<form action="<?= url('conducteurs/save') ?>" method="post">


    <div class="form-group">
        <label for="prenom">Nom du conducteur</label>
        <input type="text" name="prenom" id="prenom" class="form-control">
    </div>

    <div class="form-group">
        <label for="nom">Prénom du conducteur</label>
        <input type="text" name="nom" id="nom" class="form-control">
    </div>


    <button class="btn btn-success float-right">Ajouter un ou une conducteur/trice</button>
</form>
<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>
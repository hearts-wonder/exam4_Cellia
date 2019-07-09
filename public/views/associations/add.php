<?php ob_start(); ?>

<form action="<?= url('associations/save') ?>" method="post">

    <div class="form-group">
        <label for="associationform">ID de l'association</label>
        <input type="text" name="id_association" id="associationform" class="form-control">
    </div>

    <div class="form-group">
        <label for="assovehi">ID du véhicule</label>
        <input type="text" name="id_vehicule" id="assovehi" class="form-control">
    </div>

    <div class="form-group">
        <label for="assocond">ID du conducteur</label>
        <input type="text" name="id_conducteur" id="assocond" class="form-control">
    </div>


    <button class="btn btn-success float-right">Ajouter une association</button>
</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>
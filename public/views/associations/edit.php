<?php ob_start(); ?>

<a href="<?= url('associations/' . $association->getId()) ?>">
    < Retour au cours</a> 
    
    <form action="<?= url('associations/'.$association->getId() . '/edit') ?>" method="post">

        <div class="form-group">
            <label for="associationform">ID de l'association</label>
            <input type="text" name="id_association" id="associationform" class="form-control" value="<?= $association->getIdAssociation()  ?>">
        </div>

        <div class="form-group">
            <label for="assovehi">ID du véhicule</label>
            <input type="text" name="id_vehicule" id="assovehi" class="form-control" value="<?= $association->getIdVehicule()  ?>">
        </div>

        <div class="form-group">
            <label for="assocond">ID du conducteur</label>
            <input type="text" name="id_conducteur" id="assocond" class="form-control" value="<?= $association->getIdConducteur()  ?>">
        </div>


        <button class="btn btn-success float-right">Mettre à jour</button>
        </form>


        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>
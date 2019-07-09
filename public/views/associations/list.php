<?php ob_start(); ?>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Véhicule</th>
            <th>Conducteur</th>
      
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($associations as $asso) :  ?>
        <tr>
            <td><?= $asso->getId(); ?></td>
            <td><?= $asso->getIdVehicule();  ?></td>
            <td><?= $asso->getIdConducteur();  ?></td>
          
            <td><a href="#" class="btn btn-warning btn-sm">Éditer</a></td>
            <td><a href="#" class="btn btn-danger btn-sm">Supprimer</a></td>
        </tr>
        <?php endforeach ; ?>
    </tbody>
</table>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>
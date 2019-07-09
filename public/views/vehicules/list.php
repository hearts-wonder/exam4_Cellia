<?php ob_start(); ?>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Couleur</th>
            <th>Immatriculation</th>

            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($vehicules as $v) : ?>
        <tr>
            <td><?= $v->getId(); ?></td>
            <td><?= $v->getMarque(); ?></td>
            <td><?= $v->getModele(); ?></td>
            <td><?= $v->getCouleur(); ?></td>
            <td><?= $v->getImmatriculation(); ?></td>
            <td><a href="#" class="btn btn-warning btn-sm">Éditer</a></td>
            <td><a href="#" class="btn btn-danger btn-sm">Supprimer</a></td>
        </tr>
        <?php endforeach ; ?>
    </tbody>
</table>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>
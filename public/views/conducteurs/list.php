<?php ob_start(); ?>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Prénom</th>

            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($conducteurs as $c) :  ?>
            <tr>
                <td><?= $c->getId(); ?></td>
                <td><?= $c->getNom(); ?></td>
                <td><?= $c->getPrenom(); ?></td>      
                   
                <td><a href="#" class="btn btn-warning btn-sm">Éditer</a></td>
                <td><a href="#" class="btn btn-danger btn-sm">Supprimer</a></td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>

    <?php $content = ob_get_clean() ?>
    <?php view('template', compact('content')); ?>
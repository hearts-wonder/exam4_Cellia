<?php

// Create Router instance
$router = new Router();


$router->get('',                'PagesController@home' );
$router->get('examples',        'ExamplesController@list');
$router->get('examples/add',    'ExamplesController@add');
$router->post('examples/add',   'ExamplesController@save');


// Véhicules routes

$router->get('conducteurs/add' , 'ConducteursController@add');
$router->post('conducteurs/save', 'ConducteursController@save');
$router->get('conducteurs/list', 'ConducteursController@list');
$router->get('conducteurs/update', 'ConducteursController@update');
$router->get('conducteurs/{id}/delete', 'ConducteursController@delete');
$router->post('conducteurs/{id}/edit', 'ConducteursController@edit');

$router->get('vehicules/add', 'VehiculesController@add');
$router->post('vehicules/save', 'VehiculesController@save');
$router->get('vehicules/list', 'VehiculesController@list');
$router->get('vehicules/update', 'VehiculesController@update');
$router->get('vehicules/{id}/delete', 'VehiculesController@delete');
$router->post('vehicules/{id}/edit', 'VehiculesController@edit');

$router->get('associations/add', 'AssociationsController@add');
$router->post('associations/save', 'AssociationsController@save');
$router->get('associations/list', 'AssociationsController@list');
$router->get('associations/update', 'AssociationsController@update');
$router->get('associations/{id}/delete', 'AssociationsController@delete');
$router->post('conducteurs/{id}/edit', 'AssociationsController@edit');






// Run it!
$router->run();
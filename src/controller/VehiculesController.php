<?php

class VehiculesController
{

    public function add()
    {
        view('vehicules.add');

        
     }

    public function save()
    {
        $vehicule = new Vehicule;
        $vehicule->setMarque($_POST['marque']);
        $vehicule->setModele($_POST['modele']);
        $vehicule->setCouleur($_POST['couleur']);
        $vehicule->setImmatriculation($_POST['immatriculation']);
        $vehicule->save();

        redirectTo('vehicules');
    }

    public function list()
    {
        $vehicules = Vehicule::findAll();
        view('vehicules.list', compact('vehicules'));
     }

    public function update($id)
    {
        view('vehicules.update');
     }

    public function delete($id)
    {
        view('vehicules.delete');
     }

    public function edit($id)
    {
        $vehicule = Vehicule::findOne($id);
        view('vehicules.edit', compact('vehicule'));
     }
}

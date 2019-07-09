<?php

class AssociationsController
{

    public function add()
    {
        view('associations.add');

  
    }
     

    public function save()
    {
        $association = new Association;
    
        $association->setIdVehicule($_POST['id_vehicule']);
        $association->setIdConducteur($_POST['id_conducteur']);
        $association->save();

        redirectTo('associations/list');
    }
   

    public function list()
    {
        $associations = Association::findAll();
        view('associations.list', compact('associations'));
     }

    public function update($id)
    {

        view('associations.update');
     }

    public function delete($id)
    {

        view('associations.delete');
     }

    public function edit($id)
    {
        $association = Association::findOne($id);
        view('associations.edit', compact('association'));
     }
}

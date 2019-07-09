<?php 

class ConducteursController {

public function add () {
    view('conducteurs.add');

    
}
   
       public function save() {
        $conducteur = new Conducteur;
        $conducteur->setNom($_POST['nom']);
        $conducteur->setPrenom($_POST['prenom']);
        $conducteur->save();

        redirectTo('conducteurs');


      
       }

        public function list() {
        $conducteurs = Conducteur::findAll();
            view('conducteurs.list', compact('conducteurs'));
        }

           public function update($id) {
            view('conducteurs.update');
           }

            public function delete($id) {
                view('conducteurs.delete');
            }

           public function edit($id) {
               $conducteur = Conducteur::findOne($id);
            view('conducteurs.edit', compact('conducteur'));
           }






}
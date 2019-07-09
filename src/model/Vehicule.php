<?php 

class Vehicule extends Db {

const TABLE_NAME = "vehicule";

protected $id;
protected $marque;
protected $modele;
protected $couleur;
protected $immatriculation;


public function setId($id) {
    $this->id = $id;
    return $this;
}
   
public function setMarque($marque) {
        if (strlen($marque) < 2) {
            throw new Exception('Le champ est trop court');
        }
        $this->marque = $marque;
        return $this;

    }

public function setModele($modele) {

        if (strlen($modele) < 2) {
            throw new Exception('Le champ est trop court');
        }
        $this->modele = $modele;
        return $this;

    }

public function setCouleur($couleur) {

        if (strlen($couleur) < 2) {
            throw new Exception('Le champ est trop court');
        }
        $this->couleur = $couleur;
        return $this;

    }

public function setImmatriculation($immatriculation) {
        $this->immatriculation = $immatriculation;
        return $this;

    }

public function getId() {
      return $this->id;
  }

  public function getMarque() {

      return $this->marque;
  }

  public function getModele() {
     
      return $this->modele;
  }

  public function getCouleur() {
    
      return $this->couleur;
  }

  public function getImmatriculation() {
      return $this->immatriculation;
  }


    public function save()
    {
        $data = [
       
            "id" =>     $this->getId(),
            "marque" => $this->getMarque(),
            "modele" => $this->getModele(),
            "couleur" => $this->getCouleur(),
            "immatriculation" => $this->getImmatriculation(),
            
        ];
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }
    public static function findAll()
    {
        $data = Db::dbFind(self::TABLE_NAME);


        $vehicules = [];
        foreach ($data as $d) {
            $vehicule = new Vehicule;
            $vehicule->setId($d['id']);
            $vehicule->setMarque($d['marque']);
            $vehicule->setModele($d['modele']);
            $vehicule->setCouleur($d['couleur']);
            $vehicule->setImmatriculation($d['immatriculation']);


            $vehicules[] = $vehicule;
        }
        return $vehicules;
    }

    public static function findOne(int $id)
    {
        $request = [
            ['id', '=', $id]
        ];

        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0) $element = $element[0];
        else return;

        $vehicule = new Vehicule;
        $vehicule->setId($element['id']);
        $vehicule->setMarque($element['marque']);
        $vehicule->setModele($element['modele']);
        $vehicule->setCouleur($element['couleur']);
        $vehicule->setImmatriculation($element['immatriculation']);

        return $vehicule;
}
}
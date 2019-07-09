<?php

class Conducteur extends Db
{

    const TABLE_NAME = "conducteur";


protected $id;
protected $prenom;
protected $nom;



public function setId($id) {
    $this->id = $id;
    return $this;

}

public function setPrenom($prenom) {
        if (strlen($prenom) < 2) {
            throw new Exception('Le champ est trop court');
        }

        $this->prenom = $prenom;
    return $this;
}

public function setNom($nom) {
        if (strlen($nom) < 2) {
            throw new Exception('Le champ est trop court');
        }
    
    $this->nom = $nom;
    return $this;
    }

    public function getId()
    {
        return $this->id;
      
    }

    public function getPrenom()
    {
        return $this->prenom;
    
    }

    public function getNom()
    {
        return $this->nom;
     
    }


    public function save()
    {
        $data = [

            "id" => $this->getId(),
            "prenom" => $this->getPrenom(),
            "nom" => $this->getNom(),
           

        ];
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }
    public static function findAll()
    {
        $data = Db::dbFind(self::TABLE_NAME);

        $conducteurs = [];
        foreach ($data as $d) {
            $conducteur = new Conducteur;
            $conducteur->setId($d['id']);
            $conducteur->setNom($d['nom']);
            $conducteur->setPrenom($d['prenom']);

            $conducteurs[] = $conducteur;
    }
        return $conducteurs;
    }

    public static function findOne(int $id)
    {
        $request = [
            ['id' , '=' , $id]
        ];

        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0) $element = $element[0];
        else return;

            $conducteur = new Conducteur;
            $conducteur->setId($element['id']);
            $conducteur->setNom($element['nom']);
            $conducteur->setPrenom($element['prenom']);

        return $conducteur;
    }
}
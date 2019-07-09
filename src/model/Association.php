<?php

class Association extends Db
{

    const TABLE_NAME = "association_vehicule_conducteur";


    protected $idAssociation;
    protected $idVehicule;
    protected $idConducteur;



    public function setId($idAssociation)
    {
        $this->idAssociation = $idAssociation;
        return $this;
    }

    public function setIdVehicule($idVehicule)
    {
        $this->idVehicule = $idVehicule;
        return $this;
    }

    public function setIdConducteur($idConducteur)
    {
        $this->idConducteur = $idConducteur;
        return $this;
    }

    public function getId()
    {
        return $this->idAssociation;
    }

    public function getIdVehicule()
    {
        return $this->idVehicule;
    }

    public function getIdConducteur()
    {
        return $this->idConducteur;
    }

    public function save()
    {
        $data = [

            "id_association" => $this->getId(),
            "id_vehicule" => $this->getIdVehicule(),
            "id_conducteur" => $this->getIdConducteur(),
            
        ];
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }
    public static function findAll()
    {
        $data = Db::dbFind(self::TABLE_NAME);
     

        $associations = [];
        foreach ($data as $d) {
            $association = new Association;
            $association->setId($d['id_association']);
            $association->setIdVehicule($d['id_vehicule']);
            $association->setIdConducteur($d['id_conducteur']);

            $associations[] = $association;
    }
        return $associations;
    }

    public static function findOne(int $id)
    {
        $request = [
            ['id', '=', $id]
        ];

        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0) $element = $element[0];
        else return;

        $association = new Association;
        $association->setId($element['id_association']);
        $association->setIdVehicule($element['id_vehicule']);
        $association->setIdConducteur($element['id_conducteur']);

        return $association;
}
}
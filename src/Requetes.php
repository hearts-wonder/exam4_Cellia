<?php

'SELECT * FROM conducteur'; 

'SELECT count FROM vehicule';

'SELECT * FROM association_vehicule_conducteur';

'SELECT * FROM vehicule 
INNER JOIN conducteur 
ON conducteur.id = vehicule.id 
WHERE conducteur.id = NULL ';

'SELECT * FROM conducteur 
INNER JOIN vehicule 
ON vehicule.id = conducteur.id 
WHERE vehicule.id = NULL ';


'SELECT * FROM vehicule
LEFT JOIN conducteur
ON vehicule.modele = conducteur.nom AND conducteur.prenom
WHERE conducteur.nom = Pandre AND conducteur.prenom = Philippe';

'SELECT * FROM conducteur 
LEFT JOIN vehicule';

'SELECT * FROM vehicule 
LEFT JOIN conducteur
ON conducteur.id = modele.id';

'SELECT * FROM conducteur 
LEFT JOIN vehicule
ON vehicule.modele = conducteur.id';
SELECT salles.nom AS salles, etage.nom AS etage
FROM `salles`
INNER JOIN `etage` ON `salles`.id_etage  = `etage`.id;
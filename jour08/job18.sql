SELECT capacite, salles.nom AS `Room`, etage.nom AS etage
FROM `salles`
INNER JOIN `etage` ON `salles`.id_etage  = `etage`.id
ORDER BY capacite DESC LIMIT 1;
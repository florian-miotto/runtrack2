SELECT etage.`nom` , salles.`nom` AS "Biggest Room", salles.`capacite`
FROM etage
JOIN salles ON etage.id = salles.`id_etage`
ORDER BY salles.`capacite` DESC
LIMIT 1;
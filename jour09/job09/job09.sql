SELECT * FROM etudiants
WHERE  YEAR(CURDATE())-YEAR(naissance) < 18;

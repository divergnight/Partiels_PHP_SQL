# Partiel_PHP_SQL

- Bouchy Matisse


### Réponse MySQL :
```sql
-- Question 2A : 
INSERT INTO `personnage` (`id`, `nom`, `espèce`, `âge`) VALUES (NULL, 'Dupont', 'Humain', '18')

-- Question 3B : 
SELECT p.nom as personnage,v.nom as voiture FROM `voiture` AS v INNER JOIN personnage as p ON v.id_personnage = p.id WHERE p.id = 1;

-- Question 3C :
SELECT p.nom as personnage,s.nom as sport FROM `sport_personnage` AS sp 
INNER JOIN personnage as p ON p.id = sp.id_personnage
INNER JOIN sport as s ON s.id = sp.id_sport
WHERE p.id = 1;

-- Question 4 :
SELECT p.* FROM `personnage` AS p
LEFT JOIN sport_personnage as sp ON p.id = sp.id_personnage
LEFT JOIN sport as s ON s.id = sp.id_sport
LEFT JOIN voiture as v ON v.id_personnage = p.id
WHERE s.nom = "concours du mangeur de pâté de crabe" OR v.nom = "sous-marin";
```

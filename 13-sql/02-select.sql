-- Show all pokemons
SELECT * FROM pokemons;

-- Show a column name of pokemon
SELECT name FROM pokemons;

-- Show many columns
SELECT name, speed FROM pokemons;

-- Show values distincts
SELECT DISTINCT type FROM pokemons;

-- WHERE: Show only type registers
SELECT * 
FROM pokemons 
WHERE type = 'Water';

-- OR
SELECT * 
FROM pokemons 
WHERE type = 'Water' 
OR type = 'Electric';

-- More than >
SELECT *
FROM pokemons
WHERE strength > 1000;

-- Different <>
SELECT *
FROM pokemons
WHERE type <> 'Water';

-- AND
SELECT *
FROM pokemons
WHERE type = 'Water'
AND speed > 80;

-- BETWEEN
SELECT *
FROM pokemons
WHERE stamina 
BETWEEN 200
AND 300;

SELECT *
FROM pokemons
WHERE speed 
BETWEEN 90
AND 100;

-- ORDER BY: Ascendant
SELECT * 
FROM pokemons
ORDER BY strength;

SELECT * 
FROM pokemons
ORDER BY strength 
ASC;

-- ORDER BY: Descendant
SELECT * 
FROM pokemons 
ORDER BY strength 
DESC;

SELECT *
FROM pokemons
WHERE speed > 100
ORDER BY speed DESC;

-- LIMIT 
SELECT *
FROM pokemons
LIMIT 10;

-- OFFSET
SELECT *  
FROM pokemons 
LIMIT 5 
OFFSET 10;

SELECT * 
FROM pokemons 
LIMIT 10, 5;

-- LIKE: Search
-- Show all records init with 'W'
SELECT *
FROM pokemons
WHERE type
LIKE "W%";

-- Show all results that end with 'c'
SELECT *
FROM pokemons
WHERE type
LIKE "%c";

-- Show all results that contains 'ma'
SELECT *
FROM pokemons
WHERE name
LIKE "%ma%";

-- Show result 'Pikachu'
SELECT *
FROM pokemons
WHERE name
LIKE "P_k_c_u";

-- Show all results that not contains 'ma'
SELECT *
FROM pokemons
WHERE name
NOT LIKE "%ma%";

-- Show results with many values using 'IN'
SELECT *
FROM pokemons
WHERE type
IN ('Fire', 'Electric');

-- Alias
SELECT t.name AS name_trainer, 
	   p.name AS name_pokemon, 
	   p.type AS type_pokemon
FROM trainers AS t, pokemons AS p
WHERE t.id = p.trainer_id;

SELECT t.name AS name_trainer, 
       p.name AS name_pokemon, 
       p.type AS type_pokemon
FROM trainers AS t, pokemons AS p
WHERE t.id = p.trainer_id
ORDER BY t.name DESC;

SELECT t.name AS name_trainer, 
p.name AS name_pokemon, 
p.type AS type_pokemon
FROM trainers AS t, pokemons AS p
WHERE t.id = p.trainer_id 
AND p.type = "Water" OR p.type = "Fire" 
ORDER BY t.name DESC;

SELECT COUNT(p.id) AS number_pokemons
FROM pokemons AS p, trainers AS t
WHERE t.id = p.trainer_id
AND t.id = 1;

SELECT t.name AS name_trainer, COUNT(p.id) AS number_pokemons
FROM pokemons AS p, trainers AS t
WHERE t.id = p.trainer_id
GROUP BY t.name;

-- Three tables 
SELECT t.name AS name_trainer, 
	   p.name AS name_pokemon, 
	   g.name AS name_gym
FROM trainers AS t, pokemons AS p, gyms AS g
WHERE t.id = p.trainer_id
AND t.gym_id = g.id;

-- inner join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
INNER JOIN gyms
ON trainers.gym_id = gyms.id
INNER JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.name;


-- left join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
COUNT(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;


-- right join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
RIGHT JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
RIGHT JOIN pokemons
ON pokemons.trainer_id = trainers.id;

-- join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.name;

-- UNION (3 Tables data)
SELECT name FROM trainers
UNION
SELECT name FROM gyms
UNION
SELECT name FROM pokemons;

-- VIEWS
CREATE VIEW view_pokemons AS
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
COUNT(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;

-- Show View
SELECT * FROM view_pokemons;
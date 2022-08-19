-- To access local Data Base (MySQL) in a web browser:
-- http://localhost/phpmyadmin

-- To access local Data Base (MySQL) in command line (MAC):
-- cd /Application/XAMPP/bin/
-- ./mysql --version
-- ./mysql -u root -p

-- To access local Data Base (MySQL) in command line (Windows):
-- Open Control Panel XAMPP / Click on "Shell"
-- mysql --version
-- mysql -u root -p

-- Show version MySQL:
SELECT version();

-- Show All Data Bases:
SHOW databases;

-- Create a Data Base
CREATE DATABASE adsi2338200;

-- Delete a Data Base
DROP DATABASE adsi2338200;

-- Connect a Data Base
CONNECT adsi2338200;

-- Use a Data Base
USE adsi2338200;

-- Show All tables
SHOW tables;

-- Create Table
CREATE TABLE gyms (
    id INT AUTO_INCREMENT,
    VARCHAR(32) NOT NULL UNIQUE,
    PRIMARY KEY(id)
);

CREATE TABLE trainers (
    id INT AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    level INT NOT NULL DEFAULT 1,
    gym_id INT NOT NULL,
    FOREIGN KEY(gym_id) REFERENCES gyms(id),
    PRIMARY KEY(id)
);

CREATE TABLE pokemons (
    id INT AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL UNIQUE,
    type VARCHAR(32) NOT NULL,
    strength INT NOT NULL,
    stamina INT NOT NULL,
    speed INT NOT NULL,
    accuracy INT NOT NULL,
    trainer_id INT NOT NULL,
    FOREIGN KEY(trainer_id) REFERENCES trainers(id),
    PRIMARY KEY(id)
);

-- Another Way (Create table missing a field)
CREATE table pokemons (
    id INT AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    type VARCHAR(32) NOT NULL,
    strength INT NOT NULL,
    stamina INT NOT NULL,
    speed INT NOT NULL,
    accuracy INT NOT NULL,
    PRIMARY KEY(id)
);
-- Add Column
ALTER TABLE pokemons 
ADD COLUMN trainer_id INT NOT NULL
AFTER accuracy;

-- Delete Column
ALTER TABLE pokemons 
DROP COLUMN trainer_id;

-- Describe Tabla
DESCRIBE pokemons;

-- Delete a Table
DROP TABLE pokemons;

-- Delete all data storaged in a Table
TRUNCATE TABLE pokemons;
-- Another way
DELETE * FROM pokemons;

-- Fill Data (Tables)
INSERT INTO gyms VALUES (DEFAULT, 'palette');
INSERT INTO trainers VALUES (DEFAULT, 'Ash Ketchum', DEFAULT, 1);

INSERT INTO pokemons VALUES ( DEFAULT, 'pikachu', 'Electric', 90, 80, 96, 79, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'charmander', 'Fire', 95, 78, 80, 82, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'bulbasaour', 'Grass', 80, 88, 70, 75, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'squirtle', 'Water', 70, 90, 75, 90, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Snorlax', 'Normal', 180, 320, 50, 180, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Vaporeon', 'Water', 186, 260, 90, 168, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Lapras', 'Water', 111, 255, 100, 168, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Blastoise', 'Water', 720, 158, 70, 222, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Golem', 'Water', 500, 160, 80, 198, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Dragonite', 'Dragon', 900, 250, 120, 182, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Exeggutor', 'Grass', 596, 190, 90, 232, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Omaster', 'Rock', 1500, 140, 112, 202, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Muk', 'Poison', 1070, 210, 112, 180, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Onix', 'Rock', 662, 70, 80, 90, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Poliwag', 'Water', 815, 80, 70, 108, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Mankey', 'Water', 563, 80, 70, 122, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Magnemite', 'Electric', 750, 50, 40, 128, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Pidgey', 'Normal', 818, 80, 95, 90, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Gastly', 'Ghost', 750, 60, 60, 82, 1);
INSERT INTO pokemons VALUES ( DEFAULT, 'Rattata', 'Normal', 810, 60, 65, 22, 1);


-- Create security copy (Backup):
./mysqldump -u root adsi2338200 > /Users/ofaczero/Desktop/backup.sql

-- Recover security copy (Backup): 
CREATE DATABASE adsi2338200;
./mysql -u root adsi2338200 < /Users/ofaczero/Desktop/backup.sql

-- Insert data in another table
 INSERT INTO pokemons_bk SELECT * FROM pokemons;
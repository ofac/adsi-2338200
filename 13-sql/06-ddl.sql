
-- Alter table FK
ALTER TABLE pokemons
ADD FOREIGN KEY(trainer_id)
REFERENCES trainers(id);

ALTER TABLE trainers
ADD FOREIGN KEY(gym_id)
REFERENCES gyms(id);

-- Alter table - Rename Column
ALTER TABLE trainers 
CHANGE gym gym_id INT NOT NULL;

-- Create table
CREATE TABlE gyms (
id INT AUTO_INCREMENT,
name VARCHAR(32) NOT NULL,
PRIMARY KEY(id));

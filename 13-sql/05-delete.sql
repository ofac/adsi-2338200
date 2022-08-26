-- Delete
DELETE FROM trainers
where id = 5;

-- Eliminar all trainers
DELETE * FROM trainers;

-- empty table
TRUNCATE trainers;

-- Transaction:
-- Init Transaction
BEGIN;

-- Make changes
DELETE FROM trainers
WHERE id > 2;

-- Make changes
COMMIT;

-- Previous version
ROLLBACK;



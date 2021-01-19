/*
Checks if a user exists in the Admins table.
Returns an integer value of row numbers.
*/
SELECT COUNT(*) FROM Admins
WHERE userID = ?;
/*
Checks if a registering email already exists.
Returns an integer value of row numbers.
*/
SELECT COUNT(*) FROM Users
WHERE email LIKE ?;
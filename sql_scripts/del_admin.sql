/*
Deletes Admin access from provided userID.
Trying to add a user again results in a duplicate key error, which IGNORE handles.
*/
DELETE FROM Admins
WHERE adminID = ?;
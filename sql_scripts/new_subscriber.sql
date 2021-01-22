/*
Inserts a new row with the provided userID value.
Trying to add a user again results in a duplicate key error, which IGNORE handles.
*/
INSERT IGNORE INTO Subscribers (adminID) VALUES (?); 
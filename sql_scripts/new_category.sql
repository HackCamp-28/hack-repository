/*
Inserts a new row with the provided catName value.
Trying to add a tag description again results in a duplicate key error, which IGNORE handles.
*/
INSERT IGNORE INTO Categories (catName) VALUES (?);
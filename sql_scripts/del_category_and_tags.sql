/*
Deletes all tags linked to a catID, then deletes all categories linked to a catID.
*/
DELETE FROM Tags
WHERE catID = ?;
DELETE FROM Categories
WHERE catID = ?;
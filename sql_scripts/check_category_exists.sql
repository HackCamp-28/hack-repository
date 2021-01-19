/*
Returns catID if it already exists, otherwise NULL.
NOT case-sensitive due to LIKE.
*/
SELECT catID FROM Categories
WHERE catName LIKE ?;
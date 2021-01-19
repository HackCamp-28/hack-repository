/*
Returns all pitches that match on userID.
Sorts by most recent first.
*/
SELECT * FROM Pitches
LEFT JOIN Tags ON Pitches.pitchID = Tags.pitchID
LEFT JOIN Categories ON Tags.catID = Categories.catID
WHERE Pitches.userID = ?
ORDER BY lastUpdate DESC;
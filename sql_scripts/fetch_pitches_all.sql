/*
Returns all pitches from all Users.
Sorts by most recent first.
*/
SELECT * FROM Pitches
LEFT JOIN Tags ON Pitches.pitchID = Tags.pitchID
LEFT JOIN Categories ON Tags.catID = Categories.catID
ORDER BY lastUpdate DESC;
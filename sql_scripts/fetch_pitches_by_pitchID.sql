/*
Returns all pitches that match on pitchID.
Pitches with multiple tags will be listed on multiple rows.
*/
SELECT * FROM Pitches
LEFT JOIN Tags ON Pitches.pitchID = Tags.pitchID
LEFT JOIN Categories ON Tags.catID = Categories.catID
WHERE Pitches.pitchID = ?;
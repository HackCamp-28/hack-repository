/*
Updates mediaTitle by pitchID.
*/
UPDATE Pitches
SET mediaTitle = ?, lastUpdate = NOW()
WHERE pitchID = ?;
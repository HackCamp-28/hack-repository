/*
Updates mediaURL by pitchID.
*/
UPDATE Pitches
SET mediaURL = ?, lastUpdate = NOW()
WHERE pitchID = ?;
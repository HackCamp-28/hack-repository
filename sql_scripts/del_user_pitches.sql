/*
Deletes all Pitch items under a userID.
FK rule cascades to also delete all tags for the Pitch(es).
WORKBENCH: REQUIRES SAFE MODE DISABLING TO RUN
*/
DELETE FROM Pitches
WHERE userID = 9;
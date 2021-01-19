/*
Deletes all Pitch items under a pitchID.
FK rule cascades to also delete all tags for the Pitch.
WORKBENCH: REQUIRES SAFE MODE DISABLING TO RUN
*/
DELETE FROM Pitches
WHERE pitchID = 1;
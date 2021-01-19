/*
Deletes a Tag under a pitchID and catID.
WORKBENCH: REQUIRES SAFE MODE DISABLING TO RUN
*/
DELETE FROM Tags
WHERE pitchID = ? AND catID = ?;
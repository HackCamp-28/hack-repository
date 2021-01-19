/*
Accepts a pitchID and catID, acting to pair pitches to tags.
IGNORE handles errors caused by duplicate entries.
*/
INSERT IGNORE INTO Tags (pitchID, catID) VALUES (?, ?);
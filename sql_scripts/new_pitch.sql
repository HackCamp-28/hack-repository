/*
Inserts a new row for a Pitch.
IGNORE handles errors caused by invalid userIDs.
Requires the last field to be NOW(), which records current DATETIME.
*/
INSERT IGNORE INTO Pitches (userID, mediaURL, mediaTitle, lastUpdate) VALUES (?, ?, ?, NOW());
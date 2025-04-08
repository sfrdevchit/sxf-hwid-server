<?php
// List of valid HWIDs (add these manually as users send them to you)
$valid_hwids = [
    "examplehwid1234567890abcdef12345678", // Replace with real HWIDs
    "anotherhwidabcdef1234567890abcdef12"
];

// Get HWID from the GET request sent by the loader
$hwid = isset($_GET['hwid']) ? $_GET['hwid'] : '';

// Set response header to JSON
header('Content-Type: application/json');

// Check if the HWID is in the valid list
if (in_array($hwid, $valid_hwids)) {
    echo json_encode(['status' => 'valid']);
} else {
    echo json_encode(['status' => 'invalid']);
}
?>

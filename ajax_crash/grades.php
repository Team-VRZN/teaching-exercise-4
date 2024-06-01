<?php
// Get the student ID from the query parameter in the URL
$studentID = $_GET["student_id"];

// Use a switch statement to handle different student IDs
switch ($studentID) {
    case "1":
        echo '{"grade": 85, "remarks": "Passed"}';
        return;
    
    case "2":
        echo '{"grade": 74, "remarks": "Failed"}';
        return;
    
    case "3":
        echo '{"grade": 95, "remarks": "Passed"}';
        return;
};
?>

<?php
    $studentID = $_GET["student_id"];
    switch($studentID) {
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
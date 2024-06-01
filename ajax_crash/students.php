<?php
$studentID = $_GET["student_id"];
switch ($studentID) {
    case "1":
        echo '{"first_name": "John", "last_name": "Doe"}';
        return;
    case "2":
        echo '{"first_name": "Jane", "last_name": "Dee"}';
        return;
    case "3":
        echo '{"first_name": "Peter", "last_name":"Sy"}';
        return;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Pages Student</title>
</head>
<body>
    <h1>Dynamic Pages with AJAX</h1>
    <p>
        <?php
            $studentID = $_GET['student_id'];
            switch($studentID) {
                case '1':
                    echo 'Welcome John Doe!';
                    break;
                case '2':
                    echo 'Welcome Jane Dee!';
                    break;
                case '3':
                    echo 'Welcome Peter Sy!';
                    break;
                };
        ?>
    </p>
    <button type="button" onclick="getData(<?php echo $studentID ?>)">
        Get Grades
    </button>
    <div class="result"></div>
    <script src="./script.js"></script>
</body>
</html>
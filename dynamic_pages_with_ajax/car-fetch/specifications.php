<?php
    $conn = new mysqli('localhost', 'root', '', 'car_db');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $defaultCarID = 0;
    $carID = $_GET['car_id'] ?? $defaultCarID;
    $sql = "SELECT model, color, no_of_wheels 
            FROM specification WHERE car_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $carID);
    $stmt->execute();
    $stmt->bind_result($model, $color, $noOfWheels);
    $stmt->fetch();

    $response = [
        'model' => $model,
        'color' => $color,
        'no_of_wheels' => $noOfWheels
    ];

    echo json_encode($response);

    $stmt->close();
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Pages Car</title>
</head>
<body>
    <h1>Car Collection</h1>
    <form method="GET" action="index.php">
        <label for="car_id">Enter Car ID:</label>
        <input type="number" id="car_id" name="car_id" required>
        <button type="submit">Submit</button>
    </form>
    <p>
        <?php
            $conn = new mysqli('localhost', 'root', '', 'car_db');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $defaultCarID = 0;
            $carID = $_GET['car_id'] ?? $defaultCarID;
            $sql = "SELECT car_name FROM car WHERE car_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $carID);
            $stmt->execute();
            $stmt->bind_result($carName);
            $stmt->fetch();
            $stmt->close();
            $conn->close();

            if ($carName) {
                echo "$carName brand!";
            } else {
                echo "No Car Found!";
            }
        ?>
    </p>
    <button type="button" onclick="getData(<?php echo $carID ?>)">
        Get Specification
    </button>
    <div class="result"></div>
    <script src="./script.js"></script>
</body>
</html>

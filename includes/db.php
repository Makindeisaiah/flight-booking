<?php

/// Database connection settings
$host = 'localhost';
$dbname = 'flight_booking';
$username = 'root'; 
$password = '';     

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if departure and arrival parameters are set
    if (isset($_GET['departure']) && isset($_GET['arrival']) && isset($_GET['departure_date']) && isset($_GET['return_date']) ) {
        $departure = $_GET['departure'];
        $arrival = $_GET['arrival'];
        $departure_date = $_GET['departure_date'];
        $return_date = $_GET['return_date'];

        // Prepare the SQL query
        $sql = "SELECT * FROM flight WHERE departure = :departure AND arrival = :arrival AND departure_date = :departure_date AND return_date = :return_date LIMIT 5";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':departure', $departure, PDO::PARAM_STR);
        $stmt->bindParam(':arrival', $arrival, PDO::PARAM_STR);
        $stmt->bindParam(':departure_date', $departure_date, PDO::PARAM_STR);
        $stmt->bindParam(':return_date', $return_date, PDO::PARAM_STR);
        $stmt->execute();

        // Fetch results
        $flight = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $count = count($flight);
    } else {
        // If no parameters are set, show an empty result set
        $flight = [];
    }
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
    exit;
}


if (isset($_SESSION['email'])) {
    $logged_in_user = $_SESSION['email'];
    // ? getting the user username from the datasbase
    $query = $pdo->query("SELECT * FROM `users` WHERE `email` = '$logged_in_user' ")->fetch();

    $first_name = $query['first_name'];
}



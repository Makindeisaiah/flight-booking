<?php

include "includes/db.php";

// Check if the form was submitted
if (isset($_GET['first_name'], $_GET['last_name'])) {
  // Sanitize the search query to prevent SQL injection
  $first_name = htmlspecialchars($_GET['first_name']);
  $last_name = htmlspecialchars($_GET['last_name']);
  
  // Prepare the SQL statement
  $sql = "SELECT * FROM users WHERE first_name LIKE :first_name AND last_name LIKE :last_name";
  
  // Use PDO prepared statements to prevent SQL injection
  $stmt = $pdo->prepare($sql);
  
  // Bind the search parameter
  $stmt->bindValue(':first_name', "%$first_name%", PDO::PARAM_STR);
  $stmt->bindValue(':last_name', "%$last_name%", PDO::PARAM_STR);
  
  // Execute the statement
  $stmt->execute();
  
  // Fetch all results into an associative array
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  // Display the results
  if ($results) {
      echo "<h2>Search Results:</h2>";
      echo "<ul>";
      foreach ($results as $row) {
          echo "<li>{$row['first_name']}</li>"; // Replace 'column_name' with your actual column name
          echo "<li>{$row['last_name']}</li>"; // Replace 'column_name' with your actual column name
         
      }
      echo "</ul>";
  } else {
      echo "No results found.";
  }
}
?>

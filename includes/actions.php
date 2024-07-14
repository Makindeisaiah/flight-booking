<?php
require dirname(__DIR__) . "/includes/db.php";
include "includes/mail_config.php";

// ? Logs errors into an array 
$errors = [];

// ? REGISTER USER
if (isset($_POST['register_user'])) {
  // ? receive all input values from the form
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $date_of_birth = $_POST['date_of_birth'];
  // $avatar = $_POST['avatar'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];




  // ? form validation: ensure that the form is correctly filled ...
  // ? by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) {
    array_push($errors, "first_name is required");
  }
  if (empty($last_name)) {
    array_push($errors, "last_name is required");
  }
  if (empty($email)) {
    array_push($errors, "email is required");
  }
  if (empty($phone_number)) {
    array_push($errors, "phone_number is required");
  }
  if (empty($date_of_birth)) {
    array_push($errors, "date_of_birth is required");
  }
  // if (empty($avatar)) {
  //   array_push($errors, "avatar is required");
  // }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  if ($password != $confirm_password) {
    array_push($errors, "The two passwords do not match");
  }

  // ? Check that the passwords entered are minimum of 5 characters
  if (strlen($password) < 5 || strlen($confirm_password) < 5) {
    array_push($errors, "Passwords must be a minimum of 6 characters");
  }

  // ? Capital letter, small letter, special character
  // if (passwordCheck($password) == false) {
  //   array_push($errors, "Password must contain a mix of capital letters, small letters, special characters and numbers");
  // }


  // ? first check the database to make sure 
  // ? a user does not already exist with the same username and/or email
  $result = $pdo->prepare("SELECT * FROM users WHERE email= ? LIMIT 1");

  $result->execute([$email]);

  $user = $result->fetch(PDO::FETCH_ASSOC);

  if ($user) { // ? if user exists

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // ? Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password); // ? encrypt the password before saving in the database

    $token = bin2hex(random_bytes(10));
    $verify_token = $token  . "_" . bin2hex($email);

    // ? inserting the user information into the datatbase 
    $stp = $pdo->prepare('INSERT INTO `users` (`first_name`, `last_name`, `email`, `phone_number`, `date_of_birth`, `password`, `email_verification_token`) VALUES (?, ?, ?, ?, ?, ?, ?)');

    header('location: success.php');

    $stp->execute([$first_name, $last_name, $email, $phone_number, $date_of_birth, $password, $token]);

    $verification_link = "localhost/flight_booking/verified.php?token=$verify_token";
    

    // $verification_link = "https://middlemanbet.com/verified.php?token=$verify_token";

    // * Email Template
    include dirname(__DIR__) . "/verify/signup-email.php";

    $mail_template = $header . $footer;

    // ? send mail
    sendMail($email, $mail_template, "Registration Successful");

    $reg_successful = true;
  }
}


// ? LOGIN USER
if (isset($_POST['login_user'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email)) {
    array_push($errors, "email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);

    $result = $pdo->prepare("SELECT * FROM `users` WHERE `email`= ? AND `password` = ?");

    $result->execute([$email, $password]);

    $user = $result->fetch(PDO::FETCH_ASSOC);
    if ($user) {
      print_r($user);
      if ($user['email_verify_status'] == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: home-stay.php');
      } else {
        array_push($errors, "You have to verify your account before logging in");
      }
    } else {
      array_push($errors, "Email or password is incorrect");
    }
  } else {
    array_push($errors, "Wrong username/password combination");
  }
}



// function passwordCheck($password)
// {
//   // ? Validate password strength
//   $uppercase = preg_match('@[A-Z]@', $password);
//   $lowercase = preg_match('@[a-z]@', $password);
//   $number    = preg_match('@[0-9]@', $password);
//   $specialChars = preg_match('@[^\w]@', $password);

//   if (!$uppercase || !$lowercase || !$number || !$specialChars) {
//     return false;
//   }
//   return true;
// }

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
          echo "<li>{$row['first_name']}</li>"; // Replace 'column_name' with your actual column 
          echo "<li>{$row['last_name']}</li>"; // Replace 'column_name' with your actual column 
      }
      echo "</ul>";
  } else {
      echo "No results found.";
  }
}


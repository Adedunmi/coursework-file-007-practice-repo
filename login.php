<?php
include("connection.php"); //Establishing connection with our database
if (empty($_POST["olajumoke"]) || empty($_POST["helpme"])) {
  echo "Both fields are required.";
} else {
  $username = $_POST['olajumoke'];
  $password = $_POST['helpme'];
  $sql = "SELECT uid FROM users WHERE olajumoke='$username' and helpme='$password'";

  $result = mysqli_query($db, $sql);

  if (mysqli_num_rows($result) == 1) {
    header("location: home.php"); // Redirecting To another Page
  } else {
    echo "Incorrect username or password.";
  }
}

<?php

session_start();

include 'conn.php';

if (isset($_POST['submit'])) {


  $match = $_POST['match'];
  $venue = $_POST['venue'];
  $results = $_POST['results'];

  $result = "INSERT INTO `venue`(`match`, `venue`, `results`) VALUES ('$match', '$venue', '$results')";

  $query = mysqli_query($conn, $result);


  if ($query) {

    header('location:venue.php');
  } else {

    header('location:venue.php');
  }
}

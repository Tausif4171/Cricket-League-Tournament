<?php

session_start();

include 'conn.php';

if(isset($_POST['submit'])){


    $name = $_POST['name'];
    // $amount = $_POST['amount'];
    // $goal = $_POST['goal'];
    // $desc = $_POST['description'];
  $file = $_FILES['file']['name'];
// $fileDestination = 'uploads/'.$fileNameNew;
$result = "INSERT INTO `countries`(`name`, `file`) VALUES ('$name', '$file')";

$query = mysqli_query($conn,$result);


  if ($query) {
      move_uploaded_file($_FILES['file']['tmp_name'],  "uploads/".$_FILES['file']['name']);
      $_SESSION['status'] = "Image stored";
      header('location:causes.php');
  }
  else {
    $_SESSION['status'] = "Image not stored";
    header('location:causes.php');
  }


  $file = $_FILES['file'];




}

?>
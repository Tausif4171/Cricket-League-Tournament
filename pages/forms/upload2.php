<?php

session_start();

include 'conn.php';

if(isset($_POST['submit'])){


    $teams = $_POST['teams'];
    $play = $_POST['play'];
    $win = $_POST['win'];
    $loose = $_POST['loose'];
    $tie = $_POST['tie'];
    $draw = $_POST['draw'];
    $NR = $_POST['NR'];
    $PCT = $_POST['PCT'];
    $PTS = $_POST['PTS'];
    
    
  $file = $_FILES['file']['name'];
// $fileDestination = 'uploads/'.$fileNameNew;
$result = "INSERT INTO `tournament_score`(`teams`, `play`, `win`, `loose`, `tie`, `draw`, `NR`, `PCT`, `PTS`) VALUES ('$teams', '$play', '$win', '$loose', '$tie', '$draw', '$NR', '$PCT', '$PTS')";

$query = mysqli_query($conn,$result);


  if ($query) {
      move_uploaded_file($_FILES['file']['tmp_name'],  "uploads/".$_FILES['file']['name']);
      $_SESSION['status'] = "Image stored";
      header('location:volunteers.php');
  }
  else {
    $_SESSION['status'] = "Image not stored";
    header('location:volunteers.php');
  }


  $file = $_FILES['file'];




}

?>
<?php

session_start();

include 'conn.php';

if(isset($_POST['submit'])){


    $fullName = $_POST['fullName'];
    $playingRole = $_POST['playingRole'];
    $born = $_POST['born'];
    $currentAge = $_POST['currentAge'];
    $battingStyle = $_POST['battingStyle'];
    $bowlingStyle = $_POST['bowlingStyle'];
    $majorTeams = $_POST['majorTeams'];
    $Mat = $_POST['Mat'];
    
    $Inns = $_POST['Inns'];
    $NO = $_POST['NO'];
    $Runs = $_POST['Runs'];
    $HS = $_POST['HS'];
    $Ave = $_POST['Ave'];
    $BF = $_POST['BF'];
    $SR = $_POST['SR'];
    $fours = $_POST['fours'];

    
    $sixs = $_POST['sixs'];
    $Ct = $_POST['Ct'];
    $St = $_POST['St'];
    $hundreds = $_POST['hundreds'];
    $fiftys = $_POST['fiftys'];
    $Balls = $_POST['Balls'];
    $Wkts = $_POST['Wkts'];
    $BBI = $_POST['BBI'];

    
    $BBM = $_POST['BBM'];
    $Econ = $_POST['Econ'];
    $fourw = $_POST['fourw'];
    $fivew = $_POST['fivew'];
    $tens = $_POST['tens'];
   
    
  $file = $_FILES['file']['name'];
// $fileDestination = 'uploads/'.$fileNameNew;
$result = "INSERT INTO `afghanistan_players_details`(`fullName`, `born`, `currentAge`, `playingRole`, `battingStyle`, `bowlingStyle`, `majorTeams`, `Mat`, `Inns`,
 `NO`, `Runs`
, `HS`, `Ave`, `BF`, `SR`, `4s`, `6s`, `Ct`, `St`, `100`, `50`
, `Balls`, `Wkts`, `BBI`, `BBM`, `Econ`, `4w`, `5w`, `10`, `file`) VALUES 
('$fullName', '$born', '$currentAge', '$playingRole', '$battingStyle', '$bowlingStyle', '$majorTeams', '$Mat', '$Inns', '$NO', '$Runs'
, '$HS', '$Ave', '$BF', '$SR', '$fours', '$sixs', '$Ct', '$St', '$hundreds', '$fiftys'
, '$Balls', '$Wkts', '$BBI', '$BBM', '$Econ', '$fourw', '$fivew', '$tens', '$file'
)";
$query = mysqli_query($conn,$result);


  if ($query) {
      move_uploaded_file($_FILES['file']['tmp_name'],  "uploads/".$_FILES['file']['name']);
      $_SESSION['status'] = "Image stored";
      header('location:afghanistan_players.php');
  }
  else {
    $_SESSION['status'] = "Image not stored";
    header('location:afghanistan_players.php');
  }


  $file = $_FILES['file'];




}

?>
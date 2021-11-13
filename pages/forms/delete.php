<?php

include 'conn.php';

if(isset($_POST['deletedata']))
{
  $id = $_POST['delete_id'];


  $q = "DELETE FROM `afghanistan_players_details` WHERE id = $id ";
  mysqli_query($conn, $q);
  
  header('location:afghanistan_players.php');
}


?>


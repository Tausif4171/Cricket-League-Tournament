<?php

include 'conn.php';

if(isset($_POST['deletedata']))
{
  $id = $_POST['delete_id'];


  $q = "DELETE FROM `tournament_score` WHERE id = $id ";
  mysqli_query($conn, $q);
  
  header('location:tournament_score.php');
}

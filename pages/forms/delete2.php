<?php

include 'conn.php';

if(isset($_POST['deletedata']))
{
  $id = $_POST['delete_id'];


  $q = "DELETE FROM `match_details` WHERE id = $id ";
  mysqli_query($conn, $q);
  
  header('location:match_details.php');
  
}

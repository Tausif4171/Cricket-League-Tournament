<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cricket League Tournament</title>
  <link href="style.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .container {
      width: 100%;
    }

    .starter-template tr {
      line-height: 30px;
    }

    .mt20 {
      margin-top: 20px;
    }

    table {
      position: relative;
      left: 23%;
      top: 50%;
      border-collapse: collapse;
      width: 800px;
      height: 200px;
      border: 1px solid #bdc3c7;
      box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }

    h1 {
      font-weight: 600;
      text-align: center;
      background-color: #16a085;
      color: #fff;
      padding: 10px 0px;
    }

    tr {
      transition: all .2s ease-in;
      cursor: pointer;
    }

    th,
    td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    #header {
      background-color: #16a085;
      color: #fff;
    }

    tr:hover {
      background-color: #f5f5f5;
      transform: scale(1.02);
      box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }

    @media only screen and (max-width: 768px) {
      table {
        width: 90%;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/5.0/examples/starter-template/starter-template.css" rel="stylesheet">
</head>

<body>
  <div style="overflow: hidden;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php" style="font-size:18px">Home <span class="sr-only">(current)</span></a>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="font-size:18px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Teams
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="india.php">India</a>
                <a class="dropdown-item" href="afghanistan.php">Afghanistan</a>
                <div class="dropdown-divider"></div>

              </div>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="font-size:18px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Players
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="india_player_details.php">India - Players Details</a>
                <a class="dropdown-item" href="afghanistan_player_details.php">Afghanistan - Players Details</a>
                <div class="dropdown-divider"></div>

              </div>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <li class="nav-item">
              <a class="nav-link" href="pages/forms/index.php" style="font-size:18px">Dashboard</a>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <main class="container">

      <h2 style="margin-top: 50px; text-align:center; margin-bottom:50px; color:#16a085; font-size:42px">Team</h2>


      <nav aria-label="breadcrumb" id="team0" style="background-color: white;">
        <ol class="breadcrumb" style="background-color: white;">
          <li class="breadcrumb-item"><img src="image/Afghanistan_Flag.png" alt="" id="team0_1" /></li>
          <li aria-current="page" id="small">Afghanistan</li>
        </ol>
      </nav>

      <h2 style="margin-top: 50px; text-align:center; margin-bottom:70px; color:#16a085; font-size:42px">Players</h2>

      <div class="row" id="team1">
        <?php

        include 'pages/forms/conn.php';

        $q = "select * from afghanistan_players_details";
        $query = mysqli_query($conn, $q);
        while ($res = mysqli_fetch_array($query)) {


        ?>
          <div class="col">
            <div class="card" style="width: 12rem; margin-bottom:40px">
              <img class="card-img-top" src="<?php echo "pages/forms/uploads/" . $res['file']; ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-text"><?php echo $res['fullName']; ?> </h5>
                <p class="card-text"><?php echo $res['playingRole']; ?> </p>
              </div>
            </div>
          </div>



        <?php
        }
        ?>
        <br><br><br>
    </main>

    <section style="margin-bottom: 110px; margin-top:40px">

    <h1>Match Details</h1>
    <!-- <hr> -->

    <table style="margin-top: 60px;">
      <tr id="header">
        <th>Id</th>
        <th>Teams</th>
        <th>Winner</th>
        <th>Looser</th>
        <th>Man of the Match</th>
        <th>Bowler of the Match</th>
        <th>Best Fielder</th>

      </tr>
      <?php

      include 'pages/forms/conn.php';

      $q = "select * from match_details";
      $query = mysqli_query($conn, $q);
      while ($res = mysqli_fetch_array($query)) {


      ?>
        <tr>
          <td><?php echo $res['id']; ?></td>
          <td><?php echo $res['teams']; ?> </td>
          <td><?php echo $res['winner']; ?> </td>
          <td><?php echo $res['looser']; ?> </td>
          <td><?php echo $res['man_of_match']; ?> </td>
          <td><?php echo $res['bowler_of_match']; ?> </td>
          <td><?php echo $res['best_fielder']; ?> </td>

        </tr>
      <?php
      }
      ?>

    </table>
    </section>

    <div class="footer" style="background-color: #333; height:50px;">
      <br>
      <h6 style="text-align: center;margin-top:-10px; color: white;">Copyright © 2021 <a href="index.php" style="color:#16a085; text-decoration:none">Cricket League Tournament</a>. All rights reserved.</h6>
    </div>

    <!-- /.container -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>
  </div>
</body>

</html>
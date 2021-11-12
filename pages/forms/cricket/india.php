<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cricket Player Statistics</title>
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
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/starter-template/starter-template.css" rel="stylesheet">
</head>

<body>
    <div style="overflow: hidden;">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Home</a>
                <a class="navbar-brand" href="details.php">Player Details</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    </ul>
                    <form class="d-flex" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <main class="container">

            <h2 style="text-align:center; margin-top: 90px; margin-bottom:50px;">Team</h2>

            <nav aria-label="breadcrumb" id="team0" style="background-color: white;">
                <ol class="breadcrumb" style="background-color: white;">
                <a href="details.php"><li class="breadcrumb-item"><img src="image/img.png" alt="" id="team0_1" /></li></a>
                    <a href="details.php"><li aria-current="page" style="font-size:24px;  margin-top: 35px;margin-left:22px;">India</li></a>
                </ol>
            </nav>
            <h2 style="text-align:center;margin-bottom:50px; margin-top: 90px">Players</h2>
            <div class="row" id="team1">
            <?php

include '../conn.php';

$q = "select * from india_players_details";
$query = mysqli_query($conn,$q);
while($res = mysqli_fetch_array($query)){


?>
                <div class="col">
                    <div class="card" style="width: 12rem; margin-bottom:40px">
                        <img class="card-img-top" src="<?php echo "../uploads/".$res['file']; ?>" alt="Card image cap">
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
        <!-- /.container -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>
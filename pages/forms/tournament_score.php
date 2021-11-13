<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cricket League Tournament | Tournament Score</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index3.html" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index.php" class="brand-link">
        <img src="../../dist/img/favicon.ico" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-size:18px">Cricket Tournament</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="../../index.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard

                </p>
              </a>

            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Our Pages
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../forms/countries.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Countries</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../forms/afghanistan_players.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Afghanistan Players</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="../forms/match_details.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Match Details</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../forms/india_players.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>India Players</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../forms/tournament_score.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tournament Score</p>
                  </a>
                </li>
              </ul>
            </li>
            </li>

            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">


            <div class="container">
              <div class="col-lg-12">
                <br><br>
                <h1 class="text-info text-center">Tournament Score Table</h1>
                <a href="insert3.php"><button class="btn btn-success text-right">✓Add Tournament Score Details</button></a>
                <br><br>
                <table id="datatableid" class="table table-striped table-hover table-bordered">

                  <thead>
                    <tr class="bg-dark text-white text-center">
                      <th>Id</th>
                      <th>Teams</th>
                      <th>Play</th>
                      <th>Win</th>
                      <th>Loose</th>
                      <th>Tie</th>
                      <th>Draw</th>
                      <th>NR</th>
                      <th>PCT</th>
                      <th>PTS</th>
                      
                      <th>Delete</th>
                      <!-- <th>Update</th> -->
                    </tr>
                  </thead>

                  <?php

                  include 'conn.php';

                  $q = "select * from tournament_score";
                  $query = mysqli_query($conn, $q);
                  while ($res = mysqli_fetch_array($query)) {


                  ?>

                    <tr class="text-center">
                      <td><?php echo $res['id']; ?></td>
                      <td><?php echo $res['teams'] ?></td>
                      <td><?php echo $res['play'] ?></td>
                      <td><?php echo $res['win'] ?></td>
                      <td><?php echo $res['loose'] ?></td>
                      <td><?php echo $res['tie'] ?></td>
                      <td><?php echo $res['draw'] ?></td>
                      <td><?php echo $res['NR'] ?></td>
                      <td><?php echo $res['PCT'] ?></td>
                      <td><?php echo $res['PTS'] ?></td>
                     
                      <td><button type="button" class="btn-danger btn deletebtn">Delete</button></td>
                      <!-- <td><button class="btn-primary btn editbtn"><a href="update1.php">Update</a></button></td> -->


                    </tr>
                  <?php
                  }
                  ?>
                </table>
              </div>

            </div>


            <script>
              $(document).ready(function() {

                $('.editbtn').on('click', function() {

                  // $('#deletemodal').modal('show');

                  $tr = $(this).closest('tr');

                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data);

                  $('#update_id').val(data[0]);
                  $('#name').val(data[1]);
                  $('#amount').val(data[2]);
                  $('#goal').val(data[3]);
                  $('#desc').val(data[4]);
                  $('#file').val(data[5]);

                });

              });
            </script>



            <script>
              $(document).ready(function() {

                $('.deletebtn').on('click', function() {

                  $('#deletemodal').modal('show');

                  $tr = $(this).closest('tr');

                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data);

                  $('#delete_id').val(data[0]);

                });

              });
            </script>


            <!-- Modal -->
            <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="delete3.php" method="POST">

                    <div class="modal-body">
                      <input type="hidden" name="delete_id" id="delete_id">
                      <h4>Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                      <button type="submit" name="deletedata" class="btn btn-primary">Yes !! Delete it.</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>

          </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">

      <strong>Copyright &copy; 2021 <a href="">Cricket League Tournament</a>.</strong>
      All rights reserved.

    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#datatableid').DataTable();
    });
  </script>

  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>
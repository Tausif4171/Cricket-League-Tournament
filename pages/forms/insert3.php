<?php session_start();  ?>

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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
          <a href="../../index.php" class="nav-link">Home</a>
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

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="container">

              <div class="col-lg-6 m-auto">

                <br><br>
                <div class="card">
                  <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Tournament Score Form</h1>
                  </div><br>

                  <form action="upload2.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Teams:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Teams" name="teams" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Play:</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Play" name="play" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Win:</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Win" name="win" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Loose:</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Loose" name="loose" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tie:</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Tie" name="tie" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Draw:</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Draw" name="draw" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">NR:</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter NR" name="NR" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">PCT:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter PCT" name="PCT" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">PTS:</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter PTS" name="PTS" required>
                      </div>

                      
                      <button onclick="sweetalert()" type="submit" class="btn btn-primary" name="submit">Submit</button>

                    </div>
                    <!-- /.card-body -->


                  </form>
                  </ </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script>
          function sweetalert() {
            swal("Thank You!", "Form has been successfully submitted.", "success");
          }
        </script>

    </div>

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
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>
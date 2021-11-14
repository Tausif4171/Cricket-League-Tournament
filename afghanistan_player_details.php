<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	</style>
	<!-- Custom styles for this template -->
	<link href="https://getbootstrap.com/docs/5.0/examples/starter-template/starter-template.css" rel="stylesheet">
</head>

<body>
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
	<h2 style="margin-top: 50px; text-align:center; margin-bottom:50px; color:#16a085; font-size:42px">Afghanistan Players Details</h2>

	<main class="container">
		<div class="starter-template py-5" style="margin-top: 20px;">
			<?php

			include 'pages/forms/conn.php';

			$q = "select * from afghanistan_players_details";
			$query = mysqli_query($conn, $q);
			while ($res = mysqli_fetch_array($query)) {


			?>
				<h4><?php echo $res['fullName'] ?> - (<?php echo $res['country'] ?>)</h4>
				<img src="<?php echo "pages/forms/uploads/" . $res['file']; ?>" />
				<div class="row" style="margin-bottom: 40px;">
					<h4>Personal Information</h4>
					<div class="col-lg-4">
						<table>
							<tr>
								<th width="35%" valign="top">Born</th>
								<td><?php echo $res['born'] ?></td>
							</tr>
							<tr>
								<th valign="top">Age</th>
								<td><?php echo $res['currentAge'] ?></td>
							</tr>
							<tr>
								<th valign="top">Full Name</th>
								<td><?php echo $res['fullName'] ?></td>
							</tr>

							<tr>
								<th valign="top">Playing Role</th>
								<td><?php echo $res['playingRole'] ?></td>
							</tr>
							<tr>
								<th valign="top">Batting Style</th>
								<td><?php echo $res['battingStyle'] ?></td>
							</tr>
							<tr>
								<th valign="top">Bowling Style</th>
								<td><?php echo $res['bowlingStyle'] ?></td>
							</tr>
							<tr>
								<th valign="top">Major Teams</th>
								<td><?php echo $res['majorTeams'] ?></td>
							</tr>
						</table>
					</div>
					<div class="col-lg-8">
						<!-- <p><?php echo $res['profile'] ?></p> -->
						<h4>Batting</h4>
						<table width="100%">
							<tr>
								<th></th>
								<th>Mat</th>
								<th>Inns</th>
								<th>NO</th>
								<th>Runs</th>
								<th>HS</th>
								<th>Ave</th>
								<th>BF</th>
								<th>SR</th>
								<th>4s</th>
								<th>6s</th>
								<th>Ct</th>
								<th>St</th>
								<th>100</th>
								<th>50</th>
							</tr>

							<th>T20I</th>
							<td><?php echo $res['Mat'] ?></td>
							<td><?php echo $res['Inns'] ?></td>
							<td><?php echo $res['NO'] ?></td>
							<td><?php echo $res['Runs'] ?></td>
							<td><?php echo $res['HS'] ?></td>
							<td><?php echo $res['Ave'] ?></td>
							<td><?php echo $res['BF'] ?></td>
							<td><?php echo $res['SR'] ?></td>
							<td><?php echo $res['4s'] ?></td>
							<td><?php echo $res['6s'] ?></td>
							<td><?php echo $res['Ct'] ?></td>
							<td><?php echo $res['St'] ?></td>
							<td><?php echo $res['100'] ?></td>
							<td><?php echo $res['50'] ?></td>
							</tr>

						</table>

						<h4 class="mt20">Bowling</h4>
						<table width="100%">
							<tr>
								<th></th>
								<th>Mat</th>
								<th>Inns</th>
								<th>Balls</th>
								<th>Runs</th>
								<th>Wkts</th>
								<th>BBI</th>
								<th>BBM</th>
								<th>Ave</th>
								<th>Econ</th>
								<th>SR</th>
								<th>4w</th>
								<th>5w</th>
								<th>10w</th>
							</tr>

							<th>T20I</th>
							<td><?php echo $res['Mat'] ?></td>
							<td><?php echo $res['Inns'] ?></td>
							<td><?php echo $res['Balls'] ?></td>
							<td><?php echo $res['Runs'] ?></td>
							<td><?php echo $res['Wkts'] ?></td>
							<td><?php echo $res['BBI'] ?></td>
							<td><?php echo $res['BBM'] ?></td>
							<td><?php echo $res['Ave'] ?></td>
							<td><?php echo $res['Econ'] ?></td>
							<td><?php echo $res['SR'] ?></td>
							<td><?php echo $res['4w'] ?></td>
							<td><?php echo $res['5w'] ?></td>
							<td><?php echo $res['10'] ?></td>
							</tr>

						</table>
					</div>
				</div>
			<?php
			}
			?>

		</div>
	</main>

	<div class="footer" style="background-color: #333; height:50px;">
		<br>
		<h6 style="text-align: center;margin-top:-10px; color: white;">Copyright © 2021 <a href="index.php" style="color:#16a085; text-decoration:none">Cricket League Tournament</a>. All rights reserved.</h6>
	</div>
	<!-- /.container -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Cricket Player Statistics</title>
      <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
		 .container{
			 width:100%;
		 }
		 .starter-template tr{
			 line-height:30px;
		 }
		 .mt20{
			 margin-top:20px;
		 }
      </style>
      <!-- Custom styles for this template -->
      <link href="https://getbootstrap.com/docs/5.0/examples/starter-template/starter-template.css" rel="stylesheet">
   </head>
   <body>
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
      <h2 style="text-align:center;margin-bottom:10px; margin-top: 90px">Players Details</h2>
      <main class="container">
         <div class="starter-template py-5" style="margin-top: 20px;">
		 <?php

include '../conn.php';

$q = "select * from india_players_details";
$query = mysqli_query($conn,$q);
while($res = mysqli_fetch_array($query)){


?>
				<h4><?php echo $res['fullName']?> - (<?php echo $res['country']?>)</h4>
				<img src="<?php echo "../uploads/".$res['file']; ?>"/>
				<div class="row" style="margin-bottom: 40px;">
					<h4>Personal Information</h4>
					<div class="col-lg-4">
						<table>
							<tr>
								<th width="35%" valign="top">Born</th>
								<td><?php echo $res['born']?></td>
							</tr>
							<tr>
								<th valign="top">Age</th>
								<td><?php echo $res['currentAge']?></td>
							</tr>
							<tr>
								<th valign="top">Full Name</th>
								<td><?php echo $res['fullName']?></td>
							</tr>
							
							<tr>
								<th valign="top">Playing Role</th>
								<td><?php echo $res['playingRole']?></td>
							</tr>
							<tr>
								<th valign="top">Batting Style</th>
								<td><?php echo $res['battingStyle']?></td>
							</tr>
							<tr>
								<th valign="top">Bowling Style</th>
								<td><?php echo $res['bowlingStyle']?></td>
							</tr>
							<tr>
								<th valign="top">Major Teams</th>
								<td><?php echo $res['majorTeams']?></td>
							</tr>
						</table>
					</div>
					<div class="col-lg-8">
						<!-- <p><?php echo $res['profile']?></p> -->
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
								<td><?php echo $res['Mat']?></td>
								<td><?php echo $res['Inns']?></td>
								<td><?php echo $res['NO']?></td>
								<td><?php echo $res['Runs']?></td>
								<td><?php echo $res['HS']?></td>
								<td><?php echo $res['Ave']?></td>
								<td><?php echo $res['BF']?></td>
								<td><?php echo $res['SR']?></td>
								<td><?php echo $res['4s']?></td>
								<td><?php echo $res['6s']?></td>
								<td><?php echo $res['Ct']?></td>
								<td><?php echo $res['St']?></td>
								<td><?php echo $res['100']?></td>
								<td><?php echo $res['50']?></td>
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
								<td><?php echo $res['Mat']?></td>
								<td><?php echo $res['Inns']?></td>
								<td><?php echo $res['Balls']?></td>
								<td><?php echo $res['Runs']?></td>
								<td><?php echo $res['Wkts']?></td>
								<td><?php echo $res['BBI']?></td>
								<td><?php echo $res['BBM']?></td>
								<td><?php echo $res['Ave']?></td>
								<td><?php echo $res['Econ']?></td>
								<td><?php echo $res['SR']?></td>
								<td><?php echo $res['4w']?></td>
								<td><?php echo $res['5w']?></td>
								<td><?php echo $res['10']?></td>
							</tr>
							
						</table>
					</div>
				</div>
				<?php
}
?>
			
         </div>
      </main>
      <!-- /.container -->
      <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" ></script>
   </body>
</html>
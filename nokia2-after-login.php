<?php 
session_start();
if (!isset($_SESSION['email']))
	header('location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Nokia</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		</script>

<style>
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

.pagination a.active {
    background-color: #0080ff;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>


	</head>
	<body>
		<div class="container-fluid">
			<?php include("navbar-after-login.php"); ?>
			<form action="confirm.php" method="get">
				<div class="row" style="margin-top:80px;">
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#7</div>
							</div>
							<div class="panel-body">
								<center><img src="images/nokia/nokia1.jpg" alt="Item"/></center>
								<p> 4.2' Screen, snap-dragon processor, 1GB RAM, 4GB Internal memory, Rs 5000.</p>
								<a href="cart-script.php?id=7&add=add" name="add" value="add" class="btn btn-primary btn-block">
<?php 
								require_once("add-or-added.php");
								echo message(7);
								?>
								
							</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#8</div>
							</div>
							<div class="panel-body">
								<center><img src="images/nokia/nokia3.jpg" alt="Item"/></center>
								<p> Numeric keypad, 2MP Camera, Internet browsing,<br/>Rs 4000.</p>
								<a href="cart-script.php?id=8&add=add" name="add" value="add" class="btn btn-primary btn-block">
<?php 
								require_once("add-or-added.php");
								echo message(8);
								?>								
							</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#9</div>
							</div>
							<div class="panel-body">
								<center><img src="images/nokia/nokiap4.jpg" alt="Item"/></center>
								<p> 4' Screen, snap-dragon processor, Android 3.2, 1GB RAM, 4GB Internal memory, Rs 4000.</p>
								<a href="cart-script.php?id=9&add=add" name="add" value="add" class="btn btn-primary btn-block">
<?php 
								require_once("add-or-added.php");
								echo message(9);
								?>								
							</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#10</div>
							</div>
							<div class="panel-body">
								<center><img src="images/nokia/nokia6.jpg" alt="Item"/></center>
								<p> 3.7' Screen, snap-dragon processor, Android 4.0, 1GB RAM, 4GB Internal memory, Rs 4000</p>
								<a href="cart-script.php?id=10&add=add" name="add" value="add" class="btn btn-primary btn-block">
<?php 
								require_once("add-or-added.php");
								echo message(10);
								?>								
							</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#11</div>
							</div>
							<div class="panel-body">
								<center><img src="images/nokia/nokia7.jpg" alt="Item"/><center>
								<p> MNumeric keypad, 4MP Camera, Internet browsing, SMS/MMS, Rs 4000.</p>
								<a href="cart-script.php?id=11&add=add" name="add" value="add" class="btn btn-primary btn-block">
<?php 
								require_once("add-or-added.php");
								echo message(11);
								?>								
							</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#12</div>
							</div>
							<div class="panel-body">
								<center><img src="images/nokia/nokia13.jpg" alt="Item"/></center>
								<p>2' AMOLED Screen, 1GB RAM, Qual-com processor, 2GB Internal Memory, 5MP camera, Rs 4000.</p>
								<a href="cart-script.php?id=12&add=add" name="add" value="add" class="btn btn-primary btn-block">
<?php 
								require_once("add-or-added.php");
								echo message(12);
								?>								
							</a>
							</div>
						</div>
					</div>
				</div>	
			</form>
		</div>
<div class="text-center">
<div class="pagination">
  <a href="#">&laquo;</a>
  <a  href="nokia1-after-login.php">1</a>
  <a class="active" href="nokia2-after-login.php">2</a>
  <a  href="nokia3-after-login.php">3</a>
  <a href="#">&raquo;</a>
</div>
</div>
	</body>
</html>
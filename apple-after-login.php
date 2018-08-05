<?php 
session_start();
if (!isset($_SESSION['email']))
	header('location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Apple</title>
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
								<div class="panel-title">#1</div>
							</div>
							<div class="panel-body">
								<center><img src="images/apple/iPhone5.jpg" alt="Item"/></center>
								<p> 4.2' Screen, snap-dragon processor, 1GB RAM, 4GB Internal memory, Rs 5000.</p>
								<a href="cart-script.php?id=37&add=add" name="add" value="add" class="btn btn-primary btn-block">
<?php 
								require_once("add-or-added.php");
								echo message(37);
								?>
								
							</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#2</div>
							</div>
							<div class="panel-body">
								<center><img src="images/apple/iPhone5c.jpg" alt="Item"/></center>
								<p> Numeric keypad, 2MP Camera, Internet browsing,<br/>Rs 4000.</p>
								<a href="cart-script.php?id=38&add=add" name="add" value="add" class="btn btn-primary btn-block">
<?php 
								require_once("add-or-added.php");
								echo message(38);
								?>								
							</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#3</div>
							</div>
							<div class="panel-body">
								<center><img src="images/apple/iPhone7.jpg" alt="Item"/></center>
								<p> 4' Screen, snap-dragon processor, Android 3.2, 1GB RAM, 4GB Internal memory, Rs 4000.</p>
								<a href="cart-script.php?id=39&add=add" name="add" value="add" class="btn btn-primary btn-block">
<?php 
								require_once("add-or-added.php");
								echo message(39);
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
								<div class="panel-title">#4</div>
							</div>
							<div class="panel-body">
								<center><img src="images/apple/iPod.jpg" alt="Item"/></center>
								<p> 3.7' Screen, snap-dragon processor, Android 4.0, 1GB RAM, 4GB Internal memory, Rs 4000</p>
								<a href="cart-script.php?id=40&add=add" name="add" value="add" class="btn btn-primary btn-block">
<?php 
								require_once("add-or-added.php");
								echo message(40);
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
  <a class="active" href="apple-after-login.php">1</a>
  
  <a href="#">&raquo;</a>
</div>
</div>
	</body>
</html>
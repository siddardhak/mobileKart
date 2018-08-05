<?php 
session_start();
if (!isset($_SESSION['email']))
	header('location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		</script>
<link href="4/thumbs2.css" rel="stylesheet" />
    <link href="4/thumbnail-slider.css" rel="stylesheet" />
    <script src="4/thumbnail-slider.js" type="text/javascript"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      height:500px;
      
      
  }
.navbar 
{
    position: relative;
    min-height: 10px;
    margin-bottom: 5px;
    border: 1px solid transparent;
}
div.style
{
    position: relative;
    margin-height:10px   margin-bottom: 5px;
    border: 1px solid transparent;
}
stron{
     position:relative;
     margin-height:20px margin-bottom:5px;
     font-family: 'Times New Roman', cursive;
     font-size:10px;
     align:center;
}
  </style>
<script type="text/javascript">
  function Redirect1(){
           window.location="samsung1-after-login.php";
   }
function Redirect2(){
           window.location="htc-after-login.php";
   }
function Redirect3(){
           window.location="nokia1-after-login.php";
   }
function Redirect4(){
           window.location="apple-after-login.php";
   }
function Redirect5(){
           window.location="motorola-after-login.php";
   }
function Redirect6(){
           window.location="asus-after-login.php";
   }

</script>

	</head>
	<body>
		<div class="container-fluid">
			<?php include("navbar-after-login.php"); ?>
			<br><br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/firstpage/phone1.jpg" alt="Redimi" width="600" height="100">
        
      </div>

      <div class="item">
        <img src="images/firstpage/phone2.png" alt="Pixel" width="600" height="100">
        
      </div>
    
      <div class="item">
        <img src="images/firstpage/phone3.jpg" alt="Iphone7" width="600" height="100">
        
      </div>

      <div class="item">
        <img src="images/firstpage/phone4.png" alt="Companies" width="600" height="100">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div style="margin-left:5%; position:absolute; margin-top:85px;font-family:'Times New Roman',cursive;font-size:20px;"><strong>MOBILE <br>COMPANIES</strong></div>
    <div style="position:relative; padding-left:20%; margin-top:40px;"> 
   <div id="thumbnail-slider" >
            <div class="inner">
                <ul>
                    <li>
                        <a class="thumb" href="images/firstpage/samsung.png" onclick="Redirect1();"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/firstpage/htc.png" onclick="Redirect2();"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/firstpage/nokia.jpg" onclick="Redirect3();"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/firstpage/apple.png" onclick="Redirect4();"></a>
                    </li>
                    <li>
                       <a class="thumb" href="images/firstpage/motorola.png" onclick="Redirect5();"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/firstpage/asus.jpg" onclick="Redirect6();"></a>
                    </li>  
                </ul>
            </div>
   </div>
</div>

	</body>
</html>
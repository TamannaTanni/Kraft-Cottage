<?php  include 'connection.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
<style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}
form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}
h1 {
  text-align: center;
  padding: 0 0 20px 0;
}
input[type="text"],
input[type="file"],
input[type="price"],
input[type="date"],
textarea,
select{
  background: rgba(255,255,255,0.1);
  background-color: #e8eeef;
  border-radius: 3px;
  font-size: 16px;
  height: auto;
  width: 100%;
  padding: 5px;
  margin: 0;
  margin-bottom: 30px;
  outline: 0;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0, .03) inset;
  border: 2px solid;
  border-color: #ccc;
  transition: border-color, .6s;
}
input[type="des"],
textarea,
select{
  background: rgba(255,255,255,0.1);
  background-color: #e8eeef;
  border-radius: 3px;
  font-size: 16px;
  height: 100px;
  width: 100%;
  padding: 5px;
  margin: 0;
  margin-bottom: 30px;
  outline: 0;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0, .03) inset;
  border: 2px solid;
  border-color: #ccc;
  transition: border-color, .6s;
}
input[type="text"]:focus,
input[type="file"]:focus,
input[type="price"]:focus,
input[type="date"]:focus,
input[type="des"]:focus,
textarea:focus,
select:focus {
  border-color: #5fcf80;
}
label {
  display: block;
  margin-bottom: 8px;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}
select {
  height: 32px;
  padding: 6px;
}
label.light {
  display: inline;
  font-weight: 300;
}
button {
  width: 100%;
  background-color: #18C9D2;
  color: #fff;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border: 1px solid #18C9D2;
  border-radius: 5px;
  border-width: 1px 1px 3px;
  padding: 19px 39px 18px 39px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}
fieldset {
  border: none;
  margin-bottom: 30px;
}
.number {
  display: inline-block;
  height: 30px;
  width: 30px;
  color: #fff;
  font-size: .8em;
  text-align: center;
  line-height: 30px;
  margin-right: 4px;
  border-radius: 100%;
  background-color: #18C9D2;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
}
legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}
@media screen and (min-width: 480px) {
  form {
    max-width: 480px;
  }
}
</style>
<title>Kraft Cottage</title>
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.1.min.js"></script>
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <script src="js/scripts.js" type="text/javascript"></script>
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
</head>
<body>
<div class="top_bg" id="home">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="seller.php">Register an Account</a></li>
          <li><a href="#">
            <?php
            error_reporting(0);
            session_start();
            $susername = $_SESSION['susername'];
            $sid = $_SESSION['sid'];
            $_SESSION['sid'] = $sid;
            if(isset($_SESSION['susername']))
              echo '<span>Welcome -- '.$susername.' </span>';
            ?></a>
          </li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
      <div class="top_left">
        <span class="top_right"> <a class="header_top" style ="color:white;" href="login1.php">Feedback .</style></a> | Call us : +8801*********</span>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header_bg">
   <div class="container">
	<div class="header">
	  <div class="head-t">
		 <div class="logo">
			  <a href="index.php"><h1><i>Kraft Cottage</i></h1> </a>
		  </div>
		  <div class="header_right">
			<div class="cart box_1">
				<div>
				<a  href="login1.php"><img src="images/cart1.png" width="50px" height="50px" /></a></div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"></div>
	    </div>
		<ul class="megamenu skyblue">
      <li class="active grid"><a class="color1" href="index.php"><i class="material-icons" style="font-size:15px;">home</i>Home</a></li>
				<li><a class="color6" href="login1.php">Raw Materials</a></li>
				<li><a class="color8" href="login1.php">Category</a></li>
				<li><a class="color9" href="login1.php">Brand</a></li>
				<li><a class="color9" href="login1.php">Craft Gossip</a></li>
                <li>
				<form action="#" method="post">
				</form>
				</li>
			</li>
		 </ul>
	</div>
</div>
</div>
	<div class="products">
<form action="pup.php" method="post">
  <h1>Product Upload</h1>
  <fieldset>
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="p_name" />

    <label for="file">Enter File:</label>
    <input type="file" id="file" name="p_image">

    <label for="passw">Price:</label>
    <input type="price" id="price" pattern="[0-9]+" name="p_price" require title="Format:XXX Only number allowed" value=""/>

    <label for="type">Product Category:</label>
    <input type="text" id="type" name="p_type" />

    <label for="raw">Product's Raw Materials:</label>
    <input type="text" id="raw" name="p_raw" />

    <label for="brand">Product Brand:</label>
    <input type="text" id="brand" name="p_brand"/>

	  <label for="passw">Date:</label>
    <input type="date" pattern="d{4}\[\-]\d{2}\[\-]\d{2}" id="date" name="p_date" require title="Format: YY-MM-DD"/>

    <label for="Description">Product's Details:</label>
    <input type="des" id="des" name="p_des"/>

    <button type="submit">Upload</button>
</form>
	</div>
              <div class="scroll-slider">
                <div class="container">
          <div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">
          <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li>
          <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li>
          <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li>
          <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li>
          <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li>
          <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li>
          <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li>
          <li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li>
        </ul>
        <div class="nbs-flexisel-nav-left" style="top: 21.5px;"></div><div class="nbs-flexisel-nav-right" style="top: 21.5px;">
        </div>
      </div>
    </div>
          <div class="clearfix"> </div>
            <script type="text/javascript" src="js/jquery.flexisel.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $(".flexiselDemo3").flexisel({
                    visibleItems: 5,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 2
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 3
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });
            });
            </script>
      </div>
  </div>
   <div class="footer">
   <div class="container">
  <div class="footer-top">
    <div class="col-md-2 footer-left">
      <h3>About Us</h3>
      <ul>
        <li><a href="feedbackshow.php">Feedback from Users</a></li>
        <li><a href="login1.php">Contact Us</a></li>
        <li><a href="#">.</a></li>
      </ul>
    </div>

    <div class="clearfix"> </div>
  </div>
</div>
</div>
<ul class="socials">
        <li><a class="soc1" href="https://www.facebook.com"></a></li>
        <li><a class="soc2" href="https://twitter.com"></a></li>
    </ul>
<div class="copy">
<div class="container">
  <p>&copy; Kraft Cottage 2019 All Rights Reserved </p>
</div>
</div>
        <script type="text/javascript">
              $(document).ready(function() {
                $().UItoTop({ easingType: 'easeOutQuart' });
              });
            </script>
</body>
</html>

<!DOCTYPE HTML>
<html>
<head>
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
<script src="js/bootstrap.js"> </script>
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
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
          <li><a href="person.php">
						<?php
						error_reporting(0);
						session_start();
						$username = $_SESSION['username'];
						$id = $_SESSION['id'];
						$_SESSION['id'] = $id;
						if(isset($_SESSION['username']))
							echo '<span>Welcome -- '.$username.' </span>';
						?></a>
					</li>
					<li><a href="logout.php">Log Out</a></li>
				</ul>
			</div>
			<div class="top_left">
        <span class="top_right"> <a class="header_top" style ="color:white;" href="feedback.php">Feedback .</style></a> | Call us : +8801*********</span>
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
			  <a href="afterlogin.php"><h1><i>Kraft Cottage</i></h1> </a>
		  </div>
		  <div class="header_right">
			<div class="cart box_1">
				<div>
				<a  href="cart.php"><img src="images/cart1.png" width="50px" height="50px" /></a></div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"></div>
	    </div>
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="afterlogin.php"><i class="material-icons" style="font-size:15px;">home</i>Home</a></li>
				<li><a class="color6" href="raw.php">Raw Materials</a></li>
				<li><a class="color8" href="cat.php">Category</a></li>
				<li><a class="color9" href="brand.php">Brand</a></li>
        <li><a class="color9" href="Blog.php">Craft Gossip</a></li>
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
		<div class="container">
			<div class="products-grids">
				<div class="col-md-8 products-single">
				<div class="col-md-5 grid-single">
						<div class="flexslider">
							  <ul class="slides">
								<?php
								include 'connection.php';
								$product_id = $_GET['p'];
								$sql = " SELECT * FROM products ";
								$sql = " SELECT * FROM products WHERE p_id = $product_id";
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0)
								{
								while($row = mysqli_fetch_assoc($result))
								{
								echo '
									<li data-thumb="'.$row['p_image'].'">
										<div class="thumb-image"> <img src="'.$row['p_image'].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
									</li>
									<li data-thumb="'.$row['p_image'].'">
										<div class="thumb-image"> <img src="'.$row['p_image'].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
									</li>
									<li data-thumb="'.$row['p_image'].'">
									<div class="thumb-image"> <img src="'.$row['p_image'].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
									</li>
									</ul>
								</div>';
								?>
									<script src="js/imagezoom.js"></script>
									<script defer src="js/jquery.flexslider.js"></script>
									<script>
									$(window).load(function() {
									  $('.flexslider').flexslider({
										animation: "slide",
										controlNav: "thumbnails"
									  });
									});
									</script>
								<?php
								echo '
								</div>
								<div class="col-md-7 single-text">
									<div class="details-left-info simpleCart_shelfItem">
									<form action="order_confirm.php" method="post">
									<fieldset>
									<h2>Enter your details:</h2>
									<br>
									<h4>Full Name:-</h4> <input type="text" size="30" name="fullname" pattern="[a-zA-Z]+" title="Only alphabets allowed" required>
									<h4>Delivery Address:-</h4> <textarea rows="3" cols="30" name="address" required></textarea>
									<h4>Pin Code:-</h4> <input type="text" size="4" name="pincode" pattern="\d{4}" title="4 digit postal code" required>
									<h4>City:-</h4> <input type="text" size="15" name="city" pattern="[a-zA-Z]+" title="Only alphabets allowed" required>
									<h4>District:-</h4> <input type="text" size="30" name="state" pattern="[a-zA-Z]+" title="Only alphabets allowed" required>
									<h4>Mobile No.:-</h4> <input type="tel" name="mobile" pattern="[\+]\d{13}" require title="Format: +8801XXXXXXXXX" value="+8801" required>
									<br><br>
									<h2>Payment Method:</h2> <br>
									<input type="radio" checked> Cash on Delivery (COD)<br>
									<input type="radio" unchecked> Card Payment / Netbanking
									<br><br>';
									echo ".<input type='text' name='product_id' value='$product_id' hidden>";
									echo '
									<button type="submit">Order Now</button>
									</form>
									<div class="clearfix"> </div>
									<div class="single-but item_add">
									<a href="#"></a>
									</div>
									</div>
								</div>';
								$_SESSION['p_id'] = $row['p_id'];
								}
								}
								?>
								<div class="clearfix"></div>
	</div>
	<div class="col-md-4 products-grid-right">
					<div class="w_sidebar">
						<div class="w_nav1">
							<h4><a href="#">Your Product:</a></h4>
							<ul>
								<li>
								<?php
								include 'connection.php';
								$product_id = $_GET['p'];
								$sql = " SELECT * FROM products ";
								$sql = " SELECT * FROM products WHERE p_id = $product_id";
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
								echo '
								<h1>'.$row['p_name'].'</h1><br><h2><a href="#">Price:</a></h2><h2><span>$. '.$row['p_price'].' TK</span></h1>';
								}
								}
								?></li>
							</ul>
						</div>
						<section  class="sky-form">
							<h4></h4>
							<div class="row1 scroll-pane">
								<div class="col col-4">
								</div>
							</div>
						</section>
					</div>
				</div>
				<div class="clearfix"></div>
	</div>
			</div>
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
        <li><a href="#">Contact Us</a></li>
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
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>

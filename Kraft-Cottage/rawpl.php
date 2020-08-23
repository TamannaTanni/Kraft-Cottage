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
				<div class="col-md-8 products-grid-left">

					<div class="products-grid-lft">
					<?php
					include 'connection.php';
					if(isset($_GET['filter_price']))
					{
						$price = $_GET['filter_price'];
						if($price == 0)
						$sql = " SELECT * FROM products WHERE p_raw LIKE 'Plastics'";
						if($price == 1)
						$sql = " SELECT * FROM products WHERE p_price < 500 AND p_raw LIKE 'Plastics'";
            if($price == 2)
						$sql = " SELECT * FROM products WHERE p_price BETWEEN 500 AND 1000 AND p_raw LIKE 'Plastics'";
						if($price == 3)
						$sql = " SELECT * FROM products WHERE p_price BETWEEN 1000 AND 2000 AND p_raw LIKE 'Plastics'";
            if($price == 4)
						$sql = " SELECT * FROM products WHERE p_price > 2000 AND p_raw LIKE 'Plastics'";

             if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
						}
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
							echo '
							<div class="products-grd">
								<div class="p-one simpleCart_shelfItem prd">
									<a href="single.php">
											<img src="'.$row["p_image"].'" alt="" class="img-responsive" />
									</a>
                  <h4>Name:	'.$row["p_name"].'</h4>
                  <h4>Category:	'.$row["p_type"].'</h4>
                  <h4>Raw Materials:	'.$row["p_raw"].'</h4>
                  <h4>Brand:	'.$row["p_brand"].'</h4>
                  <h4>'.$row["p_date"].'</h4>
                  <p><a class="item_add" href="addcart.php?mycart='.$row['p_id'].'&userid='.$id.'"><span class=" item_price valsa">$. '.$row["p_price"].' TK .</span><img src="images/cartadd.png"></img> </a></p>
                  <div class="pro-grd">
										<a href="single.php?p='.$row['p_id'].'">Quick View</a>
									</div>
								</div>
							</div>';
							}
						}
						else{
							echo "Sorry No Products fits your Budget...";
						}
					}
					else
					{
						$sql = " SELECT * FROM products WHERE p_raw LIKE 'Plastics'";
						if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
						}
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
								echo '
								<div class="products-grd">
									<div class="p-one simpleCart_shelfItem prd">
										<a href="single.php">
												<img src="'.$row["p_image"].'" alt="" class="img-responsive" />
										</a>
                    <h4>Name:	'.$row["p_name"].'</h4>
                    <h4>Category:	'.$row["p_type"].'</h4>
                    <h4>Raw Materials:	'.$row["p_raw"].'</h4>
                    <h4>Brand:	'.$row["p_brand"].'</h4>
                    <h4>'.$row["p_date"].'</h4>
                    <p><a class="item_add" href="addcart.php?mycart='.$row['p_id'].'&userid='.$id.'"><span class=" item_price valsa">$. '.$row["p_price"].' TK .</span><img src="images/cartadd.png"></img> </a></p>
                    <div class="pro-grd">
  										<a href="single.php?p='.$row['p_id'].'">Quick View</a>
										</div>
									</div>
								</div>';
							}
						}
					}
					?>
					<div class="clearfix"> </div>
        </div>

    	</div>
				<div class="col-md-4 products-grid-right">
					<div class="w_sidebar">
						<div class="w_nav1">
							<h4><a href="afterlogin.php">All</a></h4>
							<ul>
								<li><a href="raw.php">Raw Materials</a>
  									<li><a href="raw.php">Paper</a></li>
  									<li><a href="raww.php">Wood</a></li>
                    <li><a href="rawpl.php">Plastics</a></li>
  									<li><a href="rawcl.php">Clothy</a></li>
  									<li><a href="rawr.php">Rope</a></li>
  									<li><a href="rawth.php">Thread</a></li>
                </li>
							</ul>
						</div>
						<section  class="sky-form">
							<h4>Price</h4>
							<div class="row1 scroll-pane">
								<div class="col col-4">
								<form action="#" method="get" name="filter_price">
									<label class="radio"><input type="radio" name="filter_price" value="0"><i></i>All</label>
									<label class="radio"><input type="radio" name="filter_price" value="1"><i></i>Below 500</label>
									<label class="radio"><input type="radio" name="filter_price" value="2"><i></i>500 - 1000</label>
									<label class="radio"><input type="radio" name="filter_price" value="3"><i></i>1000 - 2000</label>
									<label class="radio"><input type="radio" name="filter_price" value="4"><i></i>Above 2000</label>
									<input type="submit" name="submit" value="Submit"/>
								</form>
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

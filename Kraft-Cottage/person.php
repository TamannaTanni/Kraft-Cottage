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
 <!--start-content-->
 <?php
 include 'connection.php';
 if(isset($_GET['remove']))
 {
   $id = $_GET['remove'];
   $sql1 = "Delete from users where id = $id";
   $result1 = mysqli_query($conn, $sql1);
 }
 if(isset($_GET['remove1']))
 {
   $oid = $_GET['remove1'];
   $sql = "Delete from orders where p_id = $oid";
   $result = mysqli_query($conn, $sql);
 }
 ?>
<!-- products -->
	<div class="products">
		<div class="container">
			<div class="products-grids">
				<div class="col-md-8 products-single">
          <div class="col-md-5 grid-single">
  						<div class="flexslider">
          <table style="text-align:center; border-right: 5px solid " border=".5">
          <tbody style=" font-size:20px; border: 3px solid #18C9D2; ">
          				<tr style="border: 3px solid #18C9D2;">
          				<th><center><strong>Product Name</strong></center></th>
          				<th><center><strong>Image</strong></center></th>
          				<th><center><strong>Price</strong></center></th>
          				<th><center><strong>Type</strong></center></th>
                  <th><center><strong>Raw Materials</strong></center></th>
                  <th><center><strong>Brand</strong></center></th>
          				</tr>
          								<?php
          								include 'connection.php';
          								$s = " SELECT p_id FROM orders";
                          $sql="SELECT * FROM products where p_id==$s";
          								if (!$conn) {
          								die("Connection failed: " . mysqli_connect_error());
          								}
          								$result = mysqli_query($conn, $sql);
          								if (mysqli_num_rows($result) > 0)
          								{
          								while($row = mysqli_fetch_assoc($result))
          								{
          								echo '
          								<tr>
          								<td width=35% style="padding: 4%;"><strong>'.$row["p_name"].'</strong></td>
          								<td style= "background-color:#f7f7f7; padding:1%" data-thumb="'.$row['p_image'].'">
          									 <div class="thumb-image"> <img src="'.$row['p_image'].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
          								</td>
          								<td width=10%><strong>'.$row["p_price"].'</strong></td>
                          <td width=10%><strong>'.$row["p_type"].'</strong></td>
                          <td width=10%><strong>'.$row["p_raw"].'</strong></td>
                          <td width=10%><strong>'.$row["p_brand"].'</strong></td>
                          </tr>
          								<tr width=25%><a href="person.php?remove1='.$row["p_id"].'" class="btnRemoveAction"><img src="images/cartrmv.png" width="100" height="40"></img></a>
          								</tr>';
          								}
          								}
          								else
          								{
          									echo "<tr><td colspan=4><center><a href='#'><h1>No Order<h1></a></center></td></tr>";
          								}
          								?>
          </tbody>
          </table>
        </div>
      </div>


  <div class="col-md-4 products-grid-right">
					<div class="w_sidebar">
						<div class="w_nav1">

              <?php
              include 'connection.php';
              {
                $sql = " SELECT * FROM users WHERE id = $id";
                if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                }
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {
                  while($row = mysqli_fetch_assoc($result))
                  {
                    echo '
                        <h1>Name:	'.$row["username"].'</h1>
                        <h2>Email:	'.$row["email"].'</h2>
                        <h2>Mobile:	'.$row["mobile"].'</h2>
                        <h2>Password:	'.$row["password"].'</h2>
                        <button><a href="person.php?remove='.$row["id"].'" class="btnRemoveAction"> Account Delete </a></button>';
                 }
                }
              {
                $sql1 = " SELECT * FROM orders WHERE uid = $id";
                if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                }
                $result1 = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($result1) > 0)
                {
                  while($row = mysqli_fetch_assoc($result1))
                  {
                    echo '
                        <h2>Address:	'.$row["address"].'</h2>
                        <h2>City:	'.$row["city"].'</h2>';
                  }
                }
              }
            }
              ?>
              <div class="clearfix"> </div>

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

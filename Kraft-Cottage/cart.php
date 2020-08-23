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
</head>
<body>
<style>
input[type="text"],
select{
  float:right;
  background: rgba(255,255,255,0.1);
  background-color: #e8eeef;
  border-radius: 3px;
  font-size: 13px;
  height: auto;
  width: 30%;
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
select:focus {
  border-color: #5fcf80;
}
body{width:100%;}
.txt-heading{padding: 5px 10px;font-size:1.1em;font-weight:bold;color:#18C9D2;}
.btnRemoveAction{color:#D60202;border:0;padding:2px 10px;font-size:0.9em;}
#btnEmpty{background-color:#D60202;border:0;padding:1px 10px;color:#FFF; font-size:0.8em;font-weight:normal;float:right;text-decoration:none;}
.btnAddAction{background-color:#79b946;border:0;padding:3px 10px;color:#FFF;margin-left:1px;}
#shopping-cart {border-top: #ffffff 2px solid;margin-bottom:30px;}
#shopping-cart .txt-heading{background-color:#dddddd;}
#shopping-cart table{width:85%;background-color:#F0F0F0;border:1}
#shopping-cart table td{background-color:#f2f2f2;}
.cart-item {border-bottom: #79b946 1px dotted;padding: 10px;}
</style>
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
					<li><a href="logout.php">Logout</a></li>
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
								<?php
								include 'connection.php';
								if(isset($_GET['remove']))
								{
									$r_id = $_GET['remove'];
									$sql = "Delete from cart where c_id = $r_id";
									$result = mysqli_query($conn, $sql);
								}
								if(isset($_GET['empty']))
								{
									$sql = "Truncate cart";
									$result = mysqli_query($conn, $sql);
								}
								?>

<center>
<div id="shopping-cart" >
<div style="background-color:#18C9D2; width:85%; font-size:25px;">Shopping Cart<a id="btnEmpty" href="cart.php?empty=1"><img src="images/cartempty.png"></img></a></div>
<table style="text-align:center; border-right: 5px solid " border="1">
<tbody style=" font-size:20px; border: 3px solid #18C9D2; ">
				<tr style="border: 3px solid #18C9D2;">
				<th><center><strong>Name</strong></center></th>
				<th><center><strong>Image</strong></center></th>
				<th><center><strong>Price</strong></center></th>
				<th><center><strong>Action</strong></center></th>
				</tr>
								<?php
								include 'connection.php';
								$sql = " SELECT * FROM cart";
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
								<td width=35% style="padding: 4%;"><strong>'.$row["c_name"].'</strong></td>
								<td style= "background-color:#f7f7f7; padding:1%" data-thumb="'.$row['c_image'].'">
									 <div class="thumb-image"> <img src="'.$row['c_image'].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</td>
								<td width=10%><strong>$. '.$row["c_price"].'TK</strong></td>
								<td width=25%><a href="cart.php?remove='.$row["c_id"].'" class="btnRemoveAction"><img src="images/cartrmv.png" width="100" height="40"></img></a>
									<a href="order.php?p='.$row["c_p_id"].'&userid='.$id.'"><img src="images/cartodrnw.png" width="100" height="40"></img></a>
								</td>
								</tr>';
								}
								}
								else
								{
									echo "<tr><td colspan=4><center><a href='#'><img src='images/cartnoitem.gif'></img></a></center></td></tr>";
								}
								?>
					<tr>
					<?php $sql = " SELECT sum(c_price) total FROM cart WHERE c_u_id = $id";
							$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
								$item_total = $row['total'];
								}
							} ?>
				<td class="txt-heading" colspan="5" align="right"><strong>Total = </strong>$. <?php if($item_total==0) echo '0'; else echo $item_total; ?> TK</td>

            <td><a href="order.php?p='.$row["c_p_id"].'&userid='.$id.'"><img src="images/cartodrnw.png" width="100" height="40"></img></a>
        </td>
			</tr>
</tbody>
</table>
</div>
</div>
</center>
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

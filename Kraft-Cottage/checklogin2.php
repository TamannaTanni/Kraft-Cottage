<?php
session_start();
include 'connection.php';
if (isset($_POST['suser_name']) && isset($_POST['suser_password']))
{
	$susername = $_POST['suser_name'];
	$spassword = $_POST['suser_password'];
   $query = "SELECT * FROM susers WHERE susername='$susername' and spassword='$spassword'";
	$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$count = mysqli_num_rows($result);
	if (mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$sid = $row['sid'];
		}
	}
	if ($count == 1)
	{
		$_SESSION['susername'] = $susername;
		$_SESSION['sid'] = $sid;
	}
	else
	{
		echo "Error in login";
		echo '<br><a href="login1.php">Go Back To Login</a>';
	}
}
if (isset($_SESSION['susername']))
{
		$_SESSION['sid'] = $sid;
		header('Location:ques2.php');
}
?>

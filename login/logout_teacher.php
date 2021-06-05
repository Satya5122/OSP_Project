<?php

session_start();
$con=mysqli_connect('localhost','root','','college_db');
mysqli_query($con,"update active_page_teacher set status=-1 where status=1");
if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

header("Location: index.php");
die;
?>
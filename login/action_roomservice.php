<?php
$con=mysqli_connect('localhost','root','','college_db');
mysqli_query($con,"update active_page set status=-1 where status=1");
mysqli_query($con,"update active_page set status=1 where page_name='room-service'");
header("Location: studentHomePage.php" );
?>
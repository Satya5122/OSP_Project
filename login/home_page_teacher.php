<?php
$con=mysqli_connect('localhost','root','','college_db');
mysqli_query($con,"update active_page_teacher set status=-1 where status=1");
header("Location: teacherHomePage.php" );
?>
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login_student($con);
    $student_name = $user_data['student_name'];
    $student_id= $user_data['student_reg_no'];
    ?> 
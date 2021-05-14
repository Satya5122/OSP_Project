<?php
$teacher_name=$_POST['teacher_name_selection'];
include('connection.php');

// getting teacher id
$query="select emp_id from teacher where teacher_name = '$teacher_name'";$teacher_id=mysqli_fetch_array(mysqli_query($con,$query))['emp_id'];

// getting student id
$student_id=$_POST['student_id_data'];

// getting the message
$message=$_POST['reason'];

// setting default Status
$status=0;

$query="insert into appointments (emp_id,student_reg_no,message,status) 
VALUES ('$teacher_id','$student_id','$message','$status')"; 
if($result=mysqli_query($con,$query))
{
echo "<script>
window.location='http://localhost/OSP_Project/login/studentHomePage.php#';
</script>
";
}
?>
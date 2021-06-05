<?php
$sno=$_POST['sno'];
$con=mysqli_connect('localhost','root','','college_db');
       
$btn_num=1;
$teacher_id=$_POST['emp_id'];
while($btn_num<$sno)
{
    $btn='btnradio'.(String)$btn_num;
    $btn_value= $_POST["$btn"];
   $stud_reg_no=$_POST['stud_reg_no_'.(String)$btn_num];
  
   
  
    if($btn_value==1)
    {
      
        mysqli_query($con,"update appointments set status=1 where student_reg_no='$stud_reg_no' and emp_id='$teacher_id'");
        
    }
    else if ($btn_value==-1)
    {
       echo "-1";
        mysqli_query($con,"update appointments set status=-1 where student_reg_no='$stud_reg_no' and emp_id='$teacher_id'");
    }
    else {
        echo "not done";
    }
    $btn_num+=2;
}
header("Location: teacherHomePage.php" );
?>
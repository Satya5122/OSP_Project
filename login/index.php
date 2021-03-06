<?php
session_start();
if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>
    Vellore Institute of Technology(VIT)
  </title>
  <link rel="icon" type="image/png" href="images/vitlogo.png">
  <script type="text/javascript">
         function student_login_redirect()
         {
          window.location="http://localhost/OSP_Project/login/student.php";
         }
         function teacher_login_redirect()
         {
           window.location="http://localhost/OSP_Project/login/teacherLogin.php";
         }
      </script>
</head>

<body>
  <nav class="navbar navbar-light navbar-expand{-sm|-md|-lg|-xl|-xxl} bg-gradient"
    style="background-color:cornflowerblue">

    <div class="container-fluid">
      <a href="#" class="navbar-brand"><img src="images/logo.PNG" class=" rounded border-0" alt="VIT Vellore"
          id="LOGO"></a>

    </div>
  </nav>
  <div class="container">
    <div class="pt-5 row gy-4">
      <a id="student_login"><button onclick="student_login_redirect()" class="btn btn-primary"> STUDENT LOGIN</button></a>
      
      <a id="teacher_login"><button onclick="teacher_login_redirect()"class="btn btn-primary"> TEACHER LOGIN</button></a>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>
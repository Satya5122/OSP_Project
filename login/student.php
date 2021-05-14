<?php 

session_start();

	include("connection.php");
	include("functions.php");

    
    
    if(isset($_SESSION['user_id']))
    {
        unset($_SESSION['user_id']);
    
    }
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['passwd'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from student where student_reg_no = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['student_passwd'] === $password)
					{

						$_SESSION['user_id'] = $user_data['student_reg_no'];
						header("Location: studentHomePage.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
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

    <title>
        Vellore Institute of Technology(VIT)
    </title>
    <link rel="icon" type="image/png" href="images/vitlogo.png">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }

        body {
            background: rgb(234, 245, 242);
        }

        .row {
            background: white;
            border-radius: 30px;
        }

        img {
            border-radius: 30px;
            height: 500px;
        }

        .btn {
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: rgb(94, 183, 243);
            color: black;
            border-radius: 4px;
            font-weight: bold;

        }

        .btn:hover {
            background-color: rgb(61, 250, 234);
        }
    </style>
</head>

<body>
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/studentLogin/student_login.jpg" class="d-block w-100 im-fluid"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/studentLogin/student_login.PNG" class="d-block w-90 im-fluid"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/studentLogin/studentloginpage.PNG" class="d-block w-100 im-fluid"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 py-5 pt-5">
                    <h1 class="font-weight-bold pt-5">STUDENT LOGIN</h1>
                    <form  method="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" name="user_name" class="form-control my-3 p-2"
                                    placeholder="Registration number">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="passwd" class="form-control my-3 p-2"
                                    placeholder="************">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button class="btn mt-3 mb-5">Login</button>
                            </div>
                        </div>
                        <a href="">Forgot password</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
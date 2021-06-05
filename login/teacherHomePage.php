<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login_teacher($con);
    $emp_name = $user_data['teacher_name'];

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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
        .tab_content {
            background: white;
            border: 1px solid black;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        #employee_name {
            color:black;
        }
    </style>
    <link href="css/sidebar.css" rel="stylesheet">
    <script>
        $(document).ready(function () {
           
            $(".hide_this").hide();
            $show_class="<?php
            $con=mysqli_connect('localhost','root','','college_db');
            $query="select page_name from active_page_teacher where status=1";
            $result=mysqli_query($con,$query);
            $value=mysqli_fetch_array($result);
            if($value!="")
            {
                echo $value['page_name'];
            }
            else
            {
                echo "main_tab";
            }
            ?>";
            $(".content .tab_content").hide();
            $("."+$show_class).show();
            
            
        });
        
    </script>
    
    <style>
input{
    background-color: WHITE;
}

</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"><img src="images/logo.PNG" class=" rounded border-0" alt="VIT Vellore"
                    id="LOGO"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"href="home_page_teacher.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Essentials
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li><a class="dropdown-item" href="#">Course Page</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="sidebar-data" contentFrom="student_appointment"><form class="dropdown-item" action="action_student_appointment.php">
                            <input style="border-style: none; " type="submit" value="Student Appoinment">
                            </form></li>


                            <li>
                                <hr class="dropdown-divider">
                            </li>


                            <li class="sidebar-data" contentFrom="teacher_room"><form class="dropdown-item" action="action_room_teacher.php">
                            <input style="border-style: none; " type="submit" value="Room Maintenance">
                            </form></li>
                        </ul>
                    </li>


                </ul>
                <?php
                echo "<a class='p-2' style='color:black;'>$emp_name</a>
                "
                ?>
                <a href="logout_teacher.php" > <button class="btn btn-danger"> Log Out </button></a>
                <!--<form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-2">
            <div class="sidebar">
                <div class="p-1 bg-white" style="width: 200px; float: left;">

                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#contactUs-collapse" aria-expanded="false">
                                Contact Us
                            </button>
                            <div class="collapse" id="contactUs-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Email</a></li>
                                    <li><a href="#" class="link-dark rounded">Phone</a></li>
                                    <li><a href="#" class="link-dark rounded">Website</a></li>
                                    <li><a href="#" class="link-dark rounded">Social Media</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                My Info
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Profile</a></li>
                                    <li><a href="#" class="link-dark rounded">Your Credentials</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#infoCorner-collapse" aria-expanded="false">
                                Info Corner
                            </button>
                            <div class="collapse" id="infoCorner-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">FAQ</a></li>
                                    <li><a href="#" class="link-dark rounded">SpotLight</a></li>
                                    <li><a href="#" class="link-dark rounded">View Circulars</a></li>

                                </ul>
                            </div>
                        </li>

                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#Academics-collapse" aria-expanded="false">
                                Academics
                            </button>
                            <div class="collapse" id="Academics-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">



                                    <li><a href="#" class="link-dark rounded">Class Message</a></li>



                                    <li><a href="#" class="link-dark rounded">Time Table</a></li>

                                    <li><a href="#" class="link-dark rounded">Class Attendance</a></li>

                                    <li><a href="#" class="link-dark rounded">Digital assignment marks</a></li>

                                    <li><a href="#" class="link-dark rounded">Academic Calendar</a></li>

                                </ul>
                            </div>
                        </li>

                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#Examination-collapse" aria-expanded="false">
                                Examination
                            </button>
                            <div class="collapse" id="Examination-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Exam Schedule</a></li>
                                    <li><a href="#" class="link-dark rounded">Student Marks</a></li>




                                </ul>
                            </div>
                        </li>

                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#Library-collapse" aria-expanded="false">
                                Library
                            </button>
                            <div class="collapse" id="Library-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Scanning Request</a></li>
                                    <li><a href="#" class="link-dark rounded">My Keys</a></li>


                                </ul>
                            </div>
                        </li>



                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#Hostel-collapse" aria-expanded="false">
                                Hostels
                            </button>
                            <div class="collapse" id="Hostel-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

                                    <li><a href="#" class="link-dark rounded">Room Details</a></li>
                                    <li><a href="#" class="link-dark rounded">Mess Selection 2021-2022</a></li>
                                    <li><a href="#" class="link-dark rounded">Mess Change</a></li>



                                </ul>
                            </div>
                        </li>
                        <!-- <li class="border-top my-3"></li>-->

                    </ul>
                </div>
            </div>

        </div>

        <div class="content col-10">
        <div class="tab_content main_tab">
        
        </div>
            <!--This is student appointment-->
            <div class="tab_content student_appointment" id="student_appoinment_data">
                <div class="container">
                <form method="POST" action="appointment_validation.php">
                        <table class="table" id="student_appointments_recieved">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Regestration Number</th>
                                    <th scope="col">Reason</th>
                                    <th scope="col">Approval</th>
                                    <th scope="col">Message</th>
                                </tr>
                            </thead>
                            <tbody class="student-applications">
                            <?php
                    $con=mysqli_connect('localhost','root','','college_db');
                    $emp_id=$user_data['emp_id'];
                    $result=mysqli_query($con,"select student_reg_no,message from appointments where emp_id='$emp_id' and status=0");
                    $sno=1;
                    $row_no=1;
                    $emp_id=$user_data['emp_id'];
                        echo "<input name='emp_id' type='text' class='hide_this' value=$emp_id>";
                    while($row=mysqli_fetch_array($result))
                    {
                        $message=$row['message'];
                        $student_reg_no=$row['student_reg_no'];
                        $student_data=mysqli_query($con,"select student_name from student where student_reg_no='$student_reg_no'");
                        $student_name=mysqli_fetch_array($student_data)['student_name'];
                        
                        echo '<tr>
                        <th scope="row">'; echo "$row_no"; echo'</th>
                        <td>'; echo "$student_name"; echo '</td>
                        <td>';
                        echo "<input name='stud_reg_no_"; echo"$sno"; echo"' type='text' class='hide_this' value=$student_reg_no>";
                        
                        echo"$student_reg_no";
                       
                        echo '</td>
                        <td>';
                        echo "$message";         
                       echo "</td>

                        <td>
                            <div class='btn-group' role='group'
                                aria-label='Basic radio toggle button group'>
                                <input type='radio' class='btn-check' name='btnradio"; echo"$sno"; echo"' id='student"; echo"$sno"; echo"'
                                    autocomplete='off'  value=1> 
                                <label class='btn btn-outline-primary' for='student"; echo"$sno"; echo"'>Approved</label>

                                <input type='radio' class='btn-check' name='btnradio"; echo"$sno"; echo"' id='student"; echo"$sno+1"; echo"'
                                    autocomplete='off' value=-1>
                                <label class='btn btn-outline-primary' for='student"; echo"$sno+1"; echo"'>Denied</label>


                            </div>
                        </td>
                        <td><input type='text' class='form-control'></td>
                    </tr>";
                    $sno=$sno+2;
                    $row_no+=1;
                    echo '>';

                    }
                    echo "<input name='sno' type='number' class='hide_this' value=$sno> ";
                    ?>
                            </tbody>
                        </table>
                        <input class="btn btn-success mb-3 submit_student_appointments" id="" type="submit" value="Validate Appointments">
                    </form>
                    
                </div>

            </div>

            <!--This is Room maintenance-->
            <div class="tab_content teacher_room">
                <div class="container">
                    <form method="POST">
                        <h1 Style="text-align:left; color:rgba(1, 162, 255, 0.479);">Room Maintenance</h1>
                        <label class="py-2 mb-3" type="form-label" for="room-maintenance" style="background-color: #d2f4ea;align-items: center;
                        padding: .25rem .5rem;font-weight: 600;color: rgba(0, 0, 0, .65);border-radius: 30px;">Room
                            Service</label>
                        <div class="input-group mb-3" id="room-maintenance">
                            <div class="btn-group" role="group">
                                <input type="checkbox" class="btn-check" id="room-service-room-cleaning"
                                    autocomplete="off">
                                <label class="btn btn-outline-primary" for="room-service-room-cleaning">Room
                                    Cleaning</label>

                                <input type="checkbox" class="btn-check" id="room-service-electrical-problem"
                                    autocomplete="off">
                                <label class="btn btn-outline-primary" for="room-service-electrical-problem">Electrical
                                    Problem</label>


                            </div>
                        </div>
                        <input type="submit" class="btn btn-success mb-3" value="Generate Token">
                    </form>
                </div>
            </div>
        </div>

    </div>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

</body>

</html>
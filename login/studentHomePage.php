<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login_student($con);
    $student_name = $user_data['student_name'];
    $student_id= $user_data['student_reg_no'];

    //teachers list
    $teacher_names=array();
    $query="select * from classroom where student_reg_no='$student_id'";
    $course_result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($course_result))
    {
        $course_id= $row['course_id'];
        $slot=$row['slot'];
        $query="select emp_id from course_table where slot='$slot' AND course_id='$course_id'";
        $teacher_id_result=mysqli_query($con,$query);
        $teacher_id=mysqli_fetch_array($teacher_id_result)['emp_id'];
        
        $query="select teacher_name from teacher where emp_id='$teacher_id'";
        $teacher_name_result=mysqli_query($con,$query);
        $teacher_name=mysqli_fetch_array($teacher_name_result)['teacher_name'];
        $num_rows=array_push($teacher_names,$teacher_name);

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
        #student_name{
            color:black;
        }
    </style>
    <link href="css/sidebar.css" rel="stylesheet">
    <script>
        $(document).ready(function () {
            $(".hide_this").hide();
            $(".content .tab_content").hide();
            $(".sidebar-data").click(function () {
                var current_tab = $(this).attr('contentFrom');
                $(".content .tab_content").hide();
                $("." + current_tab).show();
            });
            
        });
    </script>
    <script>
    function change_teacher() 
    {
        
                var teacher_name_data=$(this).value();
                $(.teacher_name).value=teacher_name_data;
            
    }
    </script>
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
                        <a class="nav-link active" aria-current="page" href="studentHomePage.html">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Essentials
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Digital Assignments</a></li>
                            <li><a class="dropdown-item" href="#">Course Page</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="sidebar-data" contentFrom="teacher-appointment"><a class="dropdown-item"
                                    href="#">Teacher Appointments</a></li>


                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="sidebar-data" contentFrom="latenight-permission"><a class="dropdown-item"
                                    href="#">Late Night Permission</a></li>
                            <li class="sidebar-data" contentFrom="room-service"><a class="dropdown-item" href="#">Room
                                    Maintenance</a></li>
                        </ul>
                    </li>


                </ul>
                <?php
                echo "<a class='p-2' style='color:black;'>$student_name</a>
                "
                ?>
                
                <a href="logout.php" > <button class="btn btn-danger"> Log Out </button></a>
                
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
                                    <li><a href="#" class="link-dark rounded">Day Boarder Info</a></li>
                                    <li><a href="#" class="link-dark rounded">Acknowledgement view</a></li>
                                    <li><a href="#" class="link-dark rounded">Student Bank Info</a></li>
                                    <li><a href="#" class="link-dark rounded">Digital ipad credentials</a></li>

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
                                data-bs-toggle="collapse" data-bs-target="#procter-collapse" aria-expanded="false">
                                Procter
                            </button>
                            <div class="collapse" id="procter-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Procter Details</a></li>
                                    <li><a href="#" class="link-dark rounded">Message from procter</a></li>

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
                                    <li><a href="#" class="link-dark rounded">HOD and Dean Info</a></li>
                                    <li><a href="#" class="link-dark rounded">Faculty Info</a></li>
                                    <li><a href="#" class="link-dark rounded">Biometric Info</a></li>
                                    <li><a href="#" class="link-dark rounded">Class Message</a></li>
                                    <li><a href="#" class="link-dark rounded">Regulation</a></li>
                                    <li><a href="#" class="link-dark rounded">My Curriculum</a></li>
                                    <li><a href="#" class="link-dark rounded">Minor/Honour</a></li>
                                    <li><a href="#" class="link-dark rounded">Time Table</a></li>
                                    <li><a href="#" class="link-dark rounded">Course Option Change</a></li>
                                    <li><a href="#" class="link-dark rounded">Course Withdraw</a></li>
                                    <li><a href="#" class="link-dark rounded">Class Attendance</a></li>
                                    <li><a href="#" class="link-dark rounded">Industrial Internship</a></li>
                                    <li><a href="#" class="link-dark rounded">Project</a></li>
                                    <li><a href="#" class="link-dark rounded">QCM View</a></li>
                                    <li><a href="#" class="link-dark rounded">SET Conference Regestration</a></li>
                                    <li><a href="#" class="link-dark rounded">Co-Extra Curricular</a></li>
                                    <li><a href="#" class="link-dark rounded">Wishlist Regestration</a></li>
                                    <li><a href="#" class="link-dark rounded">Academic Calendar</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#Research-collapse" aria-expanded="false">
                                Research
                            </button>
                            <div class="collapse" id="Research-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">My Search Profile</a></li>
                                    <li><a href="#" class="link-dark rounded">SEM Request</a></li>
                                    <li><a href="#" class="link-dark rounded">Course Work Regestration</a></li>
                                    <li><a href="#" class="link-dark rounded">Regestration Status</a></li>
                                    <li><a href="#" class="link-dark rounded">Meeting Info</a></li>
                                    <li><a href="#" class="link-dark rounded">Attendance View</a></li>
                                    <li><a href="#" class="link-dark rounded">ScholarLeave Request</a></li>
                                    <li><a href="#" class="link-dark rounded">Research Letters</a></li>

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
                                    <li><a href="#" class="link-dark rounded">Marks</a></li>
                                    <li><a href="#" class="link-dark rounded">Grades</a></li>
                                    <li><a href="#" class="link-dark rounded">Paper See/Rev</a></li>
                                    <li><a href="#" class="link-dark rounded">Grade History</a></li>
                                    <li><a href="#" class="link-dark rounded">Project File Upload</a></li>
                                    <li><a href="#" class="link-dark rounded">MOOC File Upload</a></li>
                                    <li><a href="#" class="link-dark rounded">ECA File Upload</a></li>
                                    <li><a href="#" class="link-dark rounded">EPT Schedule</a></li>
                                    <li><a href="#" class="link-dark rounded">Comprehensive</a></li>
                                    <li><a href="#" class="link-dark rounded">Arrear Details</a></li>
                                    <li><a href="#" class="link-dark rounded">Re-Exam Application</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#Services-collapse" aria-expanded="false">
                                Services
                            </button>
                            <div class="collapse" id="Services-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">PAT Regestration</a></li>
                                    <li><a href="#" class="link-dark rounded">Online Book Recommendation</a></li>
                                    <li><a href="#" class="link-dark rounded">Transcript Request</a></li>
                                    <li><a href="#" class="link-dark rounded">Achievements</a></li>
                                    <li><a href="#" class="link-dark rounded">Programme Migration</a></li>
                                    <li><a href="#" class="link-dark rounded">Late Hour Request</a></li>
                                    <li><a href="#" class="link-dark rounded">Final Year Regestration</a></li>
                                    <li><a href="#" class="link-dark rounded">SAP Application</a></li>
                                    <li><a href="#" class="link-dark rounded">Fresher Certificate Upload</a></li>

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
                                data-bs-toggle="collapse" data-bs-target="#Bonafide-collapse" aria-expanded="false">
                                Bonafide
                            </button>
                            <div class="collapse" id="Bonafide-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Apply Bonafide</a></li>

                                </ul>
                            </div>
                        </li>

                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#Online-Payments-collapse"
                                aria-expanded="false">
                                Online Payments
                            </button>
                            <div class="collapse" id="Online-Payments-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Apply Bonafide</a></li>

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
                                    <li class="sidebar-data" contentFrom="regestration-hostel"><a href="#"
                                            class="link-dark rounded ">Fresher Hostel Regestration</a></li>
                                    <li class="sidebar-data" contentFrom="leave-request"><a href="#"
                                            class="link-dark rounded ">Leave Request</a></li>
                                    <li><a href="#" class="link-dark rounded">Mess Selection 2021-2022</a></li>
                                    <li><a href="#" class="link-dark rounded">Mess Change</a></li>
                                    <li><a href="#" class="link-dark rounded">Fall 19-20 Room-Details</a></li>


                                </ul>
                            </div>
                        </li>
                        <!-- <li class="border-top my-3"></li>-->

                    </ul>
                </div>
            </div>

        </div>

        <div class="content col-10">
            <!--This is teacher appointment-->
            <div class="tab_content teacher-appointment">
                <div class="container">
                    <form method="POST" action='add_appointment.php' >
                        <label class="py-3" type="form-label" for="select-teacher">Please Select you teacher</label>
                        <?php
                        echo "<input class='hide_this' value='$student_id' name='student_id_data'></input>";
                        ?>
                        <div class="input-group mb-3" id="select-teacher">
                            
<select name='teacher_name_selection' class="custom-select form-control"  style="width:150px;">
                            <?php
                            for($i=0;$i<$num_rows;$i++)
                            {
                                echo "<option>$teacher_names[$i]</option>";
                            }
                            ?>
                                </select>
                            
                        </div>
                        <label class="py-3" for="reason" type="form-label">Reason for the appointment</label>
                        <input class="form-control mb-3" type="text" name="reason">
                        <button type="submit" class="btn btn-success mb-3">Add Appointment</button>
                    </form>
                    
                </div>

            </div>
            <!--this is late night permission-->
            <div class="tab_content latenight-permission">
                <div class="container">
                    <h1 style="text-align:center; color:rgba(1, 162, 255, 0.479);">
                        Your Late Night Permission Code
                    </h1>
                    <br>
                    <h3>
                        <p id="permission-code" style="text-align:center;color:black">XJ5RE8</p>
                    </h3>
                </div>
            </div>
            <!--This is Room maintenance-->
            <div class="tab_content room-service">
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
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
            
            $(".content .tab_content").hide();
            $(".sidebar-data").click(function () {
                var current_tab = $(this).attr('contentFrom');
                $(".content .tab_content").hide();
                $("." + current_tab).show();
            });
        });
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

                            <li><a class="dropdown-item" href="#">Course Page</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="sidebar-data" contentFrom="student-appointment"><a class="dropdown-item"
                                    href="#">Student Appointments</a></li>


                            <li>
                                <hr class="dropdown-divider">
                            </li>


                            <li class="sidebar-data" contentFrom="room-service"><a class="dropdown-item" href="#">Room
                                    Maintenance</a></li>
                        </ul>
                    </li>


                </ul>
                <?php
                echo "<a class='p-2' style='color:black;'>$emp_name</a>
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
            <!--This is student appointment-->
            <div class="tab_content student-appointment">
                <div class="container">
                    <form method="POST">
                        <table class="table" id="student-appointments-recieved">
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
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Immani Sri Satya Sai</td>
                                    <td>18BIT0084</td>
                                    <td>Needed help with my ongoing project</td>

                                    <td>
                                        <div class="btn-group" role="group"
                                            aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                                autocomplete="off" checked>
                                            <label class="btn btn-outline-primary" for="btnradio1">Approved</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                                autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnradio2">Denied</label>


                                        </div>
                                    </td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Rohith Raut</td>
                                    <td>19BIT0403</td>
                                    <td>Attendence issue</td>

                                    <td>
                                        <div class="btn-group" role="group"
                                            aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio1" id="btnradio3"
                                                autocomplete="off" checked>
                                            <label class="btn btn-outline-primary" for="btnradio3">Approved</label>

                                            <input type="radio" class="btn-check" name="btnradio1" id="btnradio4"
                                                autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnradio4">Denied</label>


                                        </div>
                                    </td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>

                            </tbody>
                        </table>
                        <input class="btn btn-success mb-3" type="submit" value="Confirm Appointments">
                    </form>
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
<?php

session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Road Map - UNi Portal Management System (UPMS)</title>

    <!-- CDN -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../css/Shared/SharedStyle.css">
    <link rel="stylesheet" href="../css/Student/StudentStyle.css">
    <link rel="shortcut icon" href="../images/Menu/favicon-light.png" type="image/x-icon">


</head>

<body>
    <!-- NavBar -->
    <div>
        <?php include('../php/Student/StudentHeader.php'); ?>
    </div>
    <!-- End of NavBar -->

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <table class="table table-bordered">
                    <thead class="bg-UNi">
                        <tr class="table bg-UNi">
                            <th>COURSE ID</th>
                            <th>TITLE</th>
                            <th>CREDIT HOURS</th>
                            <th>TYPE</th>
                            <th>SECTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>XC350</td>
                            <td>Introduction to Computer Programming</td>
                            <td>3</td>
                            <td>Core Course</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>XC355</td>
                            <td>Database Systems</td>
                            <td>3</td>
                            <td>Core Course</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>XC360</td>
                            <td>Computer Networks</td>
                            <td>3</td>
                            <td>Core Course</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>XC370</td>
                            <td>Digital Logic Design</td>
                            <td>3</td>
                            <td>Core Course</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>XC375</td>
                            <td>English Comprehension</td>
                            <td>3</td>
                            <td>Core Course</td>
                            <td>A</td>
                        </tr>
                        <tr class="bg-UNi">
                            <th colspan="5">Fall 2019</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <table class="table table-bordered">
                    <thead class="bg-UNi">
                        <tr class="table bg-UNi">
                            <th>COURSE ID</th>
                            <th>TITLE</th>
                            <th>CREDIT HOURS</th>
                            <th>TYPE</th>
                            <th>SECTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>XC365</td>
                            <td>Software Engineering</td>
                            <td>3</td>
                            <td>Core Course</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>XC380</td>
                            <td>Algorithm Analysis and Design</td>
                            <td>3</td>
                            <td>Core Course</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>XC385</td>
                            <td>Web Programming</td>
                            <td>3</td>
                            <td>Core Course</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>XC421</td>
                            <td>Object Oriented Programming</td>
                            <td>3</td>
                            <td>Core Course</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>XC435</td>
                            <td>Computer Organization and Architecture</td>
                            <td>3</td>
                            <td>Core Course</td>
                            <td>A</td>
                        </tr>
                        <tr class="bg-UNi">
                            <th colspan="5">Spring 2020</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div>
        <?php include('../php/SharedFooter.php'); ?>
    </div>
    <!-- End of Footer -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7c58c9e194.js" crossorigin="anonymous"></script>
    <script src="../js/login.js"></script>
    <script src="../js/Shared/SharedJS.js"></script>

</body>

</html>
<?php

session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Table - UNi Portal Management System (UPMS)</title>

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



    <div class="container mt-5 mb-5">
        <div class="table-responsive-md">
            <table class="table table-striped">
                <thead>
                    <tr class="bg-UNi">
                        <th colspan="6">
                            Timetable
                        </th>
                    </tr>
                </thead>
                <thead>
                    <tr class="bg-UNi">
                        <th>Time</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>06:30 PM-09:15 PM</td>
                        <td>Object Oriented Programming <br>
                            <b>Muhammad Tauseef Hanif</b>
                            <br>STD-408 Theory</td>

                        <td>Software Engineering <br>
                            <b> Munib Ahmed</b><br>
                            2S-45 Theory</td>

                        <td>Web Programming <br>
                            <b>Muhammad Umar Hameed</b><br>
                            SEN-311 Theory</td>

                        <td>Computer Organization and Architecture<br>
                            <b>Hassan Tariq</b><br>
                            2S-44 Theory</td>

                        <td>Algorithm Analysis and Design <br>
                            <b>Muhammad Fahad Khan</b><br>
                            2S-41 Theory</td>
                    </tr>
                </tbody>
            </table>
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
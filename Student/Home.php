<?php

session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - UNi Portal Management System (UPMS)</title>

    <!-- CDN -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../LoadindScreen/Loading.css">
    <link rel="stylesheet" href="../css/Shared/SharedStyle.css">
    <link rel="stylesheet" href="../css/Student/StudentStyle.css">
    <link rel="shortcut icon" href="../images/Menu/favicon-light.png" type="image/x-icon">


</head>

<body onload="<?php echo (($_SESSION['LoadingScreen'] == 1) ? "myFunction()" : "") ?>" style="margin:0; <?php echo (($_SESSION['LoadingScreen'] == 0) ? "background-color: white" : ""); ?>">

    <?php if ($_SESSION['LoadingScreen'] == 1) { ?>
        <div>
            <?php include('../LoadindScreen/Loading.php'); ?>
        </div>
    <?php } ?>


    <div id="BodyData" class="<?php echo (($_SESSION['LoadingScreen'] == 1) ? "animate-bottom" : "");
                                $_SESSION['LoadingScreen'] = 0; ?>">
        <!-- NavBar -->
        <div>
            <?php include('../php/Student/StudentHeader.php'); ?>
        </div>
        <!-- End of NavBar -->


        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h5 class="heading pt-4"><b> Your Batch Advisor: Muhammad Umar Hameed</b></h5>
                    <h5 class="heading"><b> Advisor Email Address: umar.hameed@umt.edu.pk</b></h5>
                </div>
            </div>
        </div>
        <div class="container pt-3">
            <h6>University Announcement</h6>
            <div class="row">
                <div class="col-md-6">
                    <div style="width: 100%; height: 500px; border: 1px solid #bbb; border-radius: 15px;"></div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <div>
            <?php include('../php/SharedFooter.php'); ?>
        </div>
        <!-- End of Footer -->
    </div>
    <!-- Custom Script -->
    <script>
        var myVar;
        document.getElementById("mainloader").style.display = "block";
        document.getElementById("BodyData").style.display = "none";

        function myFunction() {
            myVar = setTimeout(showPage, 3000);
            console.log("I'm in myFunction()" + myVar);
        }

        function showPage() {
            console.log("I'm in showPage()");
            document.getElementById("mainloader").style.display = "none";
            document.getElementById("BodyData").style.display = "block";
            document.body.style.backgroundColor = "white";
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7c58c9e194.js" crossorigin="anonymous"></script>
    <script src="../js/login.js"></script>
    <script src="../js/Shared/SharedJS.js"></script>

</body>

</html>
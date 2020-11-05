<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNi Portal Management System - Login</title>

    <!-- CDN -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="css/Shared/SharedStyle.css">
    <link rel="stylesheet" href="LoadindScreen/Loading.css">
    <link rel="shortcut icon" href="images/Menu/favicon.ico" type="image/x-icon">


</head>

<body onload="myFunction()" style="margin:0;">


    <div>
        <?php include('LoadindScreen/Loading.php'); ?>
    </div>

    <div id="BodyData" class="animate-bottom">
        <!-- NavBar -->
        <div>
            <?php include('php/SharedHeader.php'); ?>
        </div>
        <!-- End of NavBar -->


        <div class="container mt-5">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-4 mt-3 mb-3">
                    <center>
                        <div class="card card-animation" style="width:300px">
                            <img class="card-img-top img-fluid" src="images/Card/img_avatar1.png" alt="Student image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Student Portal</h4>
                                <a href="Login.php" class="btn btn-UNi">Open Portal</a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-4 mt-3 mb-3">
                    <center>
                        <div class="card card-animation" style="width:300px">
                            <img class="card-img-top img-fluid" src="images/Card/img_avatar2.png" alt="Teacher image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Teacher Portal</h4>
                                <a href="Login.php" class="btn btn-UNi">Open Portal</a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-4 mt-3 mb-3">
                    <center>

                        <div class="card card-animation" style="width:300px">
                            <img class="card-img-top img-fluid" src="images/Card/img_avatar3.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Admin Portal</h4>
                                <a href="Login.php" class="btn btn-UNi">Open Portal</a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>

        </div>


        <!-- Footer -->
        <div>
            <?php include 'php/SharedFooter.php'; ?>
        </div>
        <!-- End of Footer -->
    </div>
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
    <script src="js/login.js"></script>
    <script src="js/Shared/SharedJS.js"></script>
</body>

</html>
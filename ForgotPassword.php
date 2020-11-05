<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNi Portal Management System - Login</title>

    <!-- CDN -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../UNi-Portal-Management-System/css/Login.css">
    <link rel="stylesheet" href="../UNi-Portal-Management-System/css/Shared/SharedStyle.css">
    <link rel="shortcut icon" href="../UNi-Portal-Management-System/images/Menu/favicon.ico" type="image/x-icon">


</head>

<body>

    <!-- NavBar -->
    <div>
        <?php include('../UNi-Portal-Management-System/php/SharedHeader.php'); ?>
    </div>
    <!-- End of NavBar -->

    <div>
        <div class="container container-login pt-3 pb-3">

            <form name=" LoginForm" action="javascript:void(0)" onsubmit="return ValidateLogin()" method="POST">
                <div class="form-group">

                    <label for="InputEmail">Gmail ID</label>

                    <label for="InputGMail">Code</label>
                    <input type="email" class="form-control" id="txtGMail" name="txtGmail" placeholder="Gmail ID" required>
                    <small id="PasswordHelp" class="form-text text-muted"></small>

                </div>

                <div class="form-group">

                    <label for="InputPassword">Code</label>
                    <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="OTP Code" required>
                    <small id="PasswordHelp" class="form-text text-muted"></small>

                </div>
                <button type="button" class="btn btn-UNi" id="btnVerifyPass">Verify</button>
                <a href="../UNi-Portal-Management-System/Login.php" class="btn btn-UNi float-right">Login Instead</a>
            </form>
        </div>
    </div>
    <div class="container blink" style="margin-top: 10vh;">
        <center><img class="img-fluid" src="../UNi-Portal-Management-System/images/Brand-1.png" alt="Brand Logo"></center>
    </div>


    <!-- Footer -->
    <div>
        <?php include '../UNi-Portal-Management-System/php/SharedFooter.php'; ?>
    </div>
    <!-- End of Footer -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7c58c9e194.js" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
    <script src="js/Shared/SharedJS.js"></script>
</body>

</html>
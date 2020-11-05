<?php
error_reporting(0);
if ($_COOKIE["PHPSESSID"] != "") {
    session_destroy();
}
session_start();


// Variables
$FileName = "";
$dtRow = "";
$dtLogin = "";
$RtnValue = "";

// Check DB Connection
include("DBFIles/DBConfig.php");
$RtnValue = CHECKDBCONNECTION();
if ($RtnValue == "N") {
    echo "Database is not Connected.";
    exit();
} elseif ($RtnValue != "Y") {
    $_SESSION['ErrMsg'] = $RtnValue;
}

// $_SESSION['ErrMsg'] = "asdasdasdasd";

include("DBFIles/DBQueries.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_POST['txtUserID'] = lcfirst($_POST['txtUserID']);

    if (($_POST['txtUserID'][0] == "F" || $_POST['txtUserID'][0] == "f" || $_POST['txtUserID'][0] == "S" || $_POST['txtUserID'][0] == "s") && strlen($_POST['txtUserID']) == 11) {

        $RtnValue = unipmsstudents($dtLogin, "VLOGIN", " STD_RollNo = '" . $_POST['txtUserID'] . "' AND STD_Password = '" . $_POST['txtPassword'] . "'", $_POST['txtUserID'], $_POST['txtPassword']);
        if ($RtnValue === "Y") {

            $dtRow = mysqli_fetch_array($dtLogin);
            $FileName = "Student/Home.php";

            $_SESSION['LoginID'] = ucfirst($_POST['txtUserID']);
            $_SESSION['LoginMail'] = ucfirst($_POST['txtUserID'])  . "@uni.edu.pk";
            $_SESSION['User Name'] = $dtRow['STD_FirstName'] . " " . $dtRow['STD_LastName'];
            $_SESSION['Role'] = "Student";
            $_SESSION['CurrentSemester'] = $dtRow['STD_CrrSemester'];
            $_SESSION['LoadingScreen'] = 1;

            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

            header("location:http://$host$uri/$FileName");

            exit();
        } else {
            $_SESSION['ErrMsg'] = ($RtnValue == "N" ? "Your User ID or Password is incorrect." : "Login Successful...");
        }
    } elseif (($_POST['txtUserID'][0] == "t") && strlen($_POST['txtUserID']) == 11) {

        $RtnValue = unipmsteacher($dtLogin, "VLOGIN", " TCHR_ID = '" . $_POST['txtUserID'] . "' AND TCHR_Password = '" . $_POST['txtPassword'] . "'", $_POST['txtUserID'], $_POST['txtPassword']);
        if ($RtnValue === "Y") {

            $dtRow = mysqli_fetch_array($dtLogin);
            $FileName = "Teacher/Student/Attendance.php";

            $_SESSION['LoginID'] = ucfirst($_POST['txtUserID']);
            $_SESSION['LoginMail'] = ucfirst($_POST['txtUserID'])  . "@uni.edu.pk";
            $_SESSION['User Name'] = $dtRow['TCHR_FirstName'] . " " . $dtRow['TCHR_LastName'];
            $_SESSION['Role'] = "Teacher";
            $_SESSION['LoadingScreen'] = 1;


            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

            header("location:http://$host$uri/$FileName");

            exit();
        } else {
            $_SESSION['ErrMsg'] = ($RtnValue == "N" ? "Your User ID or Password is incorrect." : "Login Successful...");
        }
    } elseif (($_POST['txtUserID'][0] == "A" || $_POST['txtUserID'][0] == "a") && strlen($_POST['txtUserID']) == 11) {

        $RtnValue = unipmsadmin($dtLogin, "VLOGIN", " ADMIN_ID = '" . $_POST['txtUserID'] . "' AND ADMIN_Password = '" . $_POST['txtPassword'] . "'", $_POST['txtUserID'], $_POST['txtPassword']);
        if ($RtnValue === "Y") {

            $dtRow = mysqli_fetch_array($dtLogin);
            $FileName = "Admin/Dashboard.php";

            $_SESSION['LoginID'] = ucfirst($_POST['txtUserID']);
            $_SESSION['LoginMail'] = ucfirst($_POST['txtUserID'])  . "@uni.edu.pk";
            $_SESSION['User Name'] = $dtRow['ADMIN_FirstName'] . " " . $dtRow['ADMIN_LastName'];
            $_SESSION['Role'] = "Admin";
            $_SESSION['LoadingScreen'] = 1;


            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

            header("location:http://$host$uri/$FileName");

            exit();
        } else {
            $_SESSION['ErrMsg'] = ($RtnValue == "N" ? "Your User ID or Password is incorrect." : "Login Successful...");
        }
    } else {

        $_SESSION['ErrMsg'] = "Invalid Userid or password..";
        $FileName = "index.php";

        $host  = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

        header("location:http://$host$uri/$FileName");

        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - UNi Portal Management System</title>

    <!-- CDN -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="css/Shared/SharedStyle.css">
    <link rel="shortcut icon" href="images/Menu/favicon.ico" type="image/x-icon">


</head>

<body>

    <!-- NavBar -->
    <div>
        <?php include('php/SharedHeader.php'); ?>
    </div>
    <!-- End of NavBar -->


    <div>
        <div class="container container-login pt-3 pb-3">

            <?php if ($_SESSION['ErrMsg'] != "") { ?>
                <div class=" mt-4 text-danger">
                    <div class=" alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo htmlentities($_SESSION['ErrMsg']) ?>
                    </div>
                </div>
            <?php } ?>

            <form name="LoginForm" method="POST">

                <div class="form-group">

                    <label for="InputEmail">User ID</label>

                    <div class="input-group mb-3">

                        <input type="text" id="txtUserID" name="txtUserID" class="form-control" placeholder="User ID" aria-label="User ID" aria-describedby="basic-addon2" required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon">@uni.edu.pk</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">

                    <label for="InputPassword">Password</label>
                    <!-- <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> -->
                    <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password" required>

                </div>
                <!-- <button type="submit" name="submit" class="btn btn-UNi" id="btnLogin">Login</button> -->
                <div class="form-actions">

                    <button type="submit" name="submit" class="btn btn-UNi" id="btnLogin">
                        Login <i class="fa fa-arrow-circle-right" style="color: white;"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <div class="container blink" style="margin-top: 10vh;">
        <center><img class="img-fluid" src="images/Brand-1.png" alt="Brand Logo"></center>
    </div>


    <!-- Footer -->
    <div>
        <?php include 'php/SharedFooter.php'; ?>
    </div>
    <!-- End of Footer -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7c58c9e194.js" crossorigin="anonymous"></script>
    <script src="js/Shared/SharedJS.js"></script>

</body>

</html>
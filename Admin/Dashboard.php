<?php session_start();
error_reporting(0);
$_SESSION['ErrMsg'] = "";
$RtnValue = "";

$Count = 0;
$dtList = "";

$dtRow = "";

// Check DB Connection
include("../DBFIles/DBConfig.php");
$RtnValue = CHECKDBCONNECTION();
if ($RtnValue == "N") {
    echo "Database is not Connected.";
    exit();
} elseif ($RtnValue != "Y") {
    $_SESSION['ErrMsg'] = $RtnValue;
}

include("../DBFIles/DBQueries.php");
// $_SESSION['ErrMsg'] = "asd";
if (isset($_POST['submit'])) {


    if (isset($_POST['txtSCLCode'])) {
        $RtnValue = unipmsschools($dtStaffTableList, "S", "", $_POST['txtSCLCode'], $_POST['txtSCLName'], $_POST['txtSCLAbb']);
        if ($RtnValue === "Y") {
            $_SESSION['ErrMsg'] = "Data has been Saved.";
            unset($_POST);
            unset($_REQUEST);
        }
    } else if (isset($_POST['txtProgramCode']) && isset($_POST['txtSectionCode'])) {
        $RtnValue = unipmsprograms($dtStaffTableList, "S", "", $_POST['txtProgramCode'], $_POST['txtProgramName'], $_POST['txtSectionCode'], $_POST['txtSectionName']);
        if ($RtnValue === "Y") {
            $_SESSION['ErrMsg'] = "Data has been Saved.";
            unset($_POST);
            unset($_REQUEST);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - UNi Portal Management System (UPMS)</title>

    <!-- CDN -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../LoadindScreen/Loading.css">
    <link rel="stylesheet" href="../css/Shared/SharedStyle.css">
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
            <?php include('../php/Admin/AdminHeader.php'); ?>
        </div>
        <!-- End of NavBar -->

        <?php if ($_SESSION['ErrMsg'] != "") { ?>
            <div class="container-fluid padding: 50px; mt-4 text-danger">
                <div class=" alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $_SESSION['ErrMsg'] ?>
                </div>
            </div>
        <?php } ?>

        <div class="container-fluid mb-5 text-center">
            <!-- UMT Numbers -->
            <div style=" padding: 50px; color: #064473;">

                <div>

                    <div class="card-deck ">
                        <div class="card card-animation">
                            <span class="badge badge-pill badge-primary" style="position: absolute; background-color: #224172; top: 5px; right: 5px;"><a href=" #" id="mySchoolBtn"><i class="m-1 fa fa-plus" style="color: white" data-target="#myModel" aria-hidden="true"></i></a></span>

                            <div class="card-body">
                                <?php
                                $Count = 0;
                                $RtnValue = unipmsschools($dtList, "V", "");
                                if ($RtnValue === "Y") {

                                    while ($dtRow = mysqli_fetch_assoc($dtList)) {
                                        $Count++;
                                    }
                                }
                                echo "<h2 class='card-title'>$Count</h2>";
                                ?>

                                <p class="card-text">School(s)</p>
                            </div>

                        </div>
                        <div class="card card-animation">
                            <span class="badge badge-pill badge-primary " style="position: absolute; background-color: #224172; top: 5px; right: 5px;"><a href=" #" id="myProgramBtn"><i class="m-1 fa fa-plus" style="color: white" aria-hidden="true"></i></a></span>

                            <div class="card-body">
                                <?php
                                $Count = 0;
                                $RtnValue = unipmsprograms($dtList, "VLOADPROGRAMS", "");
                                if ($RtnValue === "Y") {

                                    while ($dtRow = mysqli_fetch_assoc($dtList)) {
                                        $Count++;
                                    }
                                }
                                echo "<h2 class='card-title'>$Count</h2>";
                                ?>
                                <p class="card-text">Program(s)</p>
                            </div>
                        </div>
                        <div class="card card-animation">
                            <div class="card-body">
                                <?php
                                $Count = 0;
                                $RtnValue = unipmsteacher($dtList, "", "");
                                if ($RtnValue === "Y") {

                                    while ($dtRow = mysqli_fetch_assoc($dtList)) {
                                        $Count++;
                                    }
                                }
                                echo "<h2 class='card-title'>$Count</h2>";
                                ?>
                                <p class="card-text">Faculty Member(s)</p>
                            </div>
                        </div>

                        <div class="card card-animation">

                            <div class="card-body">
                                <?php
                                $Count = 0;
                                $RtnValue = unipmsstudents($dtList, "V", "");
                                if ($RtnValue === "Y") {

                                    while ($dtRow = mysqli_fetch_assoc($dtList)) {
                                        $Count++;
                                    }
                                }
                                echo "<h2 class='card-title'>$Count</h2>";
                                ?>
                                <p class="card-text">Student(s)</p>
                            </div>
                        </div>


                        <div class="card card-animation">
                            <div class="card-body">
                                <h2 class="card-title">1</h2>
                                <p class="card-text">Online Database(s)</p>
                            </div>
                        </div>

                    </div><br>

                    <div class="card-deck ">

                        <div class="card card-animation">

                            <div class="card-body">
                                <h2 class="card-title">School of Professional Advancement</h2>
                                <h4 class="card-text">SPA</h4>
                            </div>

                            <div class="card-deck mx-1">

                                <div class="card card-animation mb-3">
                                    <div class="card-body">
                                        <h2 class="card-title">Bachelor of Professional Studies</h2>
                                        <h4 class="card-text">BPS</h4>
                                    </div>
                                </div>

                                <div class="card card-animation mb-3">
                                    <div class="card-body">
                                        <h2 class="card-title">Master of Computer Sciences</h2>
                                        <h4 class="card-text">MCS</h4>
                                    </div>
                                </div>

                                <div class="card card-animation mb-3">
                                    <div class="card-body">
                                        <h2 class="card-title">Master of Banking and Finance</h2>
                                        <h4 class="card-text">MBF</h4>
                                    </div>
                                </div>

                                <div class="card card-animation mb-3">
                                    <div class="card-body">
                                        <h2 class="card-title">Master of Project Management</h2>
                                        <h4 class="card-text">MPM</h4>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>


        <!-- Add School Model -->
        <div>
            <?php include('../php/Admin/SchoolModel.php'); ?>
        </div>
        <!-- End -->

        <!-- Add Program Model -->
        <div>
            <?php include('../php/Admin/ProgramModel.php'); ?>
        </div>
        <!-- End -->

        <!-- Footer -->
        <?php include('../php/SharedFooter.php'); ?>
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
    <!-- End of Custom Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7c58c9e194.js" crossorigin="anonymous"></script>
    <script src="../js/Shared/SharedJS.js"></script>
</body>

</html>
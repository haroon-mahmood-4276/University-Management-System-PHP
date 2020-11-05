<?php

error_reporting(0);
session_start();

$_SESSION['ErrMsg'] = "";

$RtnValue = "";

$dtSQLDataTable = "";
$Tmp = "";
$Count = 0;
$dtRow = "";

// Check DB Connection
include("../../DBFIles/DBConfig.php");
$RtnValue = CHECKDBCONNECTION();
if ($RtnValue == "N") {
    echo "Database is not Connected.";
    exit();
} elseif ($RtnValue != "Y") {
    $_SESSION['ErrMsg'] = $RtnValue;
}

include("../../DBFIles/DBQueries.php");

if (isset($_POST["cbProgram"]) && isset($_POST["cbSection"]) && isset($_POST["CHK"])) {
    $RtnValue = unipmsstudents($dtSQLDataTable, "VROLLNO", "(STD_Program = '" . $_POST["cbProgram"] . "') AND (STD_Section = '" . $_POST["cbSection"] . "')");
    if ($RtnValue == "Y") {
        while ($dtRow = mysqli_fetch_assoc($dtSQLDataTable)) {
            $RtnValue = unipmsstdattendance($Tmp, "S", "", $dtRow["STD_RollNo"], $_POST["txtSubject"], $_POST["cbProgram"], $_POST["cbSection"], $_POST["dClassDate"], $_POST["tStartClassTime"], $_POST["tEndClassTime"], (($_POST[$dtRow["STD_RollNo"] . "Chk"]) == "on" ? "Y" : "N"));
            $_SESSION['ErrMsg'] = "Data Saved";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance - UNi Portal Management System (UPMS)</title>

    <!-- CDN -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../LoadindScreen/Loading.css">
    <link rel="stylesheet" href="../../css/Shared/SharedStyle.css">
    <link rel="shortcut icon" href="../../images/Menu/favicon-light.png" type="image/x-icon">


</head>

<body onload="<?php echo (($_SESSION['LoadingScreen'] == 1) ? "myFunction()" : "") ?>" style="margin:0; <?php echo (($_SESSION['LoadingScreen'] == 0) ? "background-color: white" : ""); ?>">

    <?php if ($_SESSION['LoadingScreen'] == 1) { ?>
        <div>
            <?php include('../../LoadindScreen/Loading.php'); ?>
        </div>
    <?php } ?>


    <div id="BodyData" class="<?php echo (($_SESSION['LoadingScreen'] == 1) ? "animate-bottom" : "");
                                $_SESSION['LoadingScreen'] = 0; ?>">
        <!-- NavBar -->
        <div>
            <?php include '../../php/Teacher/TeacherHeader.php'; ?>
        </div>
        <!-- End of NavBar -->


        <!-- Filter Area -->

        <div class="container my-3">
            <?php if ($_SESSION['ErrMsg'] != "") { ?>
                <div class="container mt-4 text-danger">
                    <div class=" alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $_SESSION['ErrMsg'] ?>
                    </div>
                </div>
            <?php } ?>

            <form method="POST" name="filterData">

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 py-3">

                        <label class="custom-select-label" for="cbPrograms">Programs</label>
                        <select name="cbProgram" class="custom-select d-block" id="cbprogram" required>
                            <option value="00" selected>Select</option>
                            <?php

                            $RtnValue = unipmsprograms($dtSQLDataTable, "VLOADPROGRAMS", "");
                            if ($RtnValue == "Y") {
                                while ($dtRow = mysqli_fetch_assoc($dtSQLDataTable)) {
                                    echo "<option value='" . $dtRow["STDP_PCode"] . "'>" . $dtRow["STDP_Programs"] . "</option>";
                                }
                            }

                            ?>
                        </select>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 py-3">

                        <label class="custom-select-label" for="cbSection">Section</label>
                        <select name="cbSection" class="custom-select d-block" id="cbSection" required>
                            <option selected value="00">Select</option>
                            <option value="01">A</option>
                            <option value="02">B</option>
                        </select>

                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 py-3">

                        <label class="custom-select-label" for="cbSubjects">Subject</label>
                        <input type="text" name="txtSubject" class="form-control" id="txtSubject" required>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 py-3">
                        <label class="custom-select-label" for="dClassDate">Class Date</label>
                        <input type="date" class="form-control" placeholder="Date" id="dClassDate" name="dClassDate" required>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 py-3">

                        <label class="custom-select-label" for="tStartClassTime">Class Start Time</label>
                        <input type="time" class="form-control" placeholder="Start Time" id="tStartClassTime" name="tStartClassTime" required>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 py-3">

                        <label class="custom-select-label" for="tEndClassTime">Class End Time</label>
                        <input type="time" class="form-control" placeholder="End Time" id="tEndClassTime" name="tEndClassTime" required>
                    </div>

                </div>

                <button class="btn btn-UNi btn-md" type="button" onclick="ShowSTDATTD(1,1)">Create Lecture</button>
                <button class="btn btn-danger btn-md" type="reset" onclick="ShowSTDATTD(0,0)">Refresh</button>
                <!-- List of Student -->
                <div id="STDATTDList">

                </div>
                <!-- End of List of Student -->
            </form>

        </div>
        <!-- End of Filter Area -->

        <!-- Footer -->
        <div>
            <?php include('../../php/SharedFooter.php'); ?>
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

        function ShowSTDATTD(PID, SID) {
            if (PID == 0 && SID == 0) {
                var ProgramID = PID;
                var SectionID = SID;
            } else {
                var ProgramID = document.forms["filterData"]["cbprogram"].value;
                var SectionID = document.forms["filterData"]["cbSection"].value;
            }
            console.log(ProgramID + ' ' + SectionID);

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("STDATTDList").innerHTML = this.responseText;
                }
            };
            xhttp.open("POST", "STDList.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("ProgramID=" + ProgramID + "&SectionID=" + SectionID + "&WorkAction=STDATTD");
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7c58c9e194.js" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>


    <script src="../../js/login.js"></script>
    <script src="../../js/Shared/SharedJS.js"></script>

</body>

</html>
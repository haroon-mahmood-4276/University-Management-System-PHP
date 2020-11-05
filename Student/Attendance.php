<?php

session_start();
error_reporting(0);

$RtnValue = "";
$dtRoadMap = "";
$dtRow = "";
$Count = 0;

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

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance - UNi Portal Management System (UPMS)</title>

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
            <table class="table table-hover">
                <thead>
                    <tr class="bg-UNi">
                        <th scope="col">#</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $RtnValue = unipmsstdattendance($dtRoadMap, "VSTDATD", " SA_STDRollNo = '" . lcfirst($HUserID) . "'");
                    if ($RtnValue === "Y") {

                        while ($dtRow = mysqli_fetch_assoc($dtRoadMap)) {
                    ?>
                            <tr>
                                <th scope='row'><?php echo ++$Count ?></th>
                                <td><?php echo $dtRow["SA_SubName"] ?></td>
                                <td><?php echo $dtRow["SA_Date"] ?></td>
                                <td><?php echo $dtRow["SA_StartTime"] ?></td>
                                <td><?php echo $dtRow["SA_EndTime"] ?></td>
                                <td><?php echo ($dtRow["SA_Status"] == "Y" ? "Present" : "Absent") ?></td>
                            </tr>
                    <?php }
                    }

                    ?>
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
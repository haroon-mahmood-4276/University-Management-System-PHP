<?php
error_reporting(0);
session_start();
$_SESSION['ErrMsg'] = "";
$RtnValue = "";
$Count = 0;

$dtSQLDataTable = "";
$dtStdTableList = "";

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

if (isset($_GET['WorkAction'])) {

    $RtnValue = unipmsstudents($dtStdTableList, "D", "", $_GET['ID']);
    if ($RtnValue === "Y") {
        unset($_GET['WorkAction']);
        header("Location:StudentList.php");
    }
}

if (isset($_POST['submit'])) {

    $_POST['txtUserID'] = lcfirst($_POST['txtUserID']);

    if ($_POST['txtCNIC'][5] == "-" && $_POST['txtCNIC'][13] == "-") {
        $STDGender = ($_POST['txtCNIC'][14] % 2 == 0) ? "Female" : "Male";
    } else {
        phpAlert("Enter CNIC with dashes.");
        exit();
    }


    if (($_POST['txtUserID'][0] == "s" || $_POST['txtUserID'][0] == "f") && strlen($_POST['txtUserID']) == 11) {

        $RtnValue = unipmsstudents($dtStdTableList, "S", "", $_POST['txtUserID'], $_POST['txtUserPass'], $_POST['txtFirstName'], $_POST['txtLastName'], $_POST['txtCNIC'], $_POST['cbProgram'], $_POST["cbSection"], "1", $_POST['txtPhoneNo'], "", $_POST['txtEmail'], $STDGender, $_POST['cbCity'], $_POST['cbCountry'], "", $_POST['txtGFirstName'] . " " . $_POST['txtGLastName'], $_POST['txtGPhoneNo'], "", $_POST['txtGCNIC'], $_POST['cbSchool']);
        if ($RtnValue === "Y") {
            $_SESSION['ErrMsg'] = "Student Added.";
            unset($_POST['submit']);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List - UNi Portal Management System (UPMS)</title>

    <!-- CDN -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../css/Shared/SharedStyle.css">

    <link rel="shortcut icon" href="../images/Menu/favicon-light.png" type="image/x-icon">

</head>

<body>
    <!-- NavBar -->
    <div>
        <?php include('../php/Admin/AdminHeader.php'); ?>
    </div>
    <!-- End of NavBar -->


    <?php if ($_SESSION['ErrMsg'] != "") { ?>
        <div class="container mt-4 text-danger">
            <div class=" alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $_SESSION['ErrMsg'] ?>
            </div>
        </div>
    <?php } ?>



    <!-- List of Student -->
    <div class="container mt-3 mb-5">
        <div class="input-group mb-3">
            <input class="form-control" id="myInput" type="text" placeholder="Search.." autofocus>
            <div class="input-group-append">
                <button class="btn btn-UNi" type="submit">Refresh</button>
            </div>
        </div>
        <div class="table-responsive-md">

            <table class="table table-hover mt-2 mutable">
                <thead>
                    <tr class="bg-UNi">
                        <th scope="col">#</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Program</th>
                        <th scope="col">Sec</th>
                        <th scope="col">School</th>
                        <th scope="col" style="width: 10%;" class="text-center"><a class="PSTDAdd" href=" #" id="mySTDBtn"><i class="m-1 fa fa-plus" style="color: white" aria-hidden="true"></i></a></th>
                    </tr>
                </thead>
                <?php

                $RtnValue = unipmsstudents($dtStdTableList, "VSTDLIST", "");
                if ($RtnValue === "Y") {

                    while ($dtRow = mysqli_fetch_assoc($dtStdTableList)) {
                ?>

                        <tr>
                            <td><?php echo ++$Count ?></td>
                            <td><?php echo ucfirst($dtRow["STD_RollNo"]) ?></td>
                            <td><?php echo $dtRow["STD_FirstName"] . ' ' . $dtRow["STD_LastName"] ?></td>
                            <td><?php echo $dtRow["Program"] ?></td>
                            <td><?php echo $dtRow["Section"] ?></td>
                            <td><?php echo $dtRow["SchoolName"] . " ( " . $dtRow["SchoolAbb"] . " )" ?></td>
                            <td class="link text-center">
                                <a class="PDelete" href="StudentList.php?ID=<?php echo $dtRow['STD_RollNo'] ?>&WorkAction=Delete" onClick="return confirm('Are you sure you want to delete?')"><i class="m-1 fa fa-trash-o" style="color: #224172" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                <?php
                    }
                }

                ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- End of List of Student -->


    <!-- Add Student Model -->
    <div>
        <?php include('../php/Admin/StudentModel.php'); ?>
    </div>
    <!-- End -->


    <!-- Footer -->
    <?php include('../php/SharedFooter.php'); ?>
    <!-- End of Footer -->

    <!-- Custom Script -->

    <!-- End of Custom Script -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7c58c9e194.js" crossorigin="anonymous"></script>
    <script src="../js/Shared/SharedJS.js"></script>


</body>

</html>
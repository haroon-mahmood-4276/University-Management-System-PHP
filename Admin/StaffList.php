<?php

error_reporting(0);
session_start();
$_SESSION['ErrMsg'] = "";
$RtnValue = "";
$Count = 0;

$dtCountry = "";
$dtCity = "";
$dtSchools = "";
$dtStaffTableList = "";

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

    $RtnValue = unipmsteacher($dtStaffTableList, "D", "", $_GET['ID']);
    if ($RtnValue === "Y") {
        unset($_GET['WorkAction']);
        header("Location:StaffList.php");

    }
}

if (isset($_POST['submit'])) {

    $_POST['txtUserID'] = lcfirst($_POST['txtUserID']);

    if ($_POST['txtCNIC'][5] == "-" && $_POST['txtCNIC'][13] == "-") {
        $StaffGender = ($_POST['txtCNIC'][14] % 2 == 0) ? "Female" : "Male";
    } else {
        phpAlert("Enter CNIC with dashes.");
        exit();
    }


    if ($_POST['txtUserID'][0] == "t" && strlen($_POST['txtUserID']) == 11) {

        $RtnValue = unipmsteacher($dtStaffTableList, "S", "", $_POST['txtUserID'], $_POST['txtUserPass'], $_POST['txtFirstName'], $_POST['txtLastName'], $_POST['txtCNIC'], $_POST['txtPhoneNo'], $_POST['txtAddress'], $_POST['txtEmail'], $StaffGender, $_POST['txtSpecialty'], $_POST['cbCity'], $_POST['cbCountry'], $_POST['cbSchool'], $_POST['txtPost']);
        if ($RtnValue === "Y") {
            $_SESSION['ErrMsg'] = "Data has been Saved.";
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
    <title>Staff List - UNi Portal Management System (UPMS)</title>

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

    <!-- List of Teachers -->
    <div class="container mt-5 mb-5">
        <div class="table-responsive-md">

            <div class="input-group mb-3">
                <input class="form-control" id="myInput" type="text" placeholder="Search.." autofocus>
                <div class="input-group-append">
                    <button class="btn btn-UNi" type="submit">Refresh</button>
                </div>
            </div>

            <br>
            <table class="table table-hover">

                <thead>
                    <tr class="bg-UNi">
                        <th scope="col">#</th>
                        <th scope="col">Staff ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Post</th>
                        <th scope="col">School</th>
                        <th scope="col" style="width: 10%;" class="text-center"><a class="PTCHRAdd" href=" #" id="myTCHRBtn"><i class="m-1 fa fa-plus" style="color: white" aria-hidden="true"></i></a></th>
                    </tr>
                </thead>

                <tbody id="myTable">

                    <?php

                    $RtnValue = unipmsteacher($dtStaffTableList, "VTCHRLIST", "unipms_schools.SCL_SchoolCode = unipms_teacher.TCHR_SCLSchoolCode");
                    if ($RtnValue === "Y") {

                        while ($dtRow = mysqli_fetch_assoc($dtStaffTableList)) {

                    ?>
                            <tr>
                                <td><?php echo ++$Count ?></td>
                                <td><?php echo ucfirst($dtRow["TCHR_ID"]) ?></td>
                                <td><?php echo $dtRow["TCHR_FirstName"] . ' ' . $dtRow["TCHR_LastName"] ?></td>
                                <td><?php echo $dtRow["TCHR_Post"] ?></td>
                                <td><?php echo $dtRow["SCL_SchoolName"] . " ( " . $dtRow["SCL_SchoolAbb"] . " )" ?></td>
                                <td class="link text-center">
                                    <a class="PDelete" href="StaffList.php?ID=<?php echo $dtRow['TCHR_ID'] ?>&WorkAction=Delete" onClick="return confirm('Are you sure you want to delete?')"><i class="m-1 fa fa-trash-o" style="color: #224172" aria-hidden="true"></i></a>
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

    <!-- Add Teacher Model -->
    <div>
        <?php include('../php/Admin/TeacherModel.php'); ?>
    </div>

    <!-- End -->


    <!-- Footer -->
    <?php include('../php/SharedFooter.php'); ?>
    <!-- End of Footer -->


    <!-- Custom Script -->
    <script type="text/javascript">


    </script>
    <!-- End of Custom Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7c58c9e194.js" crossorigin="anonymous"></script>
    <script src="../js/Shared/SharedJS.js"></script>
</body>

</html>
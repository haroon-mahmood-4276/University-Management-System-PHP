<?php

$HUserID = $_SESSION['LoginID'];
$HUserMail = $_SESSION['LoginMail'];
$HUserName = $_SESSION['User Name'];
$HUserRole = $_SESSION['Role'];

if($HUserID == "" || $HUserRole != "Student"){
    header("location: /UNi-Portal-Management-System/Logout.php");
   exit();
}
?>
<div class="container-fluid sticky-top bg-white">
    <nav class="navbar navbar-expand-xl p-2 bottom-divider" style="position: sticky;">
        <a class="navbar-brand" href="../Student/Home.php">
            <img src="../images/Brand-1.png" alt="logo" class="img-fluid" style="width:500px;">
        </a>
        <button class="navbar-toggler ml-auto mb-2 mt-3" type="button" data-toggle="collapse" data-target="#MyNavHorizontal">
            <span class="fa fa-caret-down fa-2x" style="color: #224172;"></span>
        </button>
        <div class="collapse navbar-collapse ml-5 mr-3 pl-5" id="MyNavHorizontal">

            <!-- Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "Home.php") ? "active" : "" ?>">
                    <a class="nav-link" href="../Student/Home.php"><span style="color: #224172;">Home</span></a>
                </li>
                <!-- <li class="left-divider ml-2 mr-2"></li> -->
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "Courses.php") ? "active" : "" ?>">
                    <a class="nav-link" href="../Student/Courses.php"><span style="color: #224172;">Courses</span></a>
                </li>
                <!-- <li class="left-divider ml-2 mr-2"></li> -->
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "Attendance.php") ? "active" : "" ?>">
                    <a class="nav-link" href="../Student/Attendance.php"><span style="color: #224172;">Attendance</span></a>
                </li>
                <!-- <li class="left-divider ml-2 mr-2"></li> -->
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "Assessment.php") ? "active" : "" ?>">
                    <a class="nav-link" href="../Student/Assessment.php"><span style="color: #224172;">Assessment</span></a>
                </li>
                <!-- <li class="left-divider ml-2 mr-2"></li> -->
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "Timetable.php") ? "active" : "" ?>">
                    <a class="nav-link" href="../Student/Timetable.php"><span style="color: #224172;">Timetable</span></a>
                </li>
                <!-- <li class="left-divider ml-2 mr-2"></li> -->
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "Payment.php") ? "active" : "" ?>">
                    <a class="nav-link" href="../Student/Payment.php"><span style="color: #224172;">Payment</span></a>
                </li>
                <!-- <li class="left-divider ml-2 mr-2"></li> -->
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "Roadmap.php") ? "active" : "" ?>">
                    <a class="nav-link" href="../Student/Roadmap.php"><span style="color: #224172;">Road Map</span></a>
                </li>
                <!-- <li class="left-divider ml-2 mr-2"></li> -->
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "Feedback.php") ? "active" : "" ?>">
                    <a class="nav-link" href="../Student/Feedback.php"><span style="color: #224172;">Feedback</span></a>
                </li>
            </ul>
            <div class="dropdown ml-auto">
                <a href="" class="nav-link icon-no-margin" data-toggle="dropdown" role="button">
                    <span class="avatar current"><span class="fa fa-user-circle-o fa-3x mr-2" style="color: #224172;"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right p-3 menu" id="action-menu-1-menu" id="dropdown-menu-1">

                    <center>
                        <a target="_blank" href="../images/Menu/Logo-2.png"> <img src="../images/Menu/Logo-2.png" class="mb-3" width="50%"></a>
                        <p class="lead text-muted"> <?php echo "$HUserName"; ?></p>
                        <p class="text-muted"><?php echo "$HUserMail"; ?></p>
                        <div class="dropdown-divider"></div>
                        <a href="../Logout.php" class="btn btn-UNi" style="color: white;">Logout</a>
                    </center>
                </div>
            </div>
        </div>
    </nav>
</div>
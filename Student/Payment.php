<?php

session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments - UNi Portal Management System (UPMS)</title>

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


    <div class="container my-3">
        <div class="row">
            <div class="table-responsive col-lg-10 col-md-10 col-sm-10">
                <table class="table table-borderless table-sm">
                    <thead>
                        <tr>
                            <th colspan="4">School of Professional Advancement</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>ID No:</td>
                        <td colspan="3">F2019027021</td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td>Syed Mehtab Kazmi</td>
                        <td>Degree:</td>
                        <td>MCS</td>
                    </tr>
                    <tr>
                        <td>Father's Name:</td>
                        <td colspan="3">Syed Aftab Kazmi</td>
                    </tr>
                </table>
            </div>
           
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <table class="table table-bordered">
                    <thead class="bg-UNi">
                        <tr>
                            <th>Payment Date</th>
                            <th>Account</th>
                            <th>Amount</th>
                            <th>Bank</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>04 Sep 2019</td>
                            <td>ADMISSION FEE</td>
                            <td>Rs 10,000</td>
                            <td>Habib Bank Limited (UMT)</td>
                        </tr>
                        <tr>
                            <td>04 Sep 2019</td>
                            <td>COURSE FEE (Tuition Fee)</td>
                            <td>Rs 28,063</td>
                            <td>Habib Bank Limited (UMT)</td>
                        </tr>
                        <tr>
                            <td>04 Feb 2020</td>
                            <td>COURSE FEE (Tuition Fee)</td>
                            <td>Rs 28,063</td>
                            <td>Habib Bank Limited (UMT)</td>
                        </tr>
                        <tr>
                            <td>17 June 2020</td>
                            <td>COURSE FEE (Tuition Fee)</td>
                            <td>Rs 28,063</td>
                            <td>Habib Bank Limited (UMT)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 class="py-2"><strong>Payment Summary</strong></h5>
                <table class="table table-bordered">
                    <thead class="table bg-UNi table-bordered text-white text-center pb-3">
                        <tr>
                            <th>Account</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ADMISSION FEE</td>
                            <td>Rs 10,000</td>
                        </tr>
                        <tr>
                            <td>COURSE FEE (Tuition Fee)</td>
                            <td>Rs 56,126</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>Rs 66,126</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button type="button" class="btn btn-UNi">Show Vouchers</button>
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
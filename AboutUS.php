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
    <link rel="shortcut icon" href="images/Menu/favicon.ico" type="image/x-icon">


</head>

<body>

    <!-- NavBar -->
    <div>
        <?php include('php/SharedHeader.php'); ?>
    </div>
    <!-- End of NavBar -->


    <div class="bg-white">
        <div class="container py-5">
            <div class="row h-100 align-items-center py-5">
                <div class="col-lg-6">
                    <h1 class="display-4">About us</h1>
                    <p class="lead text-muted mb-0">This is for you to facilitate. We are Students and this is our
                        Semester Project.</p>
                </div>
                <div class="col-lg-6 d-none d-lg-block"><img src="images/AboutUs/AboutUsimg.png" alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-5">
                    <h2 class="display-4 font-weight-light">Our team</h2>
                    <p class="font-italic text-muted">Our precious team members.</p>
                </div>
            </div>

            <div class="row text-center">
                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/AboutUs/2.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Mehtab Kazmi</h5><span class="small text-uppercase text-muted">Front End
                            Developer</span><br><span class="small text-uppercase text-muted">F2019027021</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/AboutUs/3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Haroon Mahmood</h5><span class="small text-uppercase text-muted">Back End
                            Developer</span><br><span class="small text-uppercase text-muted">F2019027012</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="https://www.facebook.com/haroon.mahmood.427666/" target="_blank" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/iyetech99/" target="_blank" class="social-link"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/haroon-mahmood-93069a127/" target="_blank" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/AboutUs/4.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Manan Waheed</h5><span class="small text-uppercase text-muted">Front End
                            Developer</span><br><span class="small text-uppercase text-muted">F2019027011</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/AboutUs/2.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Muhammad Moiz</h5><span class="small text-uppercase text-muted">Database
                            Developer</span><br><span class="small text-uppercase text-muted">F2019027027</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End-->

            </div>
        </div>
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
    <script src="js/login.js"></script>
    <script src="js/Shared/SharedJS.js"></script>
</body>

</html>
<?php

session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feedback - UNi Portal Management System (UPMS)</title>

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


	<div class="container my-5">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="card">
					<div class="card-header">
						<h4>Adviser Appointment Feedback</h4>
					</div>
					<div class="card-body">
						<p class="para">Kindly give your feedback regarding your appointment with batch adviser.
							Your feedback will be kept confidential and will be used for analysis purpose only.</p>
					</div>
				</div>
			</div>
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
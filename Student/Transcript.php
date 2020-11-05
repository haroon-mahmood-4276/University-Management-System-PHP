<?php

session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transcript - UNi Portal Management System (UPMS)</title>

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


	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6" style="text-align: justify;">
				<h5><b> Disclaimer</b></h5>
				<p>This is for student record only. Printout from this Online Transcript will not
					be accepted for any official purpose. Official Transcript will be issued by Office of the
					Controller of Examinations with signature and official seal...</p>
			</div>

		</div>
	</div>
	<div class="container-fluid my-3">
		<div class="row">
			<div class="table-responsive col-lg-5 col-md-10 col-sm-10">
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
			<div class="col-lg-1 col-md-2 col-sm-2">
				<a target="_blank" href="../images/Kazmi.jpg"> <img class="img-thumbnail bg-UNi rounded ml-auto"
						src="../images/Kazmi.jpg"></a>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row  text-center">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<table class="table table-bordered">
					<thead class="bg-UNi">
						<tr>
							<th>Course code</th>
							<th>Course Title</th>
							<th>Cr. Hrs</th>
							<th>Grade</th>
							<th>G.P</th>
						</tr>
					</thead>
					<tbody>
						<tr class="text-left">
							<th colspan="5">Semester - 1</th>
						</tr>
						<tr>
							<td>XC350</td>
							<td>Introduction to Computer Programming</td>
							<td>3</td>
							<td>A</td>
							<td>12</td>
						</tr>
						<tr>
							<td>XC355</td>
							<td>Database Systems</td>
							<td>3</td>
							<td>A</td>
							<td>12</td>
						</tr>
						<tr>
							<td>XC360</td>
							<td>Computer Networks</td>
							<td>3</td>
							<td>A</td>
							<td>12</td>
						</tr>
						<tr>
							<td>XC370</td>
							<td>Digital Logic Design</td>
							<td>3</td>
							<td>A</td>
							<td>12</td>
						</tr>
						<tr>
							<td>XC375</td>
							<td>English Comprehension</td>
							<td>3</td>
							<td>A</td>
							<td>12</td>
						</tr>
						<tr class="bg-UNi">
							<td colspan="2"><b>CGPA: 4.0</b></td>
							<td colspan="2">Total Cr. hrs:
								15</td>
							<td>SGPA: 4.0</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12">
				<table class="table table-bordered">
					<thead class="bg-UNi">
						<tr>
							<th>Course code</th>
							<th>Course Title</th>
							<th>Cr. Hrs</th>
							<th>Grade</th>
							<th>G.P</th>
						</tr>
					</thead>
					<tbody>
						<tr class="text-left">
							<th colspan="5">Semester - 2</th>
						</tr>
						<tr>
							<td>XC350</td>
							<td>Introduction to Computer Programming</td>
							<td>3</td>
							<td>B</td>
							<td>12</td>
						</tr>
						<tr>
							<td>XC355</td>
							<td>Database Systems</td>
							<td>3</td>
							<td>B</td>
							<td>12</td>
						</tr>
						<tr>
							<td>XC360</td>
							<td>Computer Networks</td>
							<td>3</td>
							<td>B</td>
							<td>12</td>
						</tr>
						<tr>
							<td>XC370</td>
							<td>Digital Logic Design</td>
							<td>3</td>
							<td>B</td>
							<td>12</td>
						</tr>
						<tr>
							<td>XC375</td>
							<td>English Comprehension</td>
							<td>3</td>
							<td>B</td>
							<td>12</td>
						</tr>
						<tr class="bg-UNi">
							<td colspan="2"><b>CGPA: 4.0</b></td>
							<td colspan="2">Total Cr. hrs:
								15</td>
							<td>SGPA: 4.0</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<table class="table table-bordered" style="background-color:#eee;">
					<tr>
						<th>Credit Hours Earned : 15</th>
						<th>Credit Hours for GPA : 15</th>
						<th>Total Grade Points : 42.90</th>
						<th>CGPA : 2.86 / 4.00</th>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<div class="container-fluid my-5">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="card">
					<div class="card-header">
						<h4>Important Information</h4>
					</div>
					<div class="card-body">
						<ul>
							<li> This progress report shows the courses student has registered so far. This does
								not indicate that all requisites for the degree have been fulfilled.</li>
							<hr>
							<li> Student shall apply for official Progress Report to Office of the Controller of
								Examinations for sending his/her academic performance officially to the Institutes /
								Universities / Employers.</li>
						</ul>
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
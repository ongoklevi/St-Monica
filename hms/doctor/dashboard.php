<?php
session_start();
error_reporting(0);
include('include/config.php');
if (strlen($_SESSION['id'] == 0)) {
	header('location:logout.php');
} else {

?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Doctor | Dashboard</title>
		<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

		<link rel="stylesheet" href="dashboard3.css">




	</head>

	<body>
		<?php error_reporting(0); ?>
		<input type="checkbox" id="menu-toggle">
		<div class="sidebar">
			<div class="side-header">
				<h3>St.<span>Monica</span></h3>
			</div>

			<div class="side-content">

				<div class="profile">
					<div class="profile-img bg-img" style="background-image: url('profilepic2.png');"></div>
					<h4 class="text-uppercase"><?php $query = mysqli_query($con, "select doctorName from doctors where id='" . $_SESSION['id'] . "'");
												while ($row = mysqli_fetch_array($query)) {
													echo $row['doctorName'];
												}
												?></h4>
				</div>

				<div class="side-menu">
					<ul>
						<li>
							<a href="#" class="active" style="text-decoration: none;">
								<span class="las la-home"></span>
								<small>Dashboard</small>
							</a>
						</li>
						<li>
							<a href="edit-profile.php"  style="text-decoration: none;">
								<span class="las la-home"></span>
								<small>Profile</small>
							</a>
						</li>
						<li>
							<a href="appointment-history.php" style="text-decoration: none;">
								<span class="las la-clipboard-list"></span>
								<small>View Appointment History</small>
							</a>
						</li>
						<li>
							<a href="manage-patient.php" style="text-decoration: none;">
								<span class="las la-user-alt"></span>
								<small>Manage Patient</small>
							</a>
						</li>

						<li>
							<a href="add-patient.php" style="text-decoration: none;">
								<span class="las la-envelope"></span>
								<small>Add Patient</small>
							</a>
						</li>

					</ul>
				</div>
			</div>
		</div>

		<div class="main-content">


			<header>
				<div class="header-content">
					<label for="menu-toggle">
						<span class="las la-bars"></span>
					</label>

					<div class="header-menu">
						<label for="">
							<span class="las la-search"></span>
						</label>

						<div class="notify-icon">
							<span class="las la-envelope"></span>
							<span class="notify">4</span>
						</div>

						<div class="notify-icon">
							<span class="las la-bell"></span>
							<span class="notify">3</span>
						</div>

						<div class="user">
							<div class="bg-img" style="background-image: url(img/1.jpeg)"></div>

							<span class="las la-power-off"></span>
							<a href="logout.php">
								<span class="btn btn-primary">Logout</span>
							</a>

						</div>
					</div>
				</div>
			</header>


			<main>

				<div class="page-header">
					<h1>Appointment History</h1>
					<small>Home / Appointment History</small>
				</div>
				<!-- start: BASIC EXAMPLE -->
				<div class="analytics">
					<div class="card">
						<div class="card-head">
							<h2>My Profile</h2>
						</div>
						<div class="card-progress">
							<small>click to update profile</small>
							<br><br>
							<button type="button" class="btn btn-outline-primary">
								<a href="edit-profile.php" style="text-decoration: none;">
									Update Profile
								</a>
							</button>
						</div>
					</div>
					<div class="card">
						<div class="card-head">
							<h2>My Appointments</h2>
						</div>
						<div class="card-progress">
							<small>click to View Appointment History </small>
							<br><br>
							<button type="button" class="btn btn-outline-primary">
								<a href="appointment-history.php" style="text-decoration: none;">
									My Appointments
								</a>
							</button>
						</div>
					</div>
				</div>
				<?php include('include/footer.php'); ?>

			</main>
		</div>

		<!-- end: SELECT BOXES -->

		</div>
		</div>
		</div>
		<!-- start: FOOTER -->

		<!-- end: FOOTER -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-f7OyTqX3cT3W6jVHzq+Q6JgqXzR2O8G9Xl5nQj1RyyKj2lNQv1hY5t5xuQ9l9vYr" crossorigin="anonymous"></script>




		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>

	</html>
<?php } ?>
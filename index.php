<?php
include 'includes/variables.php';
?>
<!DOCTYPE HTML>

<html>
	<head>
		<?php echo "<title>".$organization." Proud Center</title>"; ?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
<?php
include 'includes/header.php';
?>
									</span>
								</a>

<?php
include 'includes/nav.php';
?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Proud Center</h1>
								<p>This system was designed with you in mind. Proud Center is your
									<?php echo $organization; ?>
									digital tour guide through our website links.</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="students.php">
										<h2>Students</h2>
										<div class="content">
											<?php echo "<p>Links to help ".$organization." students succeed.</p>"; ?>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="staff.php">
										<h2>Staff</h2>
										<div class="content">
											<?php echo "<p>".$organization." employees may find these links useful.</p>"; ?>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="admin.php">
										<h2>Admin</h2>
										<div class="content">
											<?php echo "<p>Administrative staff at ".$organization." may find helpful links here.</p>"; ?>
										</div>
									</a>
								</article>
							</section>
						</div>
					</div>

				<!-- Footer -->
<?php
include 'includes/footer.php';
?>
				
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
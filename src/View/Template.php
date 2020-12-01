<!DOCTYPE html>
<html>
<head>
	<?php include_once("Imports/ImportsTitle.php"); ?>
	<?php include_once("Imports/ImportsMeta.php"); ?>
	<?php include_once("Imports/ImportsCss.php"); ?>
</head>
<body class="bg-light sb-nav-fixed">
	<?php include_once("Modules/Components/Navbar.php"); ?>
	
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<?php include_once("Modules/Components/Sidebar.php"); ?>
		</div>

		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
					<?php if (isset($_GET['action'])) {
						if (file_exists("src/View/Modules/" . $_GET['action'] . ".php")) {
							include("src/View/Modules/" . $_GET['action'] . ".php");
						} else {
							include("Modules/Dashboard.php");
						}
					} else {
						include("Modules/Dashboard.php");
					} ?>
				</div>
			</main>

			<?php include_once("Modules/Components/Footer.php"); ?>
		</div>
	</div>

	<?php include_once("Imports/ImportsScripts.php"); ?>
</body>
</html>
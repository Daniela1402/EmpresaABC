<?php 
$links = array(
	array("Dashboard", "Dashboard", "Online"), 
	array("Login","Login", "Offline"),
	array("Clientes","Clientes", "Online"),
	array("Agencias","Agencias", "Online"),
	array("Salir", "Salir", "Online"),
	array("Home", "Home", "Offline")

); 

?>

<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
	<div class="sb-sidenav-menu">
		<div class="nav">
			<div class="sb-sidenav-menu-heading">Core</div>
			<?php for ($i = 0; $i < count($links); $i++) {
				if ($_SESSION) {
					if ($links[$i][2] === "Online") { ?>
						<a href="<?php echo($links[$i][0]) ?>" class="nav-link">
							<?php echo($links[$i][1]) ?>
						</a>
					<?php }
				} elseif (!$_SESSION) {
					if ($links[$i][2] === "Offline") { ?>
						<a href="<?php echo($links[$i][0]) ?>" class="nav-link">
							<?php echo($links[$i][1]) ?>
						</a>
					<?php }
				} 
			} ?>
		</div>
	</div>
</nav>
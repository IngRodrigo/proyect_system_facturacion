<?php
session_start();
if(empty($_SESSION['active'])){
header('Location:../');//redirecciona al index en este caso el login.
}

?>
<header>
		<div class="header">
			
			<h1>Sistema Facturación</h1>
			<div class="optionsBar">
				<p><?=fechaC()?></p>
				<span>|</span>
				<span class="user"><?=$_SESSION['user']?></span>
				<img class="photouser" src="img/user.png" alt="Usuario">
				<a href="salir.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
    <?php
    require_once('includes/nav.php');
    ?>
	</header>
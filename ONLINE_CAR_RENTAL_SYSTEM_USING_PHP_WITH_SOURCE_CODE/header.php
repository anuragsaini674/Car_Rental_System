<?php
	session_start();
?>
<header>
			<div class="wrapper">
				<h1 class="logo"> Car Company</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(isset($_SESSION['email'])==false && isset($_SESSION['pass'])==false){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php">Rent Cars</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
						<li><a style="color:green" href="account.php">Client Login</a></li>
						<li><a style="color:green" href="login.php">Admin Login</a></li>
					</ul>
					
					
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
								<li><a style="color:red" href="admin/logout.php">Logout</a></li>
							</ul>
					
					<?php
						}
					?>
				</nav>
			</div>
		</header>
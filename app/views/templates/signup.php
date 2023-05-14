<body>	
	<?php
		require_once 'nav.php';
	?>
	<div class="content-container">
		<div class="login-form">
		<form method="POST">
			<input placeholder="Username" type="text" name="username" required></br>
			<input placeholder="Password" type="password" name="password" required></br>
			<input placeholder="Repeat Password" type="password" name="repeat_password" required></br>
			<input placeholder="Email" type="email" name="email" required></br>
			<button type="submit">Submit</button></br>
			<?php
				if($_SESSION['error']){
					echo $_SESSION['error'];
				}
			?>
			<div>
				Already have an account? Login <a class="redirect-link" href=<?php echo URL."/public/login"?>>here!</a>
			</div>
		</form>			
	</div>	
	</div>
</body>
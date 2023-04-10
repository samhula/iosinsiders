<body>	
	<?php
		require_once 'nav.php';
	?>
	<div class="content-container">
		<div class="login-form">
		<form method="POST">
			<input placeholder="Username" type="text" name="username"></br>
			<input placeholder="Password" type="password" name="password"></br>
			<input placeholder="Repeat Password" type="password" name="password"></br>
			<input placeholder="Email" type="text" name="email"></br>
			<button type="submit">Submit</button>
			<div>
				Already have an account? Login <a class="redirect-link" href=<?php echo URL."/public/login"?>>here!</a>
			</div>
		</form>			
	</div>	
	</div>
</body>
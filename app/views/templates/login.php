<body>	
	<?php
		require_once 'nav.php';
	?>
	<div class="content-container">
		<div class="login-form">
			<form method="POST">
				<input placeholder="Username" type="text" name="username"></br>
				<input placeholder="Password" type="password" name="password"></br>
				<button type="submit">Submit</button>
			</form>			
			<!-- <?php #echo $_SESSION['error']?> -->
			<div>
				Don't have an account? Sign up <a class="redirect-link" href=<?php echo URL."/public/signup"?>>here!</a>
			</div>
		</div>
	</div>
</body>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php 
			if(isset($data['id']) && $data['id'] != ''){
				echo $data['page_title'].' | '.$data['id'];
			}
			else{
				echo $data['page_title']." | ".WEBSITE_NAME;
			}
		?>	
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL?>/public/css/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- jQuery import -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
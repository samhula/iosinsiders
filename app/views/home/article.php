<!DOCTYPE html>
<html lang="en-GB">
<?php
	$this->view("templates/head", $data);
	$this->view("templates/content", $data);
	$this->view("templates/footer", $data);

	echo $data['id'];
?>
</html>
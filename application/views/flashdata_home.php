<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Flashdata for Codeigniter</title>
	</head>

	<body>
		Flashdata example
		<h2>
			<?php echo $this->session->flashdata('collins'); ?>
			<a href="flashdata/add">Click here </a>
		</h2>

	</body>

</html>
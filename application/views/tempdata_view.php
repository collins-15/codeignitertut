<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tempdata for Codeigniter</title>
	</head>

	<body>
		Tempdata example
		<h2>
			<?php echo $this->session->tempdata('item'); ?>
			<a href="tempdata/add">Click here </a>
		</h2>

	</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GET - POST</title>
</head>

<body>

	<form method="post" action="index.php">
		<input type="text" name="name">
		<input type="text" name="lastname">
		<input type="submit" value="submit">
	</form>

	<?php
	if (isset($_POST['name'], $_POST['lastname'])) {
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		echo htmlspecialchars($name) . " " . htmlspecialchars($lastname);
	}
	?>

</body>

</html>
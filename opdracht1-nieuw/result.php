<?php require_once("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>De aanmeldingen:</h1>
		<?php
			$sql="SELECT * FROM `velden`";
			$query = mysqli_query($conn, $sql);

			while($row = mysqli_fetch_array($query)) { ?>
			<div class="card"> <?php
				echo 'Name: '. $row["name"].'<br>';
				echo 'Age: '. $row["age"] . '<br>';
				echo 'Gender: ' . $row["gender"] . '<br>'; ?>
				</div><?php
			} ?>
			<button class="button"><a href="index.php">Vul er nog 1 in</a></button>
		</div>
</body>
</html>
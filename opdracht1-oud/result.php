<?php require_once("assets/results.php"); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Resultpage</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container"> 
<?php
	foreach($result as $row) { ?>
		<div class="card">
			<?php
			echo 'Name: '. $row["text"].'<br>';
			echo 'Age: '. $row["number"].'<br>';
			echo 'Gender: '. $row["dropdown"].'<br>';
			echo 'Device: '. $row["checkbox"].'<br>'; ?>
		</div> 
		<?php
			}
		?>
		<a href="index.php"><button class="button">Vul er nog 1 in</button></a>
	</div>
</body>
</html>
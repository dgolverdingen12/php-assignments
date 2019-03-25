<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Meld je aan voor deze leuke test!</h1>
		<form action="form.php" class="form" method="post">
			<input type="text" name="name" placeholder="name">
			<input type="number" name="age" placeholder="age">
			<select name="gender">
				<option value="default">Default</option>
				<option value="female">Female</option>
				<option value="men">Men</option>
			</select>
			<button type="submit" class="button" name="versturen">Versturen</button>
		</form>
	</div>
</body>
</html>
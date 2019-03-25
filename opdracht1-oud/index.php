<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Doe mee!</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Doe mee met deze leuke actie!</h1>
		<form class="form" action="assets/process.php" method="post">
			<input type="text" name="text" placeholder="Name">
			<input type="number" name="number" placeholder="Age">
			<select name="dropdown">
				<option value="default">Choose Gender</option>
				<option value="Female">Female</option>
				<option value="Men">Men</option>
			</select>
			<div class="input__box">
				<label>Iphone</label><input value='Iphone' name='checkbox' type='checkbox'>
				<label>Samsung</label><input value='Samsung' name='checkbox' type='checkbox'>
			</div>
			<button type="submit" name="versturen" class="button button--succes">Versturen</button>
		</form>
	</div>
</body>
</html>
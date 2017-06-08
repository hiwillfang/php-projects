<!DOCTYPE html>
<html>
	<head>
		<title>Registration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>

	<body>
		<div class="w3-card w3-margin w3-padding">

			<?php if(isset($_GET['error'])) : ?>
				<div class="w3-panel w3-red">
					<p><?php echo $_GET['error']; ?></p>
				</div>
			<?php endif; ?>

			<h2>Register</h2>
			<form method="POST" action="register.php" class="w3-container">
				<label class="w3-label w3-text-blue">First Name</label>
				<input type="text" name="first_name" class="w3-input w3-border">
				<br>
				<label class="w3-label w3-text-blue">Last Name</label>
				<input type="text" name="last_name" class="w3-input w3-border">
				<br>
				<label class="w3-label w3-text-blue">Email</label>
				<input type="text" name="email" class="w3-input w3-border">
				<br>
				<label class="w3-label w3-text-blue">Location</label>
				<select name="" name="location" class="w3-input w3-border">
					<option value="Location 1">Location 1</option>
					<option value="Location 2">Location 2</option>
					<option value="Location 3">Location 3</option>
				</select>
				<br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</body>
</html>
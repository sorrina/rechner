<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Das neueste kompilierte und minimierte CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optionales Theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<!-- Das neueste kompilierte und minimierte JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Eingabe Formular</title>
</head>
<body>


	<div class="container">
		<form action="" method="post">
			<div class="form-group">
				<label>Zahl 1:</label>
				<input type="text" name="zahl1" class="form-control">
			</div>
			<div class="form-group">
				<select name="operator">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
					<option value="/">/</option>
					<option value="√">/</option>
				</select>
			</div>
			<div class="form-group">
				<label>Zahl 2:</label>
				<input type="text" name="zahl2" class="form-control">
			</div>
			<input type="submit" value="rechnen" name="button" class="btn btn-primary">
		</form>
	</div>

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php include("rechner.php"); ?>
			</div>
		</div>
	</div>
</body>
</html>

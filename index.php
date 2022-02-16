<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body>
		<div class="container">
			<section class="row justify-content-center">
				<article class="col-5 container">
					<h2 class="row justify-content-center">Question 1</h2>
					<form action="index.php" method="post" class="row justify-content-center">
						<p>Nombre : <input type="number" name="q1" required/></p>
						<p><input type="submit" /></p>
					</form>
								
					<?php include("q1.php"); ?>
				</article>
				<article class="col-5 container">
					<h2 class="row justify-content-center">Question 2</h2>
					<form action="index.php" method="post" class="row justify-content-center">
						<p>Nombre : <input type="number" name="q2" required/></p>
						<p><input type="submit" /></p>
					</form>
								
					<?php include("q2.php"); ?>
				</article>
				<article class="col-5 container">
					<h2 class="row justify-content-center">Question 3</h2>			
					<?php include("q3.php"); ?>
				</article>
				<article class="col-5 container">
					<h2 class="row justify-content-center">Question 4</h2>
					<form action="index.php" method="post" class="row justify-content-center">
						<p>Utilisateur : <input type="text" name="q4" required/></p>
						<p><input type="submit" /></p>
					</form>
								
					<?php include("q4.php"); ?>
				</article>
			</section>
		</div>
	</body>
</html>
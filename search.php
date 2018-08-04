<?php
	include "includes/db.php";
	if (isset($_GET['niv']) && isset($_GET['mat']) && isset($_GET['com']) && isset($_GET['cat'])) {

	} else {
		header("location: index.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<title>البحث عن تمرين</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/fav.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css.map">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container-fluid pt-5">
		<div class="row justify-content-center">
			<div class="col-10 col-sm-6 col-md-4 col-xl-3">
				<img src="images/bank-logo.png" class="img-fluid mb-3" />
			</div>
			<div class="w-100"></div>
			<div class="col-sm-3">
				<select></select>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js.map"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function (){
		});
	</script>
</body>
</html>
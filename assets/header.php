<?php
	include 'includes/user_check.php';
	if ($log_id == "" && $log_e == "" && $log_p == "") {
		header("location: index.php");
		exit();
	} else {
		$log_stmt = $tinml_con->prepare("SELECT * FROM `users` WHERE `id`=? AND `email`=? AND `password`=? LIMIT 1");
    $log_stmt->bindParam(1, $log_id, PDO::PARAM_INT);
    $log_stmt->bindParam(2, $log_e, PDO::PARAM_STR);
    $log_stmt->bindParam(3, $log_p, PDO::PARAM_STR);
		$log_stmt->execute();
		if ($log_stmt->rowCount() > 0) {
			$log_stmt->setFetchMode(PDO::FETCH_ASSOC);
			$log_row = $log_stmt->fetch();
		}
	}
	$color1 = $log_row['color1'];
	$color2 = $log_row['color2'];
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<title>موقع تنمل</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/fav.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body class="bg-<?php echo $color1 ?> text-<?php echo $color2 ?>">
	<?php include 'assets/spinner.php' ?>
  <div class="navbar fixed-top justify-content-between bg-<?php echo $color2 ?> p-0" style="z-index: 5005">
		<div class="dropdown open">
			<button class="btn btn-outline-<?php echo $color1 ?> rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="box-shadow:none"><i class="fas fa-user-circle fa-lg"></i></button>
			<div class="dropdown-menu bg-<?php echo $color2 ?> rounded-0 text-right p-0" aria-labelledby="dropdownMenu2" style="left: -120px;z-index: 9999">
				<a class="btn btn-block btn-outline-<?php echo $color1 ?> rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 m-0 text-right" href="profile.php"><i class="fas fa-cog ml-2"></i>الإعدادات</a>
				<a class="btn btn-block btn-outline-<?php echo $color1 ?> rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 m-0 text-right" href="includes/logout.php"><i class="fas fa-power-off ml-2"></i>تسجيل الخروج</a>
			</div>
		</div>
		<ul class="nav p-0">
			<li class="nav-item">
				<a class="btn btn-outline-<?php echo $color1 ?> rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="diary.php" style="box-shadow:none"><span class="d-none d-md-inline">المذكرة</span><i class="fas fa-book-open mr-md-2"></i></a>
			</li>
			<li class="nav-item">
				<a class="btn btn-outline-<?php echo $color1 ?> rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="files.php" style="box-shadow:none"><span class="d-none d-md-inline">الوثائق</span><i class="fas fa-briefcase mr-md-2"></i></a>
			</li>
			<li class="nav-item">
				<a class="btn btn-outline-<?php echo $color1 ?> rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="eval.php" style="box-shadow:none"><span class="d-none d-md-inline">التقويم</span><i class="fas fa-highlighter mr-md-2"></i></a>
			</li>
			<li class="nav-item">
				<a class="btn btn-outline-<?php echo $color1 ?> rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="learn.php" style="box-shadow:none"><span class="d-none d-md-inline">التكوين</span><i class="fas fa-graduation-cap mr-md-2"></i></a>
			</li>
			<li class="nav-item">
				<a class="btn btn-outline-<?php echo $color1 ?> rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="calendar.php" style="box-shadow:none"><span class="d-none d-md-inline">اليومية</span><i class="fas fa-calendar-alt mr-md-2"></i></a>
			</li>
		</ul>
    <a class="btn btn-outline-<?php echo $color1 ?> rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 float-left" href="dashboard.php" style="box-shadow:none"><i class="fas fa-home"></i></a>
  </div>
	<div class="row no-gutters h-100 justify-content-center p-0 pt-5" style="min-height: 100vh">
		<div class="col-12 align-self-top">

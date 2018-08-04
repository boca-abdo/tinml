<?php
$clr1 = "dark";
$clr2 = "light";
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<title>حساب جديد ¦ موقع تنمل</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/fav.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script src="https://www.google.com/recaptcha/api.js?hl=ar" async defer></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-<?php echo $clr2 ?> text-<?php echo $clr1 ?>">
	<div class="container h-100">
		<div class="row justify-content-center" style="min-height: 100vh">
			<div class="col-md-8 align-self-center text-center">
				<div class="card border-secondary rounded-0 card-shadow">
					<div class="card-header">
						<i class="fas fa-user-plus text-info fa-5x"></i>
						<h1 class="card-title font-weight-bold mt-2 d-none d-md-block">مستخدم جديد</h1>
					</div>
					<div class="card-block p-3">
						<form class="form-row justify-content-center pt-5" action="" method="post" autocomplete="off">
							<div class="col-lg-6">
								<fieldset class="form-group">
									<div class="input-group">
										<div class="input-group-append">
									    <span class="input-group-text bg-transparent border-left-0 border-top-0 border-right-0"><i class="fas fa-at fa-lg"></i></span>
									  </div>
									  <input type="email" id="email" class="form-control position-relative text-center bg-transparent font-weight-bold rounded-0 border-left-0 border-top-0 border-right-0" style="z-index: 2;outline: none">
									</div>
									<label class="position-relative">البريد الالكتروني</label>
								</fieldset>
							</div>
							<div class="col-lg-6">
								<fieldset class="form-group">
									<div class="input-group">
										<div class="input-group-append">
									    <span class="input-group-text bg-transparent border-left-0 border-top-0 border-right-0"><i class="fas fa-at fa-lg"></i></span>
									  </div>
									  <input type="email" id="c_email" class="form-control position-relative text-center bg-transparent font-weight-bold rounded-0 border-left-0 border-top-0 border-right-0" style="z-index: 2;outline: none">
									</div>
									<label class="position-relative">تأكيد البريد الالكتروني</label>
								</fieldset>
							</div>
							<div class="col-lg-6">
								<fieldset class="form-group">
									<div class="input-group">
										<div class="input-group-append">
									    <span class="input-group-text bg-transparent border-left-0 border-top-0 border-right-0"><i class="fas fa-lock fa-lg"></i></span>
									  </div>
									  <input type="password" id="password" class="form-control position-relative text-center bg-transparent font-weight-bold rounded-0 border-left-0 border-top-0 border-right-0" style="z-index: 2;outline: none">
									</div>
									<label class="position-relative">الرمز السري</label>
								</fieldset>
							</div>
							<div class="col-lg-6">
								<fieldset class="form-group">
									<div class="input-group">
										<div class="input-group-append">
									    <span class="input-group-text bg-transparent border-left-0 border-top-0 border-right-0"><i class="fas fa-lock fa-lg"></i></span>
									  </div>
									  <input type="password" id="c_password" class="form-control position-relative text-center bg-transparent font-weight-bold rounded-0 border-left-0 border-top-0 border-right-0" style="z-index: 2;outline: none">
									</div>
									<label class="position-relative">تأكيد الرمز السري</label>
								</fieldset>
							</div>
							<div class="col-auto mx-auto mb-3" id="captcha">
								<div class="g-recaptcha" data-sitekey="6LeG1TEUAAAAAK120wk9fdBg1kY-tZQYWwrEXsTy"></div>
							</div>
							<div class="w-100">
								<div class="alert alert-danger border border-secondary rounded-0 font-weight-bold animated fadeOut d-none m-0 mb-3" role="alert"></div>
							</div>
							<div class="col-sm-4">
								<button type="button" id="submit" class="btn btn-lg btn-block btn-outline-dark rounded-0 font-weight-bold">تسجيل<i class="fas fa-sign-in-alt fa-fw mr-2 animated slideInLeft infinite"></i></button>
							</div>
						</form>
					</div>
					<div class="card-footer row no-gutters justify-content-between">
						<div class="col text-right">
							<a href="index.php">تسجيل الدخول</a>
						</div>
						<div class="col text-left">
							<a href="forget.php">نسيت الرمز السري</a>
						</div>
					</div>
				</div>
			</div>
			<div class="w-100"></div>
			<div class="col-auto align-self-end font-weight-bold mt-5">
				<span class="mt-5">جميع الحقوق مفتوحة مقابل دعوة صالحة</span>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function (){
			var response,
			$btn = $("#submit"),
			$e = $("#email"),
			$e_c = $("#c_email"),
			$p = $("#password"),
			$p_c = $("#c_password"),
			testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
			function alertShow(msg) {
				$btn.removeClass("btn-outline-info").addClass("btn-outline-danger").html('هناك خطأ<i class="fas fa-exclamation-triangle fa-fw mr-2 animated zoomIn infinite"></i>').parents("form").find("div.alert").removeClass("fadeOut d-none").addClass("fadeIn").text(msg);
				setTimeout(function(){alertHide()},2000);
			}
			function alertHide() {
				$btn.removeClass("btn-outline-danger").addClass("btn-outline-<?php echo $clr1 ?>").html('تسجيل<i class="fas fa-sign-in-alt fa-fw mr-2 animated slideInLeft infinite"></i>').parents("form").find("div.alert").removeClass("fadeIn").addClass("fadeOut");
				setTimeout(function(){$btn.parents("form").find("div.alert").addClass("d-none")},1000);
			}
			function validate() {
				response = grecaptcha.getResponse()
				$btn.removeClass("btn-outline-dark").addClass("btn-outline-info").html('المرجو الانتظار<i class="fas fa-spinner fa-pulse fa-fw mr-2"></i>');
				if ($e.val() == "") {
					alertShow("المرجو ادخال البريد الالكتروني");
				} else if(testEmail.test($e.val()) == false) {
					alertShow("البريد الالكتروني غير صحيح");
				} else if($e_c.val() == "") {
					alertShow("المرجو تأكيد البريد الالكتروني");
				} else if($e.val() !== $e_c.val()) {
					alertShow("البريدان غير متطابقان");
				} else if($p.val() == "") {
					alertShow("المرجو ادخال الرمز السري");
				} else if($p.val().length < 6) {
					alertShow("6 حروف أو أكثر");
				} else if($p_c.val() == "") {
					alertShow("المرجو تأكيد الرمز السري");
				} else if($p.val() !== $p_c.val()) {
					alertShow("الرمزان غير متطابقان");
				} else if (response == "") {
					alertShow("المرجو التحقق من أنك لست روبوت");
				} else {
					$.ajax({
						url: "includes/register.php",
						type: "POST",
						data: {
							e: $e.val(),
							p: $p.val()
						},
						success: function(res) {
							if (res === "email") {
								alertShow("البريد الالكتروني خاطئ");
							} else if (res === "dup") {
								alertShow("البريد الالكتروني سبق استخدامه");
							} else if (res === "pass") {
								alertShow("6 حروف أو أكثر");
							} else if (res === "success") {
								$btn.removeClass("btn-outline-info").addClass("btn-outline-success").html('مرحبا بكم<i class="fas fa-check fa-fw mr-2"></i>');
								setTimeout(function() {
									window.open('index.php', '_self');
								},1000);
							} else {
								alertShow("حدث خطأ غير متوقع، المرجو اعادة المحاولة لاحقا. اذا استمر المشكل المرجو الاتصال بادارة الموقع.");
								console.log(res);
							}
						},
						error: function(stt,xhr,err) {
							console.log(err);
						}
					});
				}
			}
			$(".form-control").on("focus", function(){
				$(this).parent().next().addClass("lbl");
			});
			$(".form-control").on("blur", function(){
				if ($(this).val().trim() == "") {
					$(this).parent().next().removeClass("lbl");
				}
			});
			$btn.on('click', function () {
				validate();
			});
			$(document).keypress(function(event){
    		if(event.keyCode == 13){
        	validate();
    		}
			});
		});
	</script>
</body>
</html>

<?php
	include 'includes/user_check.php';
	if ($log_id == "" && $log_e == "" && $log_p == "") {
		header("location: index.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<title>المعلومات العامة | موقع تنمل</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/fav.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light text-dark">
	<div class="container">
		<div class="row justify-content-center" style="min-height: 100vh">
			<div class="col-md-8 align-self-center text-center">
				<div class="spinner row justify-content-center align-items-center h-100 w-100 position-absolute d-none" style="z-index: 1001;background-color: rgba(255,255,255,0.8)">
					<i class="fas fa-spinner fa-pulse fa-10x"></i>
				</div>
				<div class="card border-secondary rounded-0 card-shadow">
					<div class="card-header">
						<i class="fas fa-info-circle fa-5x"></i>
						<h1 class="card-title font-weight-bold mt-2">المعلومات العامة</h1>
					</div>
					<div class="card-block p-3">
						<ul class="nav nav-pills nav-fill mb-3 p-0 w-50 mx-auto" id="steps-menu" role="tablist">
							<li class="nav-item">
								<a class="btn btn-outline-dark p-0 rounded-circle active" id="step1-tab" data-toggle="tab" href="#step1" role="tab" aria-controls="step1" style="height: 15px; width: 15px"></a>
							</li>
							<li class="nav-item">
								<a class="btn btn-outline-dark p-0 rounded-circle" id="step2-tab" data-toggle="tab" href="#step2" role="tab" aria-controls="step2" style="height: 15px;width: 15px"></a>
							</li>
							<li class="nav-item">
								<a class="btn btn-outline-dark p-0 rounded-circle" id="step3-tab" data-toggle="tab" href="#step3" role="tab" aria-controls="step3" style="height: 15px;width: 15px"></a>
							</li>
							<li class="nav-item">
								<a class="btn btn-outline-dark p-0 rounded-circle" id="step4-tab" data-toggle="tab" href="#step4" role="tab" aria-controls="step4" style="height: 15px;width: 15px"></a>
							</li>
						</ul>
						<hr>
						<div class="tab-content" id="steps-content">
						  <div class="tab-pane fade show active" id="step1" role="tabpanel" aria-labelledby="step1-tab">
								<h4 class="h4 font-weight-bold border border-dark w-100 p-2 bg-dark text-light">المعلومات الشخصية</h4>
								<small class="text-muted">سنستعمل هذه المعلومات لاعداد وثائقكم الشخصية فقط ولا أحد سيطلع عليها</small>
								<form class="form-row justify-content-center mt-5" action="" method="post" autocomplete="off">
									<div class="col-lg-6">
										<fieldset class="form-group">
											<label for="fn_ar" class="form-label">الاسم الكامل بالعربية</label>
											<input type="text" id="fn_ar" class="form-control form-control-lg text-center font-weight-bold rounded-0" value="<?php echo $log_row['name_ar'];?>">
										</fieldset>
									</div>
									<div class="col-lg-6">
										<fieldset class="form-group">
											<label for="fn_fr" class="form-label">الاسم الكامل بالفرنسية</label>
											<input type="text" id="fn_fr" class="form-control form-control-lg text-center font-weight-bold rounded-0" value="<?php echo $log_row['name_fr'];?>">
										</fieldset>
									</div>
									<div class="col-lg-6">
										<fieldset class="form-group">
											<label for="fn_fr" class="form-label">رقم التأجير</label>
											<input type="number" id="doti" class="form-control form-control-lg text-center font-weight-bold rounded-0" value="<?php echo $log_row['doti'];?>">
										</fieldset>
									</div>
									<div class="w-100">
										<div class="alert alert-danger border border-secondary rounded-0 font-weight-bold animated fadeOut d-none" role="alert"></div>
									</div>
									<div class="col-lg-4">
										<button type="button" id="step1-submit" class="btn btn-lg btn-block btn-outline-dark rounded-0 font-weight-bold mt-3">تحديث<i class="fas fa-pencil-alt fa-fw mr-2 animated wobble infinite"></i></button>
									</div>
									<div class="w-100 mt-2">
										<button type="button" class="btn btn-sm btn-outline-dark rounded-0 next" style="width: 50px"><i class="fas fa-angle-double-left animated slideOutLeft infinite"></i></button>
									</div>
								</form>
							</div>
						  <div class="tab-pane fade" id="step2" role="tabpanel" aria-labelledby="step2-tab">
								<h4 class="h4 font-weight-bold border border-dark w-100 p-2 bg-dark text-light">مقر العمل</h4>
								<small class="text-muted">المرجو كتابة اسم المؤسسة مسبوقا بـ م.م للمجموعات المدرسية ومذيلا بالفرعية أو المركزية</small>
								<form class="form-row justify-content-center mt-5" action="" method="post" autocomplete="off">
									<div class="col-lg-6">
										<fieldset class="form-group">
											<label for="aca" class="form-label">الجهة</label>
											<select class="custom-select rounded-0 text-center pt-0 w-100" id="aca">
												<option value="" selected="selected"></option>
											</select>
										</fieldset>
									</div>
									<div class="col-lg-6">
										<fieldset class="form-group">
											<label for="del" class="form-label">المديرية الاقليمية</label>
											<select class="custom-select rounded-0 text-center pt-0 w-100" id="del">
												<option value="" selected="selected"></option>
											</select>
										</fieldset>
									</div>
									<div class="col-lg-6">
										<fieldset class="form-group">
											<label for="sch_ar" class="form-label">اسم المؤسسة بالعربية</label>
											<input type="text" class="form-control rounded-0 text-center font-weight-bold" id="sch_ar" value="<?=$log_row['sch_ar']?>">
										</fieldset>
									</div>
									<div class="col-lg-6">
										<fieldset class="form-group">
											<label for="sch_ar" class="form-label">اسم المؤسسة بالفرنسية</label>
											<input type="text" class="form-control rounded-0 text-center font-weight-bold" id="sch_fr" value="<?=$log_row['sch_fr']?>">
										</fieldset>
									</div>
									<div class="w-100">
										<div class="alert alert-danger border border-secondary rounded-0 font-weight-bold animated fadeOut d-none" role="alert"></div>
									</div>
									<div class="col-lg-4">
										<button type="button" id="step2-submit" class="btn btn-lg btn-block btn-outline-dark rounded-0 font-weight-bold mt-3">تحديث<i class="fas fa-pencil-alt fa-fw mr-2 animated wobble infinite"></i></button>
									</div>
									<div class="w-100 mt-2">
										<button type="button" class="btn btn-sm btn-outline-dark rounded-0 prev" style="width: 50px"><i class="fas fa-angle-double-right animated slideOutRight infinite"></i></button>
										<button type="button" class="btn btn-sm btn-outline-dark rounded-0 next" style="width: 50px"><i class="fas fa-angle-double-left animated slideOutLeft infinite"></i></button>
									</div>
								</form>
							</div>
						  <div class="tab-pane fade" id="step3" role="tabpanel" aria-labelledby="step3-tab">
								<h4 class="h4 font-weight-bold border border-dark w-100 p-2 bg-dark text-light">المستوى المدرس</h4>
								<small class="text-muted"></small>
								<form class="form-row justify-content-center mt-5" action="" method="post" autocomplete="off">
									<div class="col-lg-6">
										<fieldset class="form-group text-right">
											<select class="custom-select custom-select-lg w-100" name="mult" id="mult">
												<option value="" selected="selected">نوع القسم</option>
												<option value="nor">نظامي</option>
												<option value="mul">مشترك</option>
												<option value="spe">التخصص</option>
											</select>
										</fieldset>
									</div>
									<div class="col-lg-6">
										<fieldset class="form-group text-right">
											<select class="custom-select custom-select-lg w-100" name="lang" id="lang">
												<option value="" selected="selected">لغة التدريس</option>
											</select>
										</fieldset>
									</div>
									<div class="col-lg-12">
										<fieldset class="form-group text-right">
											<label>المستوى أو المستويات الدراسية :</label>
											<div class="row m-0">
												<div class="col-4">
													<label class="form-check-label">
													    <input class="form-check-input" type="checkbox" name="box[]" value="1">
													    <span class="mr-4">1</span>
													</label>
												</div>
												<div class="col-4">
													<label class="form-check-label">
													    <input class="form-check-input" type="checkbox" name="box[]" value="2">
													    <span class="mr-4">2</span>
													</label>
												</div>
												<div class="col-4">
													<label class="form-check-label">
													    <input class="form-check-input" type="checkbox" name="box[]" value="3">
													    <span class="mr-4">3</span>
													</label>
												</div>
												<div class="col-4">
													<label class="form-check-label">
													    <input class="form-check-input" type="checkbox" name="box[]" value="4">
													    <span class="mr-4">4</span>
													</label>
												</div>
												<div class="col-4">
													<label class="form-check-label">
													    <input class="form-check-input" type="checkbox" name="box[]" value="5">
													    <span class="mr-4">5</span>
													</label>
												</div>
												<div class="col-4">
													<label class="form-check-label">
													    <input class="form-check-input" type="checkbox" name="box[]" value="6">
													    <span class="mr-4">6</span>
													</label>
												</div>
											</div>
										</fieldset>
									</div>
									<div class="w-100">
										<div class="alert alert-danger border border-secondary rounded-0 font-weight-bold animated fadeOut d-none" role="alert"></div>
									</div>
									<div class="col-lg-6">
										<div class="row no-gutters">
											<div class="col-6">
												<button type="button" id="step4-back" class="btn btn-lg btn-block btn-outline-dark rounded-0 font-weight-bold mt-3"><i class="fas fa-angle-double-right fa-fw ml-2 animated slideOutRight infinite"></i>السابق</button>
											</div>
											<div class="col-6">
												<button type="button" id="step4-submit" class="btn btn-lg btn-block btn-outline-dark rounded-0 font-weight-bold mt-3">التالي<i class="fas fa-angle-double-left fa-fw mr-2 animated slideOutLeft infinite"></i></button>
											</div>
										</div>
										<button type="button" id="step4-skip" class="btn btn-sm btn-link">لاحقا</button>
									</div>
								</form>
							</div>
							  <div class="tab-pane fade" id="step4" role="tabpanel" aria-labelledby="step4-tab">
									<h4 class="h4 font-weight-bold border border-dark w-100 p-2 bg-dark text-light">معلومات الدخول</h4>
									<small class="text-muted">المرجو ادخال بريد الكتروني صحيح</small>
									<form class="form-row justify-content-center mt-5" action="" method="post" autocomplete="off">
										<div class="col-lg-6">
											<fieldset class="form-group">
												<input type="email" id="email" class="form-control form-control-lg text-center font-weight-bold rounded-0" placeholder="البريد الالكتروني">
											</fieldset>
										</div>
										<div class="col-lg-6">
											<fieldset class="form-group">
												<input type="email" id="c_email" class="form-control form-control-lg text-center font-weight-bold rounded-0" placeholder="تأكيد البريد الالكتروني">
											</fieldset>
										</div>
										<div class="col-lg-6">
											<fieldset class="form-group">
												<input type="password" id="password" class="form-control form-control-lg text-center font-weight-bold rounded-0" placeholder="الرمز السري">
											</fieldset>
										</div>
										<div class="col-lg-6">
											<fieldset class="form-group">
												<input type="password" id="c_password" class="form-control form-control-lg text-center font-weight-bold rounded-0" placeholder="تأكيد الرمز السري">
											</fieldset>
										</div>
										<div class="w-100">
											<div class="alert alert-danger border border-secondary rounded-0 font-weight-bold animated fadeOut d-none" role="alert"></div>
										</div>
										<div class="col-lg-4">
											<button type="button" id="step4-submit" class="btn btn-lg btn-block btn-outline-dark rounded-0 font-weight-bold mt-3">التالي<i class="fas fa-angle-double-left fa-fw mr-2 animated slideOutLeft infinite"></i></button>
										</div>
									</form>
								</div>
						</div>
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
			var tab_id,aca,$btn,$fn_ar,$fn_fr,$aca,$del,$sch_ar,$sch_fr,$doti,
			reg_doti = /[0-9]/;
			function alertShow(msg,el) {
				$btn.removeClass("btn-outline-info btn-danger btn-success").addClass("btn-outline-danger").html('هناك خطأ<i class="fas fa-exclamation-triangle fa-fw mr-2 animated zoomIn infinite"></i>').parents("form").find("div.alert").removeClass("fadeOut d-none").addClass("fadeIn").text(msg);
				el.addClass("is-invalid");
			}
			function alertHide() {
				$btn.removeClass("btn-outline-danger").addClass("btn-outline-dark").html('تحديث<i class="fas fa-pencil-alt fa-fw mr-2 animated wobble infinite"></i>').parents("form").find("div.alert").removeClass("fadeIn").addClass("fadeOut");
				$(".form-control,.custom-select").removeClass("is-invalid is-valid");
			}
			function done() {
				$btn.removeClass("btn-outline-info").addClass("btn-outline-success").html('تم بنجاح<i class="fas fa-check fa-fw mr-2"></i>');
				$(".form-control,.custom-select").addClass("is-valid");
			}
			function getAca() {
				$.ajax({
					url: "json/schools.txt",
					type: "GET",
					error: function(stt,xhr,err) {
						console.log(err);
					},
					success: function(res){
						var result = JSON.parse(res);
						for (var key in result) {
							if (key == "<?=$log_row['aca']?>") {
								$("#aca").append("<option value='"+key+"' selected='selected'>"+result[key]["aca_ar"]+"</option>");
								getDel(key);
							} else {
								$("#aca").append("<option value='"+key+"'>"+result[key]["aca_ar"]+"</option>");
							}
						}
					}
				});
			}
			function getDel(ac) {
				$("#del").empty().append("<option value='' selected='selected'></option>");
				$.ajax({
					url: "json/schools.txt",
					type: "GET",
					error: function(stt,xhr,err) {
						console.log(err);
					},
					success: function(res){
						var result = JSON.parse(res);
						for (var key in result[ac]["dels"]) {
							if (key == "<?=$log_row['del']?>") {
								$("#del").append("<option value='"+key+"' selected='selected'>"+result[ac]["dels"][key]["del_ar"]+"</option>");
							} else {
								$("#del").append("<option value='"+key+"'>"+result[ac]["dels"][key]["del_ar"]+"</option>");
							}
						}
					}
				});
			}
			getAca();
			$(".form-control,.custom-select").on("focus", function(){
				$btn = $(this).parents("form").find("button:first");
				setTimeout(function(){alertHide()},1000);
			});
			$(".next").on('click', function() {
				tab_id = $(this).parents('.tab-pane').next().attr('id');
				$('#'+tab_id+'-tab').tab('show');
			});
			$(".prev").on('click', function() {
				tab_id = $(this).parents('.tab-pane').prev().attr('id');
				$('#'+tab_id+'-tab').tab('show');
			});
			$('#step1-submit').on('click', function(){
				$btn = $(this);
				$fn_ar = $("#fn_ar");
				$fn_fr = $("#fn_fr");
				$doti = $("#doti");
				$btn.removeClass("btn-outline-dark").addClass("btn-outline-info").html('المرجو الانتظار<i class="fas fa-spinner fa-pulse fa-fw mr-2"></i>');
				if (reg_doti.test($doti.val()) === false) {
					alertShow("المرجو استعمال الارقام فقط",$doti);
				} else {
					$.ajax({
						url: "includes/step1.php",
						type: "POST",
						data: {
							fn_ar: $fn_ar.val(),
							fn_fr: $fn_fr.val(),
							doti: $doti.val(),
						},
						success: function(res) {
							if (res === "done") {
								done();
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
			});
			$("#aca").on('change', function(){
				aca = $(this).val();
				getDel(aca);
			});
			$('#step2-submit').on('click', function(){
				$btn = $(this);
				$aca = $("#aca");
				$del = $("#del");
				$sch_ar = $("#sch_ar");
				$sch_fr = $("#sch_fr");
				$btn.removeClass("btn-outline-dark").addClass("btn-outline-info").html('المرجو الانتظار<i class="fas fa-spinner fa-pulse fa-fw mr-2"></i>');
				$.ajax({
					url: "includes/step2.php",
					type: "POST",
					data: {
						aca: $aca.val(),
						del: $del.val(),
						sch_ar: $sch_ar.val(),
						sch_fr: $sch_fr.val(),
					},
					success: function(res) {
						if (res === "done"){
							done()
						} else {
							alertShow("حدث خطأ غير متوقع، المرجو اعادة المحاولة لاحقا. اذا استمر المشكل المرجو الاتصال بادارة الموقع.");
							console.log(res);
						}
					},
					error: function(stt,xhr,err) {
						console.log(err);
					},
					complete: function() {

					}
				});
			});
		});
	</script>
</body>
</html>

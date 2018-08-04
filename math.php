<?php
	include 'includes/date.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="rtl">
<head>
	<title>الحساب الذهني السريع</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/fav.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css.map">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<span id="counter" class="position-absolute h2" style="top:10px; left:50%"></span>
	<div class="container-fluid align-items-center text-white h-100 p-5">

		<div class="row h-100 py-3">
			<div class="col-12 align-self-start text-center">
				<h1 class="display-2"><u><?php echo $full_date_ar; ?></u></h1>
				<div class="row justify-content-between px-5">
					<div class="col-6 text-right">
						<h1 class="display-2"><u>رياضيات</u></h1>
					</div>
					<div class="col-6">
						<h1 class="display-2"><u>حساب سريع</u></h1>
					</div>
				</div>
			</div>
			<div class="col-12 align-self-center">
				<div class="row text-center justify-content-center align-items-center px-5">
					<div class="col text-warning font-weight-bold" id="n1" style="font-size: 200px"></div>
					<div class="col" id="op"></div>
					<div class="col text-warning font-weight-bold" id="n2" style="font-size: 200px"></div>
					<div class="col font-weight-bold" id="eq" style="font-size: 200px"></div>
					<div class="col text-warning font-weight-bold" id="n3" style="font-size: 200px"></div>
				</div>
			</div>
			<div class="col-12 align-self-end text-right px-5">
				<div class="btn-group mr-3" role="group" aria-label="Button group with nested dropdown">
				  	<div class="btn-group" role="group">
				    	<button id="opr" type="button" class="btn btn-outline-light rounded-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="box-shadow: unset">
				      		<i class="fa fa-plus"></i>
				    	</button>
				    	<div class="dropdown-menu dropdown-menu-right rounded-0" aria-labelledby="opr" style="min-width: unset; background: transparent;">
				      		<button class="btn btn-block btn-outline-light rounded-0 m-0" style="box-shadow: unset">
				      			<i class="fa fa-minus"></i>
				      		</button>
					      	<button class="btn btn-block btn-outline-light rounded-0 m-0" style="box-shadow: unset">
					      		<i class="fa fa-times"></i>
					      	</button>
				    	</div>
				  	</div>
				  	<div class="btn-group" role="group">
				    	<button id="tp" type="button" class="btn btn-outline-light rounded-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="box-shadow: unset">
				      		<i class="fa fa-question"></i>
				    	</button>
				    	<div class="dropdown-menu dropdown-menu-right rounded-0" aria-labelledby="tp" style="min-width: unset; background: transparent;"></div>
				  	</div>
				  	<button type="button" class="btn btn-outline-light rounded-0" style="box-shadow: unset" id="check">
				  		<i class="fa fa-check"></i>
				  	</button>
				  	<button type="button" class="btn btn-outline-light rounded-0" style="box-shadow: unset" id="repeat">
				  		<i class="fa fa-repeat"></i>
				  	</button>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js.map"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function (){
			var i,$res,res,res1,res2,rand,intvl1,cl,val,opr,tp
			var data = [];
			data['add'] = [
				'مجموع عددين من رقم واحد',
				'مكمل العدد 5',
				'مكمل العدد 10',
				'مجموع مضاعفات العدد 10',
			];
			data['sub'] = [
				'طرح عددين أصغر من 10',
			];
			data['mul'] = [
				'جداء رقمين',
				'جداء عدد في 10',
				'جداء عدد في 100',
			];
			function clear() {
				$("#n1,#n2,#n3,#op,#eq").html('');
				res1 = res2 = res = 0;
			}
			function showNumber() {
				rand = Math.random();
				while (rand < 0.1) {
					rand = Math.random();
				}
			}
			function getData(p1,p2) {
				clear();
				$("#eq").text('=');
				if (p1 == "add") {
					$("#op").html('<i class="fa fa-5x fa-plus"></i>');
					switch (p2) {
						case 0:
							i = 0;
							intvl1 = setInterval(function(){
								showNumber();
								res1 = Math.floor(rand * 10);
								$("#n1").text(res1);
								showNumber();
								res2 = Math.floor(rand * 10);
								$("#n2").text(res2);
								i++;
								if (i > 50) {
									clearInterval(intvl1);
									res = res1 + res2;
									$res = $("#n3");
									$res.html('<i class="fa fa-question text-warning animated bounceIn infinite"></i>');
								}
							},10);
							break;
						case 1:
							i = 0;
							intvl1 = setInterval(function(){
								showNumber();
								while (rand >= 0.5) {
									showNumber();
								}
								res1 = Math.floor(rand * 10);
								$("#n1").text(res1);
								$("#n3").text(5);
								i++;
								if (i > 50) {
									clearInterval(intvl1);
									res = 5 - res1;
									$res = $("#n2");
									$res.html('<i class="fa fa-question text-warning animated bounceIn infinite"></i>');
								}
							},10);
							break;
						case 2:
							i = 0;
							intvl1 = setInterval(function(){
								showNumber();
								res1 = Math.floor(rand * 10);
								$("#n1").text(res1);
								$("#n3").text(10);
								i++;
								if (i > 50) {
									clearInterval(intvl1);
									res = 10 - res1;
									$res = $("#n2");
									$res.html('<i class="fa fa-question text-warning animated bounceIn infinite"></i>');
								}
							},10);
							break;
						case 3:
							i = 0;
							intvl1 = setInterval(function(){
								showNumber();
								res1 = Math.floor(rand * 10);
								$("#n1").html(res1+"<span class='text-white'>0</span>");
								showNumber();
								res2 = Math.floor(rand * 10);
								$("#n2").html(res2+"<span class='text-white'>0</span>");
								i++;
								if (i > 50) {
									clearInterval(intvl1);
									res = res1 + res2;
									$res = $("#n3");
									$res.html('<i class="fa fa-question text-warning animated bounceIn infinite"></i>');
								}
							},10);
							break;
					}
				}
				if (p1 == "sub") {
					$("#op").html('<i class="fa fa-5x fa-minus"></i>');
					switch (p2) {
						case 0:
							i = 0;
							intvl1 = setInterval(function(){
								showNumber();
								res1 = Math.floor(rand * 10);
								$("#n1").text(res1);
								showNumber();
								res2 = Math.floor(rand * 10);
								while (res2 > res1) {
									showNumber();
									res2 = Math.floor(rand * 10);
								}
								$("#n2").text(res2);
								i++;
								if (i > 50) {
									clearInterval(intvl1);
									res = res1 - res2;
									$res = $("#n3");
									$res.html('<i class="fa fa-question text-warning animated bounceIn infinite"></i>');
								}
							},10);
							break;
						case 1:
							i = 0;
							intvl1 = setInterval(function(){
								showNumber();
								while (rand >= 0.5) {
									showNumber();
								}
								res1 = Math.floor(rand * 10);
								$("#n1").text(res1);
								$("#n3").text(5);
								i++;
								if (i > 50) {
									clearInterval(intvl1);
									res = 5 - res1;
									$res = $("#n2");
									$res.html('<i class="fa fa-question text-warning animated bounceIn infinite"></i>');
								}
							},10);
							break;
					}
				}
				if (p1 == "mul") {
					$("#op").html('<i class="fa fa-5x fa-times"></i>');
					switch (p2) {
						case 0:
							i = 0;
							intvl1 = setInterval(function(){
								showNumber();
								res1 = Math.floor(rand * 10);
								$("#n1").text(res1);
								showNumber();
								res2 = Math.floor(rand * 10);
								$("#n2").text(res2);
								i++;
								if (i > 50) {
									clearInterval(intvl1);
									res = res1 * res2;
									$res = $("#n3");
									$res.html('<i class="fa fa-question text-warning animated bounceIn infinite"></i>');
								}
							},10);
							break;
						case 1:
							i = 0;
							intvl1 = setInterval(function(){
								res1 = Math.floor(Math.random() * 100);
								$("#n1").text(res1);
								$("#n2").html(1+"<span class='text-white'>0</span>");
								i++;
								if (i > 50) {
									clearInterval(intvl1);
									res = res1;
									$res = $("#n3");
									$res.html('<i class="fa fa-question text-warning animated bounceIn infinite"></i>');
								}
							},10);
							break;
						case 2:
							i = 0;
							intvl1 = setInterval(function(){
								res1 = Math.floor(Math.random() * 100);
								$("#n1").text(res1);
								$("#n2").html(1+"<span class='text-white'>00</span>");
								i++;
								if (i > 50) {
									clearInterval(intvl1);
									res = res1;
									$res = $("#n3");
									$res.html('<i class="fa fa-question text-warning animated bounceIn infinite"></i>');
								}
							},10);
							break;
					}
				}
			}
			opr = "add";
			for (var i = 0; i < data[opr].length; i++) {
				$(".dropdown-menu:last").append('<button class="btn btn-block btn-outline-light rounded-0 m-0" style="box-shadow: unset">'+data[opr][i]+'</button>');
			};
			$(".dropdown-menu:first").on("click", "button", function() {
				clear();
				cl = $(this).children().attr("class");
				val = cl.substring(3,cl.length);
				if (val == "fa-plus") {
					$(this).html('<i class="fa fa-minus"></i>').siblings().html('<i class="fa fa-times"></i>');
					$(this).parent().prev().html('<i class="fa fa-plus"></i>');
					opr = "add";
				}
				if (val == "fa-minus") {
					$(this).html('<i class="fa fa-plus"></i>').siblings().html('<i class="fa fa-times"></i>');
					$(this).parent().prev().html('<i class="fa fa-minus"></i>');
					opr = "sub";
				}
				if (val == "fa-times") {
					$(this).html('<i class="fa fa-minus"></i>').siblings().html('<i class="fa fa-plus"></i>');
					$(this).parent().prev().html('<i class="fa fa-times"></i>');
					opr = "mul";
				}
				$(".dropdown-menu:last").html('');
				for (i = 0; i < data[opr].length; i++) {
					$(".dropdown-menu:last").append('<button class="btn btn-block btn-outline-light rounded-0 m-0" style="box-shadow: unset">'+data[opr][i]+'</button>');
				};
			});
			$(".dropdown-menu:last").on("click", "button", function() {
				tp = $(this).index();
				getData(opr,tp);
			});
			$("#check").on("click", function() {
				if ($("#n1").html() != "") {
					$res.html('<span class="animated zoomIn">'+res+'</span>');
				}
				if ((opr == "add" && tp == 3) || (opr == "mul" && tp == 1)) {
					$res.append("<span class='text-white'>0</span>");
				}
				if ((opr == "mul" && tp == 2)) {
					$res.append("<span class='text-white'>00</span>");
				}
			});
			$("#repeat").on("click", function() {
				getData(opr,tp);
			});
			setInterval(function() {
				var now = new Date().getTime();
				var hours = Math.floor((now % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				var minutes = Math.floor((now % (1000 * 60 * 60)) / (1000 * 60));
				var seconds = Math.floor((now % (1000 * 60)) / 1000);
				if (seconds < 10) {
					seconds = "0"+seconds;
				}
				if (minutes < 10) {
					minutes = "0"+minutes;
				}
				if (hours < 10) {
					hours = "0"+hours;
				}
				$("#counter").text(hours+":"+minutes+":"+seconds);
			}, 1000);
		});
	</script>
</body>
</html>

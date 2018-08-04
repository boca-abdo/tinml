<?php
	include 'includes/date.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<title>قراءة | تقطيع الكلمات</title>
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
						<h1 class="display-2"><u>قراءة</u></h1>
					</div>
          <div class="col-6 text-right">
						<h1 class="display-2"><u>تقطيع الكلمات</u></h1>
					</div>
				</div>
			</div>
			<div class="col-12 align-self-center">
        <div class="row text-center justify-content-center align-items-center px-5" id="output">
					<input type="text" id="data" value="">
				</div>
			</div>
			<div class="col-12 align-self-end text-right px-5">
				<div class="row" dir="ltr">
					<div class="col-1">
						<div class="form-group">
							<input type="number" class="form-control form-control-sm text-center text-warning rounded-0" min="2" max="12" id="syl" value="3" style="background:transparent">
						</div>
					</div>
					<div class="col-11">
						<div class="btn-group mr-3" role="group" aria-label="Button group with nested dropdown">
					  	<button type="button" class="btn btn-outline-light rounded-0" style="box-shadow: unset" id="repeat">
					  		<i class="fa fa-repeat"></i>
					  	</button>
							<button type="button" class="btn btn-outline-light rounded-0" style="box-shadow: unset" id="check">
					  		<i class="fa fa-random"></i>
					  	</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js.map"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
	function writeToFile(d1){
			var fso = new ActiveXObject("Scripting.FileSystemObject");
			var fh = fso.OpenTextFile("json/repartitions.txt", 8, false, 0);
			fh.WriteLine(d1 + ',');
			fh.Close();
	}
		$(document).ready(function (){

			$("#check").on("click", function(){
				writeToFile($("#data").val());
			});
			// var submit = document.getElementById("submit");
			// submit.onclick = function () {
			//     var id      = document.getElementById("id").value;
			//     var content = document.getElementById("content").value;
			//     writeToFile(id, content);
			// }
			$.ajax({
				url: "json/repartitions.txt",
				type: "GET",
				success: function(res) {
					var output = JSON.parse(res)
					alert(output["5"]["ara"]["قراءة"][2]);
				},
				error: function(stt,xhr,err) {
					console.log(err)
				}
			});
      // var i,j,cl,wd,rand_voy,rand_con,rand_syl,loop,
			// syl = [],
			// voy = ["َ","ُ","ِ","ْ","ً","ٌ","ٍ","ـا","ـو","ـي"],
      // con = ["د","م","ر","ب","س","ف","ل","ص","ذ","ز","ط","ض"];
      // function getSyl() {
      //   $("#output").html("");
			// 	loop = $("#syl").val();
			// 	if (loop > 1 && loop < 13) {
			// 		for (i = 0; i < loop; i++) {
			// 			if ((i % 2) == 0) {
			// 				cl = "bg-light";
			// 			} else {
			// 				cl = "bg-warning";
			// 			}
	    //       rand_voy = voy[Math.floor(Math.random() * voy.length)];
	    //       rand_con = con[Math.floor(Math.random() * con.length)];
	    //       $("#output").append("<div class='col-3 display-4 my-3'><div class='border border-light w-50 mx-auto text-dark "+cl+" animated bounceInDown'><span>"+rand_con+"</span><span>"+rand_voy+"</span></div></div>");
	    //     }
			// 	}
      // }
			// $("#repeat").on("click", function(){
      //   getSyl();
      // });
			// $("#syl").on("change", function(){
			// 	getSyl();
			// });
      // $("#check").on("click", function(){
			// 	syl = [];
			// 	wd = "";
			// 	$("#output").find("div.col-3").each(function(){
			// 		syl.push($(this).text());
			// 	});
			// 	for (i = 0; i < 3; i++) {
			// 		if ((i % 2) == 0) {
			// 			cl = "text-warning";
			// 		} else {
			// 			cl = "text-white";
			// 		}
			// 		rand_syl = syl[Math.floor(Math.random() * syl.length)];
			// 		var patt = new RegExp(rand_syl);
			// 		while (patt.test(wd) === true) {
			// 			rand_syl = syl[Math.floor(Math.random() * syl.length)];
			// 			var patt = new RegExp(rand_syl);
			// 		}
			// 		wd += "<span class='"+cl+"'>"+rand_syl+"</span>";
			// 	}
			// 	if ($("#output").find("div.w-100").length === 0) {
			// 		$("#output").append("<div class='w-100 my-5'></div>");
			// 		$("#output").append("<div class='col display-1 animated bounceInLeft'>"+wd+"</div>");
			// 	} else {
			// 		$("#output").find("div.display-1").html(wd);
			// 	}
      // });
		});
	</script>
</body>
</html>

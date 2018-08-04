<?php
	include 'includes/date.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<title>Lecture | syllabation</title>
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
				<h1 class="display-2"><u><?php echo $full_date_fr; ?></u></h1>
				<div class="row justify-content-between px-5">
					<div class="col-6 text-left">
						<h1 class="display-2"><u>Lecture</u></h1>
					</div>
          <div class="col-6 text-left">
						<h1 class="display-2"><u>Syllabes</u></h1>
					</div>
				</div>
			</div>
			<div class="col-12 align-self-center">
        <div class="row text-center justify-content-center align-items-center px-5" id="output"></div>
			</div>
			<div class="col-12 align-self-end text-right px-5">
				<div class="row">
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
		$(document).ready(function (){
      var i,j,cl,wd,rand_voy,rand_con,rand_syl,loop,
			syl = [],
			voy = ["a","ai","ei","i","e","y","o","u","é","è","ê","et","ez","es","er","eu","ou","on","om","an","am","en","em","on","au","eau","un","um","oi","ui"],
      con = ["b","c","d","f","g","j","k","l","m","n","p","q","r","s","t","v"];
      function getSyl() {
        $("#output").html("");
				loop = $("#syl").val();
				if (loop > 1 && loop < 13) {
					for (i = 0; i < loop; i++) {
						if ((i % 2) == 0) {
							cl = "bg-light";
						} else {
							cl = "bg-warning";
						}
	          rand_voy = voy[Math.floor(Math.random() * voy.length)];
	          rand_con = con[Math.floor(Math.random() * con.length)];
	          $("#output").append("<div class='col-3 display-4 my-3'><div class='border border-light w-50 mx-auto text-dark "+cl+" animated bounceInDown'><span>"+rand_con+"</span><span>"+rand_voy+"</span></div></div>");
	        }
				}
      }
			$("#repeat").on("click", function(){
        getSyl();
      });
			$("#syl").on("change", function(){
				getSyl();
			});
      $("#check").on("click", function(){
				syl = [];
				wd = "";
				$("#output").find("div.col-3").each(function(){
					syl.push($(this).text());
				});
				for (i = 0; i < 3; i++) {
					if ((i % 2) == 0) {
						cl = "text-warning";
					} else {
						cl = "text-white";
					}
					rand_syl = syl[Math.floor(Math.random() * syl.length)];
					var patt = new RegExp(rand_syl);
					while (patt.test(wd) === true) {
						rand_syl = syl[Math.floor(Math.random() * syl.length)];
						var patt = new RegExp(rand_syl);
					}
					wd += "<span class='"+cl+"'>"+rand_syl+"</span>";
				}
				if ($("#output").find("div.w-100").length === 0) {
					$("#output").append("<div class='w-100 my-5'></div>");
					$("#output").append("<div class='col display-1 animated bounceInLeft'>"+wd+"</div>");
				} else {
					$("#output").find("div.display-1").html(wd);
				}
      });
		});
	</script>
</body>
</html>

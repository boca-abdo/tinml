<?php
	include 'includes/date.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<title>جدول التحويل</title>
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
						<h1 class="display-2"><u>جدول التحويل</u></h1>
					</div>
				</div>
			</div>
			<div class="col-12 align-self-center">
				<div class="row text-center justify-content-center align-items-center px-5">
					<div class="col-auto">
						<div class="form-group">
							<div class="input-group" dir="ltr">
								<input type="number" step="0.000000001" min="0" class="form-control rounded-0 text-light text-center" style="background:transparent">
								<select class="custom-select rounded-0 text-center">
									<option><span>k</span><span>m</span></option>
									<option><span>h</span><span>m</span></option>
									<option><span>da</span><span>m</span></option>
									<option selected="selected"><span></span><span>m</span></option>
									<option><span>d</span><span>m</span></option>
									<option><span>c</span><span>m</span></option>
									<option><span>m</span><span>m</span></option>
								</select>
								<select class="custom-select rounded-0 text-center">
									<option><span>k</span><span>m</span></option>
									<option><span>h</span><span>m</span></option>
									<option><span>da</span><span>m</span></option>
									<option selected="selected"><span></span><span>m</span></option>
									<option><span>d</span><span>m</span></option>
									<option><span>c</span><span>m</span></option>
									<option><span>m</span><span>m</span></option>
								</select>
							</div>
						</div>
					</div>
					<div class="table-responsive px-5">
            <table class="table h1 table-hover table-striped table-bordered" dir="ltr">
              <thead>
                <tr>
									<th width="15%"><span>k</span><span>m</span></th>
									<th width="15%"><span>h</span><span>m</span></th>
									<th width="15%"><span>da</span><span>m</span></th>
									<th width="10%"><span></span><span>m</span></th>
									<th width="15%"><span>d</span><span>m</span></th>
									<th width="15%"><span>c</span><span>m</span></th>
									<th width="15%"><span>m</span><span>m</span></th>
								</tr>
              </thead>
              <tbody>
                <tr height="100">
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
              </tbody>
            </table>
          </div>
				</div>
			</div>
			<div class="col-12 align-self-end text-right px-5">
				<div class="btn-group mr-3" role="group" aria-label="Button group with nested dropdown">
			  	<div class="btn-group" role="group">
			    	<button id="opr" type="button" class="btn btn-outline-light rounded-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="box-shadow: unset">
			      		<span id="m">وحدات قياس الطول</span>
			    	</button>
			    	<div class="dropdown-menu dropdown-menu-right rounded-0" aria-labelledby="opr" style="min-width: unset; background: transparent;">
			      		<button class="btn btn-block btn-outline-light rounded-0 m-0" style="box-shadow: unset">
			      			<span id="g">وحدات قياس الكتلة</span>
			      		</button>
				      	<button class="btn btn-block btn-outline-light rounded-0 m-0" style="box-shadow: unset">
				      		<span id="l">وحدات قياس السعة</span>
				      	</button>
			    	</div>
					</div>
					<button type="button" class="btn btn-outline-light rounded-0" style="box-shadow: unset" id="fill">
						<i class="fa fa-eye"></i>
					</button>
					<button type="button" class="btn btn-outline-light rounded-0" style="box-shadow: unset" id="convert">
						<i class="fa fa-exchange"></i>
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
			var i,$inpt,val,unit,val1,val2,
			data = [];
			data["k"] = 0;
			data["h"] = 1;
			data["da"] = 2;
			data[""] = 3;
			data["d"] = 4;
			data["c"] = 5;
			data["m"] = 6;
			function fill() {
				$inpt = $("input");
				$("td").text("");
				unit = $inpt.next().val();
				$("th").each(function(){
					if ($(this).text() == unit) {
						idx = $(this).index();
					}
				});
				if ($("input").val().indexOf(".") == -1) {
					val = $inpt.val().split("");
					for (i = val.length,j = idx; i >= 0, j >= -5; i--, j--) {
						if (j < 0) {
							$("td:first").prepend(val[i-1]);
						} else {
							$("td:eq("+j+")").text(val[i-1]);
						}
					}
				} else {
					val = $inpt.val().split(".");
					val1 = val[0].split("");
					val2 = val[1].split("");
					for (i = val1.length,j = idx; i >= 0, j >= -5; i--, j--) {
						if (j < 0) {
							$("td:first").prepend(val1[i-1]);
						} else {
							$("td:eq("+j+")").text(val1[i-1]);
						}
					}
					for (i = 0,j = idx+1; i < val2.length, j <= 10; i++, j++) {
						if (j > 6 && idx != 6) {
							$("td:last").append(val2[i]);
						} else {
							$("td:eq("+j+")").text(val2[i]);
						}
					}
					if (idx != 6) {
						$("td:eq("+idx+")").append('<span class="position-relative text-warning" style="right:-50%">&comma;</span>');
					}
				}
			}
			document.querySelector("input").addEventListener("keypress", function (evt) {
				if (evt.which != 8 && (evt.which < 44 || evt.which > 57)){
			  	evt.preventDefault();
			  }
			});
			$(".dropdown-menu:first").on("click", "button", function() {
				unit = $(this).find("span").attr("id");
				val1 = $(this).html();
				val2 = $(this).parent().prev().html();
				$(this).html(val2);
				$(this).parent().prev().html(val1);
				$("select").empty();
				$("th").each(function(){
					$(this).find("span:last").text(unit);
					val = $(this).text();
					$("select").append("<option>"+val+"</option>");
				});
				$("option").each(function(){
					$(this).find("span:last").text(unit);
				});
			});
			$("input").on("keyup", function() {
				fill();
			});
			$("select:first").on("change", function() {
				fill();
			});
			$("#convert").on("click", function(){
				val = $("input").val();
				if (val == "") {
					alert("المرجو كتابة العدد المراد تحويله");
				} else {
					from = $("select:first").val();
					to = $("select:last").val();
					from = from.substring(0,from.length-1);
					to = to.substring(0,to.length-1);
					if (data[from] == data[to]){
						alert("المرجو اختيار وحدتين مختلفتين");
					} else if (data[from] > data[to]) {
						$("td").each(function(){
							alert($(this).index())
						});
					} else if (data[from] < data[to]) {
						$("td").each(function(){
							alert($(this).index())
						});
					}
				}
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

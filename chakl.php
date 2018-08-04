<?php
	include 'includes/date.php';
	$text = 'أغلب السكن بالقرى الجبلية متحضر بمعنى لا يجب على كل فرد من أفراد هذه الأسرة الالتزام بمعيار محدد، وهذا ناتج عن كون هذا الأخير مستعدا بشكل واضح للمرور الى الدور الثاني. يأتي في المقابل من يظن أن الأمر بسيط جدا لدرجة أن يحاول تقليده بشكل مباشر.';
	$corr = 'أَغْلَبُ السَّكَنِ بالْقُرى الْجَبَلِيَّةِ مُتَحَضِّرٌ بِمَعْنى لا يَجِبُ عَلى كُلِّ فَرْدٍ مِنْ أَفْرادِ هَذِهِ الْأُسْرَةِ الْإِلْتِزامُ بِمِعْيارٍ مُحَدَّدٍ، وَهَذا ناتِجُ عَنْ كَوْنِ هَذا الْأَخيرِ مُسْتَعِداًّ بِشَكْلٍ واضِحٍ لِلْمُرورِ إِلى الدَّوْرِ الثَّاني. يَأْتي في الْمُقابِلِ مَنْ يَظُنُّ أَنَّ الْأَمْرَ بَسيطٌ جِداَّ لِدَرَجَةِ أَنْ يُحاوِلَ تَقْليدَهُ بِشَكْلٍ مُباشِرٍ.'
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<title>الشكل</title>
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
				<h1 class="h1"><u><?php echo $full_date_ar; ?></u></h1>
				<div class="row justify-content-between px-5">
					<div class="col-6 text-right">
						<h1 class="h1"><u>شكل</u></h1>
					</div>
					<div class="col-6">
						<h1 class="h1"><u>السكن بالقرى الجبلية</u></h1>
					</div>
				</div>
			</div>
			<div class="col-12 align-self-center mx-3 px-3" style="max-height: 70vh;overflow: auto">
				<div id="text" class="text-right mx-3 px-3 h1 font-weight-bold">
					<p class="text-justify px-3" style="font-family: times; text-indent: 30px; cursor: pointer">
						<?php
							$text_arr = explode(' ', $text);
							$corr_arr = explode(' ', $corr);
							$i = 0;
							foreach ($text_arr as $val) {
								echo '<span class="text-light">'.$val.' </span><span class="text-warning d-none">'.$corr_arr[$i].' </span>';
								if (strpos($val, ".") !== false) {
									echo "";
								};
								$i++;
							}
						?>
					</p>
				</div>
			</div>
			<div class="col-12 align-self-end text-right px-5">
				<div class="btn-group mr-3" role="group" aria-label="Button group with nested dropdown">
				  	<button type="button" class="btn btn-sm btn-outline-light rounded-0" style="box-shadow: unset" id="big">
				  		<i class="fa fa-plus-circle"></i>
				  	</button>
				  	<button type="button" class="btn btn-sm btn-outline-light rounded-0" style="box-shadow: unset" id="small">
				  		<i class="fa fa-minus-circle"></i>
				  	</button>
				  	<button type="button" class="btn btn-sm btn-outline-light rounded-0" style="box-shadow: unset" id="step">
				  		<i class="fa fa-arrow-left"></i>
				  	</button>
				  	<button type="button" class="btn btn-sm btn-outline-light rounded-0" style="box-shadow: unset" id="all">
				  		<i class="fa fa-edit"></i>
				  	</button>
				  	<button type="button" class="btn btn-sm btn-outline-light rounded-0" style="box-shadow: unset" id="undo">
				  		<i class="fa fa-times"></i>
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
			function chakl(el) {
				el.addClass("d-none").next().removeClass("d-none");
			}
			function unchakl(el) {
				el.addClass("d-none").prev().removeClass("d-none");
			}
			function step() {
				index = $("#text").find("span.d-none:not('span.text-light')").index()
				word = $("span:eq("+(index+2)+")");
				chakl(word);
			}
			$("span.text-light").on("click", function(){
				chakl($(this));
			});
			$("span.text-warning").on("click", function(){
				unchakl($(this));
			});
			$("#step").on("click",function (){
				step()
			});
			$("#all").on("click",function (){
				chakl($("span.text-light"));
			});
			$("#undo").on("click",function (){
				unchakl($("span.text-warning"));
			});
			$("#big").on("click",function (){
				$("#text").animate({fontSize:'+=5px',lineHeight: '+=8px'});
			});
			$("#small").on("click",function (){
				$("#text").animate({fontSize:'-=5px',lineHeight: '-=8px'});
			});
			$("body").on("keypress", function (e) {
				e.preventDefault();
				if (e.keyCode == 13){
					step()
				}
			});
		});
	</script>
</body>
</html>

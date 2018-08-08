<?php
	include 'assets/header.php';
?>
<div class="container">
	<div class="card border-secondary rounded-0 card-shadow text-center">
    <div class="card-header bg-<?php echo $color2; ?> text-<?php echo $color1; ?> rounded-0">
      <h2 class="h2 card-title font-weight-bold">إعدادات المستخدم</h2>
    </div>
    <div class="card-block p-0">
      <div id="accordion">
        <div class="card border-right-0 border-left-0 border-top-0 border-bottom-0">
          <div class="card-header bg-<?php echo $color1; ?> text-<?php echo $color2; ?> py-0 text-right rounded-0" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link text-<?php echo $color2; ?>" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-caret-left ml-2"></i>المعلومات المهنية
              </button>
							<?php if ($log_row['name_ar'] == null || $log_row['name_fr'] == null || $log_row['doti'] == null): ?>
							<i class="fas fa-exclamation-triangle animated zoomIn infinite text-danger mt-2 float-left" data-toggle="tooltip" data-placement="right" title="المرجو تحديث معلوماتكم المهنية"></i>
							<?php endif; ?>
            </h5>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body bg-<?php echo $color2; ?> text-<?php echo $color1; ?>">
							<i class="fas fa-user-graduate fa-3x mb-2"></i>
              <h3 class="h3">المعلومات المهنية</h3>
              <small class="text-<?php echo $color1; ?>">سنستعمل هذه المعلومات لاعداد وثائقكم الشخصية فقط ولا أحد سيطلع عليها</small>
              <hr class="bg-<?php echo $color1; ?>">
              <form id="info">
                <div class="form-row justify-content-center">
                  <div class="col-sm-6 col-md-4">
                    <fieldset class="form-group">
                      <label for="name_ar" class="text-<?php echo $color1; ?>">الاسم بالعربية</label>
											<input type="text" maxlength="25" class="form-control-plaintext text-<?php echo $color1 ?> text-center font-weight-bold bg-transparent rounded-0" id="name_ar" value="<?php echo ($log_row['name_ar'] == null) ? '' : $log_row['name_ar'];?>" disabled="disabled">
                    </fieldset>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <fieldset class="form-group">
                      <label for="name_fr" class="text-<?php echo $color1; ?>">الاسم بالفرنسية</label>
											<input type="text" maxlength="25" class="form-control-plaintext text-<?php echo $color1 ?> text-center font-weight-bold bg-transparent rounded-0" id="name_fr" value="<?php echo ($log_row['name_fr'] == null) ? '' : $log_row['name_fr'];?>" disabled="disabled">
                    </fieldset>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <fieldset class="form-group">
                      <label for="doti" class="text-<?php echo $color1; ?>">رقم التأجير</label>
											<input type="number" min="0" max="9999999" step="1" class="form-control-plaintext text-<?php echo $color1 ?> text-center font-weight-bold bg-transparent rounded-0" id="doti" value="<?php echo ($log_row['doti'] == null) ? '' : $log_row['doti'];?>" disabled="disabled">
                    </fieldset>
                  </div>
                  <div class="w-100 border border-<?php echo $color1 ?> border-right-0 border-bottom-0 border-left-0 my-3">
                    <div class="alert alert-danger border border-<?php echo $color1 ?> rounded-0 font-weight-bold d-none m-0 mb-3" role="alert"></div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <button type="button" class="btn btn-block btn-<?php echo $color1 ?> rounded-0 edit">تعديل<i class="fas fa-pencil-alt mr-2"></i></button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 d-none">
                    <button type="button" class="btn btn-block btn-<?php echo $color1 ?> rounded-0 save">حفظ<i class="fas fa-save mr-2"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="card border-right-0 border-left-0 border-top-0 border-bottom-0">
          <div class="card-header bg-<?php echo $color1; ?> text-<?php echo $color2; ?> py-0 text-right rounded-0" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link text-<?php echo $color2; ?>" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-caret-left ml-2"></i>المستوى المدرس
              </button>
							<?php if ($log_row['classroom'] == null): ?>
							<i class="fas fa-exclamation-triangle animated zoomIn infinite text-danger mt-2 float-left" data-toggle="tooltip" data-placement="right" title="المرجو تحديث المستوى المدرس"></i>
							<?php endif; ?>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body bg-<?php echo $color2; ?> text-<?php echo $color1; ?>">
							<i class="fas fa-chalkboard-teacher fa-3x mb-2"></i>
              <h3 class="h3">المستوى المُدَرَّسْ</h3>
              <small class="text-<?php echo $color1; ?>">يمكن التأشير على أكثر من قسم واحد في حالة اﻷقسام المشتركة</small>
              <hr class="bg-<?php echo $color1; ?>">
              <form id="classroom">
                <div class="form-row justify-content-center text-center h6">
									<div class="col-6 col-md-4 pb-3">
										<div class="custom-control custom-checkbox ml-sm-5">
										  <input id="customCheck1" class="custom-control-input" type="checkbox" name="box[]" value="1" disabled="disabled" <?php echo (strpos($log_row['classroom'], '1') !== false) ? 'checked' : '';?>>
										  <label class="custom-control-label text-<?php echo $color1; ?>" for="customCheck1">المستوى اﻷول</label>
										</div>
									</div>
									<div class="col-6 col-md-4 pb-3">
										<div class="custom-control custom-checkbox ml-sm-5">
										  <input id="customCheck2" class="custom-control-input" type="checkbox" name="box[]" value="2" disabled="disabled" <?php echo (strpos($log_row['classroom'], '2') !== false) ? 'checked' : '';?>>
										  <label class="custom-control-label text-<?php echo $color1; ?>" for="customCheck2">المستوى الثاني</label>
										</div>
									</div>
									<div class="col-6 col-md-4 pb-3">
										<div class="custom-control custom-checkbox ml-sm-5">
										  <input id="customCheck3" class="custom-control-input" type="checkbox" name="box[]" value="3" disabled="disabled" <?php echo (strpos($log_row['classroom'], '3') !== false) ? 'checked' : '';?>>
										  <label class="custom-control-label text-<?php echo $color1; ?>" for="customCheck3">المستوى الثالث</label>
										</div>
									</div>
									<div class="col-6 col-md-4 pb-3">
										<div class="custom-control custom-checkbox ml-sm-5">
										  <input id="customCheck4" class="custom-control-input" type="checkbox" name="box[]" value="4" disabled="disabled" <?php echo (strpos($log_row['classroom'], '4') !== false) ? 'checked' : '';?>>
										  <label class="custom-control-label text-<?php echo $color1; ?>" for="customCheck4">المستوى الرابع</label>
										</div>
									</div>
									<div class="col-6 col-md-4 pb-3">
										<div class="custom-control custom-checkbox ml-sm-5">
										  <input id="customCheck5" class="custom-control-input" type="checkbox" name="box[]" value="5" disabled="disabled" <?php echo (strpos($log_row['classroom'], '5') !== false) ? 'checked' : '';?>>
										  <label class="custom-control-label text-<?php echo $color1; ?>" for="customCheck5">المستوى الخامس</label>
										</div>
									</div>
									<div class="col-6 col-md-4 pb-3">
										<div class="custom-control custom-checkbox ml-sm-5">
										  <input id="customCheck6" class="custom-control-input" type="checkbox" name="box[]" value="6" disabled="disabled" <?php echo (strpos($log_row['classroom'], '6') !== false) ? 'checked' : '';?>>
										  <label class="custom-control-label text-<?php echo $color1; ?>" for="customCheck6">المستوى السادس</label>
										</div>
									</div>
                  <div class="w-100 border border-<?php echo $color1 ?> border-right-0 border-bottom-0 border-left-0 my-3">
                    <div class="alert alert-danger border border-<?php echo $color1 ?> rounded-0 font-weight-bold d-none m-0 mb-3" role="alert"></div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <button type="button" class="btn btn-block btn-<?php echo $color1 ?> rounded-0 edit">تعديل<i class="fas fa-pencil-alt mr-2"></i></button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 d-none">
                    <button type="button" class="btn btn-block btn-<?php echo $color1 ?> rounded-0 save">حفظ<i class="fas fa-save mr-2"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="card border-right-0 border-left-0 border-top-0 border-bottom-0">
          <div class="card-header bg-<?php echo $color1; ?> text-<?php echo $color2; ?> py-0 text-right rounded-0" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link text-<?php echo $color2; ?>" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                <i class="fas fa-caret-left ml-2"></i>مقر العمل
              </button>
							<?php if ($log_row['aca'] == null || $log_row['del'] == null || $log_row['sch_ar'] == null || $log_row['sch_fr'] == null): ?>
							<i class="fas fa-exclamation-triangle animated zoomIn infinite text-danger mt-2 float-left" data-toggle="tooltip" data-placement="right" title="المرجو تحديث مقر عملكم"></i>
							<?php endif; ?>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body bg-<?php echo $color2; ?> text-<?php echo $color1; ?>">
						<i class="fas fa-school fa-3x mb-2"></i>
              <h3 class="h3">مقر العمل</h3>
              <small class="text-<?php echo $color1; ?>">المرجو كتابة اسم المؤسسة بعناية مذيلا بالفرعية بالنسبة للمجموعات المدرسية</small>
              <hr class="bg-<?php echo $color1; ?>">
              <form id="school">
                <div class="form-row justify-content-center">
                  <div class="col-sm-6 col-lg-4">
                    <fieldset class="form-group">
                      <label for="aca">اﻷكاديمية</label>
                      <select class="custom-select bg-<?php echo $color2 ?> text-<?php echo $color1 ?> text-center font-weight-bold rounded-0 border-top-0 border-right-0 border-left-0 border-bottom-0 py-0 px-1" style="text-align-last:center" id="aca" disabled="disabled">
                        <option value='' selected='selected'>اﻷكاديمية</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <fieldset class="form-group">
                      <label for="del">المديرية الإقليمية</label>
                      <select class="custom-select bg-<?php echo $color2 ?> text-<?php echo $color1 ?> text-center font-weight-bold rounded-0 border-top-0 border-right-0 border-left-0 border-bottom-0 py-0 px-1" style="text-align-last:center" id="del" disabled="disabled">
                        <option value='' selected='selected'>المديرية الإقليمية</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-sm-6 col-lg-4">
                    <fieldset class="form-group">
                      <label for="sch_ar">اسم المؤسسة بالعربية</label>
											<input type="text" maxlength="50" class="form-control-plaintext text-<?php echo $color1 ?> bg-transparent text-center font-weight-bold rounded-0" id="sch_ar" value="<?php echo ($log_row['sch_ar'] == null) ? '' : $log_row['sch_ar'];?>" disabled="disabled">
                    </fieldset>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <fieldset class="form-group">
                      <label for="sch_fr">اسم المؤسسة بالفرنسية</label>
											<input type="text" maxlength="50" class="form-control-plaintext text-uppercase text-<?php echo $color1 ?> bg-transparent text-center font-weight-bold rounded-0" id="sch_fr" value="<?php echo ($log_row['sch_fr'] == null) ? '' : $log_row['sch_fr'];?>" disabled="disabled">
                    </fieldset>
                  </div>
                  <div class="w-100 border border-<?php echo $color1 ?> border-right-0 border-bottom-0 border-left-0 my-3">
                    <div class="alert alert-danger border border-<?php echo $color1 ?> rounded-0 font-weight-bold d-none m-0 mb-3" role="alert"></div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <button type="button" class="btn btn-block btn-<?php echo $color1 ?> rounded-0 edit">تعديل<i class="fas fa-pencil-alt mr-2"></i></button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 d-none">
                    <button type="button" class="btn btn-block btn-<?php echo $color1 ?> rounded-0 save">حفظ<i class="fas fa-save mr-2"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="card border-right-0 border-left-0 border-top-0 border-bottom-0 <?php echo ($log_row['classroom'] == null) ? "d-none" : ""?>">
          <div class="card-header bg-<?php echo $color1; ?> text-<?php echo $color2; ?> py-0 text-right rounded-0" id="headingFour">
            <h5 class="mb-0">
              <button class="btn btn-link text-<?php echo $color2; ?>" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                <i class="fas fa-caret-left ml-2"></i>المقررات الدراسية
              </button>
							<?php if ($log_row['ara_book'] == null || $log_row['isl_book'] == null || $log_row['art_book'] == null || $log_row['sci_book'] == null || $log_row['fre_book'] == null || $log_row['mth_book'] == null): ?>
							<i class="fas fa-exclamation-triangle animated zoomIn infinite text-danger mt-2 float-left" data-toggle="tooltip" data-placement="right" title="المرجو تحديث أسماء الكتب المقررة"></i>
							<?php endif; ?>
            </h5>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body bg-<?php echo $color2; ?> text-<?php echo $color1; ?>">
							<i class="fas fa-book fa-3x mb-2"></i>
              <h3 class="h3">المقررات الدراسية</h3>
              <small class="text-<?php echo $color1; ?>">المرجو كتابة اسم المؤسسة بعناية مذيلا بالفرعية بالنسبة للمجموعات المدرسية</small>
              <hr class="bg-<?php echo $color1; ?>">
              <form id="books">
                <?php if ($log_row['classroom'] == null): ?>
                  <h1 class="h1 text-danger animated flash infinite">المرجو تحديث المستوى المدرس</h1>
                <?php else: ?>
                  <?php
                    $json_data = file_get_contents('json/books.json');
                    $books = json_decode($json_data, true);
                    $classroom = explode(",",$log_row['classroom']);
										$comps_arr = array("اللغة العربية","التربية الإسلامية","التربية التشكيلية","النشاط العلمي","الرياضيات","اللغة الفرنسية","اللغة اﻷمازيغية","الإجتماعيات");
										$i = 0;
                    foreach ($classroom as $val) {
                      echo "<div class='form-row justify-content-center'><div class='col-12 text-right'><h4 class='h4 text-right mb-3'><u>المستوى ".$val."</u></h4></div>";
											$j = 0;
											foreach ($books[$val] as $book_id => $book_arr) {
												$log_row_book = ["","","","","",""];
												if ($log_row[$book_id] != null) {
													$log_row_book = explode(",", $log_row[$book_id]);
												}
                  ?>
                  <div class="col-sm-6 col-md-4">
                    <fieldset class="form-group">
											<label><?php echo $comps_arr[$j] ?></label>
                      <select class="custom-select bg-<?php echo $color2 ?> text-<?php echo $color1 ?> text-center font-weight-bold rounded-0 border-top-0 border-right-0 border-left-0 border-bottom-0 py-0 px-1" style="text-align-last:center" disabled="disabled">
												<option value="" selected="selected">اختر من القائمة</option>
                  <?php
                        foreach ($book_arr as $book_key => $book_name) {
													if ($log_row_book[$i] == $book_key) {
														echo "<option selected='selected' value='".$book_key."'>".$book_name."</option>";
													} else {
														echo "<option value='".$book_key."'>".$book_name."</option>";
													}
                        }
												$j++;
                  ?>
                      </select>
                    </fieldset>
                  </div>
                  <?php
                      }
											echo "</div><hr class='bg-".$color1."'>";
											$i++;
                    }
                  ?>
									<div class="row justify-content-center">
                    <div class="w-100">
                      <div class="alert alert-danger border border-<?php echo $color1 ?> rounded-0 font-weight-bold d-none m-0 mb-3" role="alert"></div>
                    </div>
	                  <div class="col-6 col-sm-4 col-md-2">
	                    <button type="button" class="btn btn-block btn-<?php echo $color1 ?> rounded-0 edit">تعديل<i class="fas fa-pencil-alt mr-2"></i></button>
	                  </div>
	                  <div class="col-6 col-sm-4 col-md-2 d-none">
	                    <button type="button" class="btn btn-block btn-<?php echo $color1 ?> rounded-0 save">حفظ<i class="fas fa-save mr-2"></i></button>
	                  </div>
									</div>
                <?php endif; ?>
              </form>
            </div>
          </div>
        </div>
        <div class="card border-right-0 border-left-0 border-top-0 border-bottom-0 <?php echo ($log_row['classroom'] == null) ? "d-none" : ""?>">
          <div class="card-header bg-<?php echo $color1; ?> text-<?php echo $color2; ?> py-0 text-right rounded-0" id="headingFive">
            <h5 class="mb-0">
              <button class="btn btn-link text-<?php echo $color2; ?>" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                <i class="fas fa-caret-left ml-2"></i>توزيع الحصص
              </button>
							<?php if ($log_row['emploi'] == null): ?>
							<i class="fas fa-exclamation-triangle animated zoomIn infinite text-danger mt-2 float-left" data-toggle="tooltip" data-placement="right" title="المرجو تحديث معلوماتكم الخاصة بتوزيع الحصص"></i>
							<?php endif; ?>
            </h5>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body bg-<?php echo $color2; ?> text-<?php echo $color1; ?>">
							<i class="far fa-clock fa-3x mb-2"></i>
              <h3 class="h3">توزيع الحصص</h3>
              <small class="text-<?php echo $color1; ?>">لمعرفة طريقة تعبئة الخانات المرجو النقر هنا</small>
              <hr class="bg-<?php echo $color1; ?>">
              <form id="emploi">
								<?php if ($log_row['classroom'] == null): ?>
                  <h1 class="h1 text-danger animated flash infinite">المرجو تحديث المستوى المدرس</h1>
                <?php else: ?>
									<ul class="nav nav-tabs nav-fill justify-content-center w-100 p-0" id="emploiTab" role="tablist">
									  <li class="nav-item">
									    <a class="btn btn-lg btn-outline-<?php echo $color1 ?> active w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="mon-tab" data-toggle="tab" href="#mon" role="tab" aria-controls="mon" aria-selected="true" style="box-shadow:none"><span class="d-md-none">إ</span><span class="d-none d-md-block">اﻹثنين</span></a>
									  </li>
									  <li class="nav-item">
									    <a class="btn btn-lg btn-outline-<?php echo $color1 ?> w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="tue-tab" data-toggle="tab" href="#tue" role="tab" aria-controls="tue" aria-selected="false" style="box-shadow:none"><span class="d-md-none">ث</span><span class="d-none d-md-block">الثلاثاء</span></a>
									  </li>
									  <li class="nav-item">
									    <a class="btn btn-lg btn-outline-<?php echo $color1 ?> w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="wed-tab" data-toggle="tab" href="#wed" role="tab" aria-controls="wed" aria-selected="false" style="box-shadow:none"><span class="d-md-none">أ</span><span class="d-none d-md-block">اﻷربعاء</span></a>
									  </li>
									  <li class="nav-item">
									    <a class="btn btn-lg btn-outline-<?php echo $color1 ?> w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="thu-tab" data-toggle="tab" href="#thu" role="tab" aria-controls="thu" aria-selected="false" style="box-shadow:none"><span class="d-md-none">خ</span><span class="d-none d-md-block">الخميس</span></a>
									  </li>
									  <li class="nav-item">
									    <a class="btn btn-lg btn-outline-<?php echo $color1 ?> w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="fri-tab" data-toggle="tab" href="#fri" role="tab" aria-controls="fri" aria-selected="false" style="box-shadow:none"><span class="d-md-none">ج</span><span class="d-none d-md-block">الجمعة</span></a>
									  </li>
									  <li class="nav-item">
									    <a class="btn btn-lg btn-outline-<?php echo $color1 ?> w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="sat-tab" data-toggle="tab" href="#sat" role="tab" aria-controls="sat" aria-selected="false" style="box-shadow:none"><span class="d-md-none">س</span><span class="d-none d-md-block">السبت</span></a>
									  </li>
									</ul>
									<div class="row no-gutters justify-content-center" id="week">
										<div class="col-2">
											<input type="number" min="1" max="6" step="1" class="form-control-plaintext text-<?php echo $color1 ?> text-center font-weight-bold bg-transparent rounded-0" value="<?php echo ($log_row['emploi'] == null) ? '1' : $log_row['emploi'];?>" disabled="disabled">
										</div>
										<div class="col-2">
											<input type="number" min="1" max="6" step="1" class="form-control-plaintext text-<?php echo $color1 ?> text-center font-weight-bold bg-transparent rounded-0" value="<?php echo ($log_row['emploi'] == null) ? '2' : $log_row['emploi'];?>" disabled="disabled">
										</div>
										<div class="col-2">
											<input type="number" min="1" max="6" step="1" class="form-control-plaintext text-<?php echo $color1 ?> text-center font-weight-bold bg-transparent rounded-0" value="<?php echo ($log_row['emploi'] == null) ? '3' : $log_row['emploi'];?>" disabled="disabled">
										</div>
										<div class="col-2">
											<input type="number" min="1" max="6" step="1" class="form-control-plaintext text-<?php echo $color1 ?> text-center font-weight-bold bg-transparent rounded-0" value="<?php echo ($log_row['emploi'] == null) ? '4' : $log_row['emploi'];?>" disabled="disabled">
										</div>
										<div class="col-2">
											<input type="number" min="1" max="6" step="1" class="form-control-plaintext text-<?php echo $color1 ?> text-center font-weight-bold bg-transparent rounded-0" value="<?php echo ($log_row['emploi'] == null) ? '5' : $log_row['emploi'];?>" disabled="disabled">
										</div>
										<div class="col-2">
											<input type="number" min="1" max="6" step="1" class="form-control-plaintext text-<?php echo $color1 ?> text-center font-weight-bold bg-transparent rounded-0" value="<?php echo ($log_row['emploi'] == null) ? '6' : $log_row['emploi'];?>" disabled="disabled">
										</div>
									</div>
									<div class="tab-content p-3" id="emploiTabContent">
									  <div class="tab-pane fade show active" id="mon" role="tabpanel" aria-labelledby="mon-tab">
											<div class="form-row justify-content-center align-items-center">
												<div class="col-sm-6 text-right">
													<h4 class="h4 mr-3">الفترة الصباحية</h3>
												</div>
												<div class="col-6 col-sm-3">
													<fieldset class="form-group m-0">
														<input type="time" class="form-control-plaintext text-<?php echo $color1 ?> text-center font-weight-bold bg-transparent rounded-0" id="mon_start" value="00:00" disabled="disabled">
													</fieldset>
												</div>
												<div class="col-6 col-sm-3">
													<fieldset class="form-group m-0">
														<input type="time" class="form-control-plaintext text-<?php echo $color1 ?> text-center font-weight-bold bg-transparent rounded-0" id="mon_end" value="00:00" disabled="disabled">
													</fieldset>
												</div>
												<div class="w-100 border border-<?php echo $color1 ?> border-top-0 border-left-0 border-right-0 mb-3"></div>
												<?php
													$comps_data = file_get_contents("json/comps.json");
													$comps_arr = json_decode($comps_data, true);
													foreach ($classroom as $class_name) {
														$i = 0;
														while ($i < 4) {
															$i++;
												?>
												<div class="col-6 col-md-3">
													<fieldset class="form-group">
														<label for="mon<?php echo $i ?>"><span class="badge badge-pill badge-<?php echo $color1 ?>">الحصة <?php echo (count($classroom) > 1) ? $i." (م ".$class_name.")" : $i ?></span></label>
														<div class="input-group">
															<select class="custom-select bg-<?php echo $color2 ?> text-<?php echo $color1 ?> text-center font-weight-bold rounded-0 border-top-0 border-right-0 border-left-0 border-bottom-0 py-0 px-1" style="text-align-last:center" id="mon<?php echo $i ?>_comp" disabled="disabled">
				                        <option value='' selected='selected'>المكون</option>
																<?php
																	foreach ($comps_arr[$class_name]["comps"] as $comp) {
																		echo '<option>'.$comp.'</option>';
																	}
																?>
				                      </select>
															<select class="custom-select bg-<?php echo $color2 ?> text-<?php echo $color1 ?> text-center font-weight-bold rounded-0 border-top-0 border-right-0 border-left-0 border-bottom-0 py-0 px-1" style="text-align-last:center" id="mon<?php echo $i ?>_dur" disabled="disabled">
				                        <option value='' selected='selected'>المدة</option>
																<?php
																	foreach ($comps_arr[$class_name]["durations"] as $duration) {
																		echo '<option>'.$duration.'</option>';
																	}
																?>
				                      </select>
			                      </div>
													</fieldset>
												</div>
												<?php
														}
													}
												?>
												<div class="w-100 bg-<?php echo $color1 ?> my-3">
													<fieldset class="form-group row justify-content-center mb-0">
														<div class="input-group col-6 mx-auto">
															<div class="input-group-prepend">
														    <label class="input-group-text rounded-0 text-<?php echo $color2 ?> text-center bg-transparent border-right-0 border-left-0 border-top-0 border-bottom-0" for="rest1">استراحة</label>
														  </div>
															<select class="custom-select bg-<?php echo $color1 ?> text-<?php echo $color2 ?> text-center font-weight-bold rounded-0 border-top-0 border-right-0 border-left-0 border-bottom-0 p-0" style="text-align-last:center" id="mon4_dur" disabled="disabled">
																<option>05</option>
																<option>10</option>
				                        <option selected='selected'>15</option>
				                      </select>
			                      </div>
													</fieldset>
			                  </div>
												<?php
													foreach ($classroom as $class_name) {
														$i = 4;
														while ($i < 8) {
															$i++;
												?>
												<div class="col-6 col-md-3">
													<fieldset class="form-group">
														<label for="mon<?php echo $i ?>"><span class="badge badge-pill badge-<?php echo $color1 ?>">الحصة <?php echo (count($classroom) > 1) ? $i." (م ".$class_name.")" : $i ?></span></label>
														<div class="input-group">
															<select class="custom-select bg-<?php echo $color2 ?> text-<?php echo $color1 ?> text-center font-weight-bold rounded-0 border-top-0 border-right-0 border-left-0 border-bottom-0 py-0 px-1" style="text-align-last:center" id="mon<?php echo $i ?>_comp" disabled="disabled">
				                        <option value='' selected='selected'>المكون</option>
				                      </select>
															<select class="custom-select bg-<?php echo $color2 ?> text-<?php echo $color1 ?> text-center font-weight-bold rounded-0 border-top-0 border-right-0 border-left-0 border-bottom-0 py-0 px-1" style="text-align-last:center" id="mon<?php echo $i ?>_dur" disabled="disabled">
				                        <option value='' selected='selected'>المدة</option>
				                      </select>
			                      </div>
													</fieldset>
												</div>
												<?php
														}
													}
												?>
												<div class="w-100 border border-<?php echo $color1 ?> border-right-0 border-bottom-0 border-left-0 my-3"></div>
												<div class="col-sm-6 text-right">
													<h4 class="h4 mr-3">الفترة المسائية</h3>
												</div>
												<div class="col-6 col-sm-3">
													<fieldset class="form-group m-0">
														<input type="time" class="form-control-plaintext text-<?php echo $color1 ?> text-center font-weight-bold bg-transparent rounded-0" id="mon_start" value="00:00" disabled="disabled">
													</fieldset>
												</div>
												<div class="col-6 col-sm-3">
													<fieldset class="form-group m-0">
														<input type="time" class="form-control-plaintext text-<?php echo $color1 ?> text-center font-weight-bold bg-transparent rounded-0" id="mon_end" value="00:00" disabled="disabled">
													</fieldset>
												</div>
												<div class="w-100 border border-<?php echo $color1 ?> border-top-0 border-left-0 border-right-0 mb-3"></div>
												<?php
													foreach ($classroom as $class_name) {
														$i = 8;
														while ($i < 12) {
															$i++;
												?>
												<div class="col-6 col-md-3">
													<fieldset class="form-group">
														<label for="mon<?php echo $i ?>"><span class="badge badge-pill badge-<?php echo $color1 ?>">الحصة <?php echo (count($classroom) > 1) ? $i." (م ".$class_name.")" : $i ?></span></label>
														<div class="input-group">
															<select class="custom-select bg-<?php echo $color2 ?> text-<?php echo $color1 ?> text-center font-weight-bold rounded-0 border-top-0 border-right-0 border-left-0 border-bottom-0 py-0 px-1" style="text-align-last:center" id="mon<?php echo $i ?>_comp" disabled="disabled">
				                        <option value='' selected='selected'>المكون</option>
				                      </select>
															<select class="custom-select bg-<?php echo $color2 ?> text-<?php echo $color1 ?> text-center font-weight-bold rounded-0 border-top-0 border-right-0 border-left-0 border-bottom-0 py-0 px-1" style="text-align-last:center" id="mon<?php echo $i ?>_dur" disabled="disabled">
				                        <option value='' selected='selected'>المدة</option>
				                      </select>
			                      </div>
													</fieldset>
												</div>
												<?php
														}
													}
												?>
												<div class="w-100 bg-<?php echo $color1 ?> my-3">
													<fieldset class="form-group row justify-content-center mb-0">
														<div class="input-group col-6 mx-auto">
															<div class="input-group-prepend">
														    <label class="input-group-text rounded-0 text-<?php echo $color2 ?> text-center bg-transparent border-right-0 border-left-0 border-top-0 border-bottom-0" for="rest2">استراحة</label>
														  </div>
															<select class="custom-select bg-<?php echo $color1 ?> text-<?php echo $color2 ?> text-center font-weight-bold rounded-0 border-top-0 border-right-0 border-left-0 border-bottom-0 p-0" style="text-align-last:center" id="rest2" disabled="disabled">
																<option>05</option>
																<option>10</option>
				                        <option selected='selected'>15</option>
				                      </select>
			                      </div>
													</fieldset>
			                  </div>
												<?php
													foreach ($classroom as $class_name) {
														$i = 12;
														while ($i < 16) {
															$i++;
												?>
												<div class="col-6 col-md-3">
													<fieldset class="form-group">
														<label for="mon<?php echo $i ?>"><span class="badge badge-pill badge-<?php echo $color1 ?>">الحصة <?php echo (count($classroom) > 1) ? $i." (م ".$class_name.")" : $i ?></span></label>
														<div class="input-group">
															<select class="custom-select bg-<?php echo $color2 ?> text-<?php echo $color1 ?> text-center font-weight-bold rounded-0 border-top-0 border-right-0 border-left-0 border-bottom-0 py-0 px-1" style="text-align-last:center" id="mon<?php echo $i ?>_comp" disabled="disabled">
				                        <option value='' selected='selected'>المكون</option>
				                      </select>
															<select class="custom-select bg-<?php echo $color2 ?> text-<?php echo $color1 ?> text-center font-weight-bold rounded-0 border-top-0 border-right-0 border-left-0 border-bottom-0 py-0 px-1" style="text-align-last:center" id="mon<?php echo $i ?>_dur" disabled="disabled">
				                        <option value='' selected='selected'>المدة</option>
				                      </select>
			                      </div>
													</fieldset>
												</div>
												<?php
														}
													}
												?>
											</div>
										</div>
										<div class="tab-pane fade" id="tue" role="tabpanel" aria-labelledby="tue-tab">
										</div>
										<div class="tab-pane fade" id="wed" role="tabpanel" aria-labelledby="wed-tab">
										</div>
										<div class="tab-pane fade" id="thu" role="tabpanel" aria-labelledby="thu-tab">
										</div>
										<div class="tab-pane fade" id="fri" role="tabpanel" aria-labelledby="fri-tab">
										</div>
										<div class="tab-pane fade" id="sat" role="tabpanel" aria-labelledby="sat-tab">
										</div>
									</div>
									<div class="row justify-content-center">
										<div class="w-100 border border-<?php echo $color1 ?> border-right-0 border-bottom-0 border-left-0 my-3">
											<div class="alert alert-danger border border-<?php echo $color1 ?> rounded-0 font-weight-bold d-none m-0 mb-3" role="alert"></div>
										</div>
										<div class="col-6 col-sm-4 col-md-2">
											<button type="button" class="btn btn-block btn-<?php echo $color1 ?> rounded-0 edit">تعديل<i class="fas fa-pencil-alt mr-2"></i></button>
										</div>
										<div class="col-6 col-sm-4 col-md-2 d-none">
											<button type="button" class="btn btn-block btn-<?php echo $color1 ?> rounded-0 save">حفظ<i class="fas fa-save mr-2"></i></button>
										</div>
									</div>
								<?php endif; ?>
							</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
		var i,dataset,empty,ara_book,isl_book,art_book,sci_book,mth_book,fre_book,soc_book,amz_book,classroom_count;
		// $('.custom-control-input').prop('indeterminate', true)
		$('[data-toggle="tooltip"]').tooltip();
		function updateData(section) {
      $.ajax({
        url: "includes/update_"+section+".php",
        type: "POST",
        data: dataset,
        error: function(stt,xhr,err) {
          console.log(err);
        },
        success: function(res) {
          if (res === "done") {
            $btn.html("تم بنجاح<i class='fas fa-thumbs-up animated zoomIn mr-2'></i>");
            setTimeout(function(){location.reload()},1000);
          } else {
            alertShow("حدث خطأ، المرجو اعادة المحاولة لاحقا. اذا استمر المشكل المرجو الاتصال بادارة الموقع");
          }
        }
      });
		}
    function alertShow(msg) {
      $btn.html('هناك خطأ<i class="fas fa-exclamation-triangle fa-fw mr-2 animated zoomIn infinite"></i>').parents("form").find("div.alert").removeClass("fadeOut d-none").addClass("fadeIn").text(msg);
      setTimeout(function(){alertHide()},5000);
    }
    function alertHide() {
      $btn.html('حفظ<i class="fas fa-save fa-fw mr-2"></i>').parents("form").find("div.alert").removeClass("fadeIn").addClass("fadeOut");
      setTimeout(function(){$btn.parents("form").find("div.alert").addClass("d-none")},1000);
    }
    function getAca() {
      $.ajax({
        url: "json/schools.json",
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
      $("#del").empty().append("<option value='' selected='selected'>المديرية الإقليمية</option>");
      $.ajax({
        url: "json/schools.json",
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
    $("#aca").on('change', function(){
      $("#del").empty().append("<option value='' selected='selected'>المديرية الإقليمية</option>");
      aca = $(this).val();
      if (aca != "") {
        getDel(aca);
				$("#sch_ar,#sch_fr").val("");
      }
    });
    $('#accordion').on('show.bs.collapse', '.card', function () {
      $(this).find("i:first").removeClass("fa-caret-left").addClass("fa-caret-down");
    });
    $('#accordion').on('hide.bs.collapse', '.card', function () {
      $(this).find("i:first").removeClass("fa-caret-down").addClass("fa-caret-left");
			$(this).find("input").attr("disabled","disabled").removeClass("form-control").addClass("form-control-plaintext");
    });
    $("form").on("click", ".edit", function(){
      $(this).parent().addClass("d-none").next().removeClass("d-none").parents("form").find("input,select").removeAttr("disabled").removeClass("form-control-plaintext").addClass("form-control");
    });
		$("form#emploi").on("change keyup", "#week input", function(){
			i = Number($(this).val());
			if (i < 1 || i > 6) {
				$(this).val(1);
				i = 1;
			}
			$(this).parent().nextAll().each(function(){
				i++;
				if (i == 7) {
					i = 1;
				}
				$(this).find("input").val(i);
			});
			i = Number($(this).val());
			$(this).parent().prevAll().each(function(){
				i--;
				if (i == 0) {
					i = 6;
				}
				$(this).find("input").val(i);
			});
		});
		$("form#info").on("click", ".save", function(){
      $btn = $(this);
			$btn.html("المرجو الانتظار<i class='fas fa-spinner fa-spin mr-2'></i>");
      dataset = {name_ar: $("#name_ar").val().trim(),name_fr: $("#name_fr").val().trim(),doti: $("#doti").val()};
			updateData("info");
		});
    $("form#classroom").on("click", ".save", function(){
      classroom = [];
      $btn = $(this);
      $btn.html("المرجو الانتظار<i class='fas fa-spinner fa-spin mr-2'></i>");
      $(this).parents("form").find("input:checked").each(function () {
        classroom.push($(this).val());
      });
			if (classroom.length == 0) {
				alertShow("المرجو اختيار مستوى واحد على اﻷقل");
			} else {
				dataset = {classroom: classroom.join(",")};
				updateData("classroom");
			}
    });
    $("form#school").on("click", ".save", function(){
      $btn = $(this);
      $btn.html("المرجو الانتظار<i class='fas fa-spinner fa-spin mr-2'></i>");
			dataset = {aca: $("#aca").val().trim(),del: $("#del").val().trim(),sch_ar: $("#sch_ar").val().trim(),sch_fr: $("#sch_fr").val().trim()};
      updateData("school");
    });
		$("form#books").on("click", ".save", function(){
      $btn = $(this);
      $btn.html("المرجو الانتظار<i class='fas fa-spinner fa-spin mr-2'></i>");
			ara_book = [];
			isl_book = [];
			art_book = [];
			sci_book = [];
			mth_book = [];
			fre_book = [];
			soc_book = [];
			amz_book = [];
			empty = false;
			$btn.parents("form").find("select").each(function(){
				if ($(this).val() == "") {
					empty = true;
				}
			});
			if (empty) {
				alertShow("المرجو تعبئة جميع الخانات");
			} else {
				i = 0;
				classroom_count = $btn.parents("form").find("div.form-row").length;
				while (i <= classroom_count-1) {
					ara_book.push($btn.parents("form").find("div.form-row:eq("+i+")").find("select:eq(0)").val());
					isl_book.push($btn.parents("form").find("div.form-row:eq("+i+")").find("select:eq(1)").val());
					art_book.push($btn.parents("form").find("div.form-row:eq("+i+")").find("select:eq(2)").val());
					sci_book.push($btn.parents("form").find("div.form-row:eq("+i+")").find("select:eq(3)").val());
					mth_book.push($btn.parents("form").find("div.form-row:eq("+i+")").find("select:eq(4)").val());
					fre_book.push($btn.parents("form").find("div.form-row:eq("+i+")").find("select:eq(5)").val());
					amz_book.push($btn.parents("form").find("div.form-row:eq("+i+")").find("select:eq(6)").val());
					if ($btn.parents("form").find("div.form-row:eq("+i+")").find("select").length == 8) {
						soc_book.push($btn.parents("form").find("div.form-row:eq("+i+")").find("select:eq(7)").val());
					} else {
						soc_book.push("00");
					}
					i++;
				}
				dataset = {
					ara_book : ara_book.join(","),
					isl_book : isl_book.join(","),
					art_book : art_book.join(","),
					sci_book : sci_book.join(","),
					mth_book : mth_book.join(","),
					fre_book : fre_book.join(","),
					amz_book : amz_book.join(","),
					soc_book : soc_book.join(",")
				}
				updateData("books");
			}
    });
		$("form#emploi").on("click", ".save", function(){
      $btn = $(this);
      $btn.html("المرجو الانتظار<i class='fas fa-spinner fa-spin mr-2'></i>");
			$(this).parents("form").find("div.tab-pane").each(function(){
				console.log($(this).attr("id"));
				$(this).find("input[type='time']").each(function(){
					console.log($(this).val());
				});
			});
    });
  });
</script>
<?php include 'assets/footer.php'; ?>

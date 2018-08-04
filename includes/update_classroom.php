<?php
  require_once 'user_check.php';
  $classroom = strtolower(protect($_POST['classroom']));
  $null = null;
  if ($classroom == "") {
    $classroom = $null;
  }
  try {
    $step1_stmt = $tinml_con->prepare("UPDATE `users` SET `classroom`=?,`ara_book`=?,`isl_book`=?,`art_book`=?,`sci_book`=?,`mth_book`=?,`fre_book`=?,`soc_book`=?,`emploi`=? WHERE `id`=?");
    $step1_stmt->bindParam(1, $classroom, PDO::PARAM_STR);
    $step1_stmt->bindParam(2, $null, PDO::PARAM_STR);
    $step1_stmt->bindParam(3, $null, PDO::PARAM_STR);
    $step1_stmt->bindParam(4, $null, PDO::PARAM_STR);
    $step1_stmt->bindParam(5, $null, PDO::PARAM_STR);
    $step1_stmt->bindParam(6, $null, PDO::PARAM_STR);
    $step1_stmt->bindParam(7, $null, PDO::PARAM_STR);
    $step1_stmt->bindParam(8, $null, PDO::PARAM_STR);
    $step1_stmt->bindParam(9, $null, PDO::PARAM_STR);
    $step1_stmt->bindParam(10, $log_id, PDO::PARAM_INT);
    $step1_stmt->execute();
    echo "done";
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
?>

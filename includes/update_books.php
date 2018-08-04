<?php
  require_once 'user_check.php';
  $ara_book = protect($_POST['ara_book']);
  $isl_book = protect($_POST['isl_book']);
  $art_book = protect($_POST['art_book']);
  $sci_book = protect($_POST['sci_book']);
  $mth_book = protect($_POST['mth_book']);
  $fre_book = protect($_POST['fre_book']);
  $soc_book = protect($_POST['soc_book']);
  try {
    $step1_stmt = $tinml_con->prepare("UPDATE `users` SET `ara_book`=?,`isl_book`=?,`art_book`=?,`sci_book`=?,`mth_book`=?,`fre_book`=?,`soc_book`=? WHERE `id`=?");
    $step1_stmt->bindParam(1, $ara_book, PDO::PARAM_STR);
    $step1_stmt->bindParam(2, $isl_book, PDO::PARAM_STR);
    $step1_stmt->bindParam(3, $art_book, PDO::PARAM_STR);
    $step1_stmt->bindParam(4, $sci_book, PDO::PARAM_STR);
    $step1_stmt->bindParam(5, $mth_book, PDO::PARAM_STR);
    $step1_stmt->bindParam(6, $fre_book, PDO::PARAM_STR);
    $step1_stmt->bindParam(7, $soc_book, PDO::PARAM_STR);
    $step1_stmt->bindParam(8, $log_id, PDO::PARAM_INT);
    $step1_stmt->execute();
    echo "done";
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
?>

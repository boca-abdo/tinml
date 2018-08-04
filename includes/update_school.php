<?php
  require_once 'user_check.php';
  $aca = strtolower(protect($_POST['aca']));
  if ($aca == "") {
    $aca = null;
  }
  $del = strtolower(protect($_POST['del']));
  if ($del == "") {
    $del = null;
  }
  $sch_ar = strtolower(protect($_POST['sch_ar']));
  if ($sch_ar == "") {
    $sch_ar = null;
  }
  $sch_fr = strtolower(protect($_POST['sch_fr']));
  if ($sch_fr == "") {
    $sch_fr = null;
  }
  try {
    $step1_stmt = $tinml_con->prepare("UPDATE `users` SET `aca`=?,`del`=?,`sch_ar`=?,`sch_fr`=? WHERE `id`=?");
    $step1_stmt->bindParam(1, $aca, PDO::PARAM_STR);
    $step1_stmt->bindParam(2, $del, PDO::PARAM_STR);
    $step1_stmt->bindParam(3, $sch_ar, PDO::PARAM_STR);
    $step1_stmt->bindParam(4, $sch_fr, PDO::PARAM_STR);
    $step1_stmt->bindParam(5, $log_id, PDO::PARAM_INT);
    $step1_stmt->execute();
    echo "done";
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
?>

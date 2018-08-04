<?php
  require_once 'user_check.php';
  $aca = protect($_POST['aca']);
  $del = protect($_POST['del']);
  $sch_ar = protect($_POST['sch_ar']);
  $sch_fr = strtolower(protect($_POST['sch_fr']));
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

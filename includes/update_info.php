<?php
  require_once 'user_check.php';
  $name_ar = strtolower(protect($_POST['name_ar']));
  if ($name_ar == "") {
    $name_ar = null;
  }
  $name_fr = strtolower(protect($_POST['name_fr']));
  if ($name_fr == "") {
    $name_fr = null;
  }
  $doti = preg_replace('#[^0-9]#', '', $_POST['doti']);
  if ($doti == "") {
    $doti = null;
  }
  try {
    $step1_stmt = $tinml_con->prepare("UPDATE `users` SET `name_ar`=?,`name_fr`=?,`doti`=? WHERE `id`=?");
    $step1_stmt->bindParam(1, $name_ar, PDO::PARAM_STR);
    $step1_stmt->bindParam(2, $name_fr, PDO::PARAM_STR);
    $step1_stmt->bindParam(3, $doti, PDO::PARAM_INT);
    $step1_stmt->bindParam(4, $log_id, PDO::PARAM_INT);
    $step1_stmt->execute();
    echo "done";
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
?>

<?php
  require_once 'user_check.php';
  $color1 = $_POST['color1'];
  $color2 = $_POST['color2'];
  try {
    $step1_stmt = $tinml_con->prepare("UPDATE `users` SET `color1`=?,`color2`=? WHERE `id`=?");
    $step1_stmt->bindParam(1, $color1, PDO::PARAM_STR);
    $step1_stmt->bindParam(2, $color2, PDO::PARAM_STR);
    $step1_stmt->bindParam(3, $log_id, PDO::PARAM_INT);
    $step1_stmt->execute();
    echo "done";
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
?>

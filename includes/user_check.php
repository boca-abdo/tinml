<?php
  session_start();
  require_once 'db.php';
  require_once 'security.php';
  $log_id = "";
  $log_e = "";
  $log_p = "";
  $log_stmt = $tinml_con->prepare("SELECT * FROM `users` WHERE `id`=? AND `email`=? AND `password`=? LIMIT 1");
  if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $log_id = protect($_SESSION['id']);
    $log_e = protect($_SESSION['email']);
    $log_p = protect($_SESSION['password']);
    $log_stmt->bindParam(1, $log_id, PDO::PARAM_INT);
    $log_stmt->bindParam(2, $log_e, PDO::PARAM_STR);
    $log_stmt->bindParam(3, $log_p, PDO::PARAM_STR);
    try {
      $log_stmt->execute();
      if ($log_stmt->rowCount() > 0) {
        $log_stmt->setFetchMode(PDO::FETCH_ASSOC);
        $log_row = $log_stmt->fetch();
      }
    } catch (PDOException $err) {
      echo $err->getMessage();
    }
  } else if (isset($_COOKIE['id']) && isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    $log_id = protect($_COOKIE['id']);
    $log_e = protect($_COOKIE['email']);
    $log_p = protect($_COOKIE['password']);
    $log_stmt->bindParam(1, $log_id, PDO::PARAM_INT);
    $log_stmt->bindParam(2, $log_e, PDO::PARAM_STR);
    $log_stmt->bindParam(3, $log_p, PDO::PARAM_STR);
    try {
      $log_stmt->execute();
      if ($log_stmt->rowCount() > 0) {
        $log_stmt->setFetchMode(PDO::FETCH_ASSOC);
        $log_row = $log_stmt->fetch();
      }
    } catch (PDOException $err) {
      echo $err->getMessage();
    }
  }
?>

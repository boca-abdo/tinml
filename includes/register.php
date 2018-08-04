<?php
  require_once 'db.php';
  require_once 'security.php';
  if (!filter_var($_POST['e'], FILTER_VALIDATE_EMAIL)) {
    echo "email";
    $tinml_con = null;
    exit();
  }
  if (strlen($_POST['p']) < 6) {
    echo "pass";
    $tinml_con = null;
    exit();
  }
  $e = strtolower(protect($_POST['e']));
  try {
    $check_stmt = $tinml_con->prepare("SELECT `id` FROM `users` WHERE `email`=?");
    $check_stmt->bindParam(1, $e, PDO::PARAM_STR);
    $check_stmt->execute();
    if ($check_stmt->rowCount() > 0) {
        echo "dup";
        $tinml_con = null;
        exit();
    }
  } catch (PDOException $err) {
    echo $err->getMessage();
    $tinml_con = null;
    exit();
  }
  $p = hashpass($_POST['p'],$salt);
  $ip = preg_replace('#[^0-9.]#', '', $_SERVER['REMOTE_ADDR']);
  $dt = date("Y-m-d H:i:s");
  try {
    $register_stmt = $tinml_con->prepare("INSERT INTO `users` (`email`,`password`,`ip`,`first_login`,`last_login`) VALUES (?,?,?,?,?)");
    $register_stmt->bindParam(1, $e, PDO::PARAM_STR);
    $register_stmt->bindParam(2, $p, PDO::PARAM_STR);
    $register_stmt->bindParam(3, $ip, PDO::PARAM_STR);
    $register_stmt->bindParam(4, $dt, PDO::PARAM_STR);
    $register_stmt->bindParam(5, $dt, PDO::PARAM_STR);
    $register_ex = $register_stmt->execute();
    $last_id = $tinml_con->lastInsertId();
    $dir = $_SERVER['DOCUMENT_ROOT']."users/".$last_id;
    if (!is_dir($dir)) {
      mkdir($dir,0755,true);
    }
    session_start();
    $_SESSION['id'] = $last_id;
    $_SESSION['email'] = $e;
    $_SESSION['password'] = $p;
    setcookie("id", $last_id, strtotime( '+30 days' ), "/", "", "", TRUE);
    setcookie("email", $e, strtotime( '+30 days' ), "/", "", "", TRUE);
    setcookie("password", $p, strtotime( '+30 days' ), "/", "", "", TRUE);
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
  echo "success";
  $tinml_con = null;
?>

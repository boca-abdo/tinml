<?php
  require_once 'db.php';
  require_once 'security.php';
  $e = strtolower(protect($_POST['e']));
  $p = hashpass($_POST['p'],$salt);
  $dt = date("Y-m-d H:i:s");
  try {
    $sign_stmt = $tinml_con->prepare("SELECT `id`,`password` FROM `users` WHERE `email`=?");
    $sign_stmt->bindParam(1, $e, PDO::PARAM_STR);
    $sign_stmt->execute();
    if ($sign_stmt->rowCount() > 0) {
      $sign_stmt->setFetchMode(PDO::FETCH_ASSOC);
      $sign_row = $sign_stmt->fetch();
      if ($sign_row['password'] == $p) {
        $tinml_con->exec("UPDATE `users` SET `last_login`='$dt' WHERE email='$e'");
        session_start();
        $_SESSION['id'] = $sign_row['id'];
        $_SESSION['email'] = $e;
        $_SESSION['password'] = $p;
        setcookie("id", $sign_row['id'], strtotime( '+30 days' ), "/", "", "", TRUE);
        setcookie("email", $e, strtotime( '+30 days' ), "/", "", "", TRUE);
        setcookie("password", $p, strtotime( '+30 days' ), "/", "", "", TRUE);
        echo "success";
        $tinml_con = null;
      } else {
        echo "password";
        $tinml_con = null;
        exit();
      }
    } else {
      echo "email";
      $tinml_con = null;
      exit();
    }
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
?>

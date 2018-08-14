<?php
  require_once 'user_check.php';
  $niv = protect($_POST['niv']);
  $week = protect($_POST['week']);
  $mon_times = protect($_POST['mon_times']);
  $mon_comps = protect($_POST['mon_comps']);
  $mon_durations = protect($_POST['mon_durations']);
  $tue_times = protect($_POST['tue_times']);
  $tue_comps = protect($_POST['tue_comps']);
  $tue_durations = protect($_POST['tue_durations']);
  $wed_times = protect($_POST['wed_times']);
  $wed_comps = protect($_POST['wed_comps']);
  $wed_durations = protect($_POST['wed_durations']);
  $thu_times = protect($_POST['thu_times']);
  $thu_comps = protect($_POST['thu_comps']);
  $thu_durations = protect($_POST['thu_durations']);
  $fri_times = protect($_POST['fri_times']);
  $fri_comps = protect($_POST['fri_comps']);
  $fri_durations = protect($_POST['fri_durations']);
  $sat_times = protect($_POST['sat_times']);
  $sat_comps = protect($_POST['sat_comps']);
  $sat_durations = protect($_POST['sat_durations']);
  try {
    $emploi_stmt = $tinml_con->prepare("INSERT INTO `emplois` (`niveau`,`week`,`mon_times`,`tue_times`,`wed_times`,`thu_times`,`fri_times`,`sat_times`,`mon_comps`,`tue_comps`,`wed_comps`,`thu_comps`,`fri_comps`,`sat_comps`,`mon_durations`,`tue_durations`,`wed_durations`,`thu_durations`,`fri_durations`,`sat_durations`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $emploi_stmt->bindParam(1, $niv, PDO::PARAM_STR);
    $emploi_stmt->bindParam(2, $week, PDO::PARAM_STR);
    $emploi_stmt->bindParam(3, $mon_times, PDO::PARAM_STR);
    $emploi_stmt->bindParam(4, $tue_times, PDO::PARAM_STR);
    $emploi_stmt->bindParam(5, $wed_times, PDO::PARAM_STR);
    $emploi_stmt->bindParam(6, $thu_times, PDO::PARAM_STR);
    $emploi_stmt->bindParam(7, $fri_times, PDO::PARAM_STR);
    $emploi_stmt->bindParam(8, $sat_times, PDO::PARAM_STR);
    $emploi_stmt->bindParam(9, $mon_comps, PDO::PARAM_STR);
    $emploi_stmt->bindParam(10, $tue_comps, PDO::PARAM_STR);
    $emploi_stmt->bindParam(11, $wed_comps, PDO::PARAM_STR);
    $emploi_stmt->bindParam(12, $thu_comps, PDO::PARAM_STR);
    $emploi_stmt->bindParam(13, $fri_comps, PDO::PARAM_STR);
    $emploi_stmt->bindParam(14, $sat_comps, PDO::PARAM_STR);
    $emploi_stmt->bindParam(15, $mon_durations, PDO::PARAM_STR);
    $emploi_stmt->bindParam(16, $tue_durations, PDO::PARAM_STR);
    $emploi_stmt->bindParam(17, $wed_durations, PDO::PARAM_STR);
    $emploi_stmt->bindParam(18, $thu_durations, PDO::PARAM_STR);
    $emploi_stmt->bindParam(19, $fri_durations, PDO::PARAM_STR);
    $emploi_stmt->bindParam(20, $sat_durations, PDO::PARAM_STR);
    $emploi_stmt->execute();
    $last_id = $tinml_con->lastInsertId();
    $update = $tinml_con->query("UPDATE users SET emploi='$last_id' WHERE id='$log_id'");
    echo "done";
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
?>

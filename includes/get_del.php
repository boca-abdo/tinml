<?php
	$aca = $_POST['aca'];
	$data = array();
	try {
		$tinml_con = new PDO("mysql:host=ftp.skwila.net;dbname=skwila_bank", "skwila_boca", "J366985@boca");
		$tinml_con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
		$aca_stmt = $tinml_con->prepare("SELECT `del` FROM `schools` WHERE `aca`=?");
		$aca_stmt->bindParam(1, $aca, PDO::PARAM_STR);
		$aca_stmt->execute();
		$aca_stmt->setFetchMode(PDO::FETCH_ASSOC);
		while ($aca_row = $aca_stmt->fetch()) {
			if (!in_array($aca_row['del'],$data)) {
				array_push($data,$aca_row['del']);
			}
		}
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
	echo json_encode($data);
?>

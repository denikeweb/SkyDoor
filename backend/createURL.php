<?php
	$link = mysql_connect("localhost", "root", "");
	mysql_select_db("skydoor", $link);
	$url = stripslashes($_REQUEST['url']);
	$alph = "vQWybtPeZA7NYDk0FTwfad48jLSHROcp6EzGqoMJClhmUBrIusX25Vig13Kn9";
	$flag = true;
	do {
		$rnd = '';
		for ($i = 0; $i < 6; $i ++){
			$rnd .= $alph [mt_rand (0, 61)];
		}
		$query = mysql_query("SELECT `url` FROM `links` WHERE `surl`='$rnd'");
		if (mysql_num_rows($query) == 0) {
			$flag = false;
		}
	} while ($flag);
	$query = mysql_query("INSERT INTO `links` (`surl`, `url`) VALUES('$rnd', '$url')");
	if ($query) {
		echo 'http://'.getenv('HTTP_HOST').'/'.$rnd;
	}
	mysql_close();
?>  
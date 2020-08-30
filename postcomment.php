<?php
	if ($_POST['page'] != '' && $_POST['name'] != '' && $_POST['comment'] != '' && file_exists($_POST['page']."")) {
		$name = str_replace("~", "", $_POST['name']);
		$comment = str_replace("~", "", $_POST['comment']);
		
		$name = strip_tags($name);
		$comment = strip_tags($comment);

		$comment = nl2br($comment, TRUE);
		$comment = str_replace(array("\r\n", "\r", "\n"), "", $comment);
		$name = substr($name, 0, 100);
		$comment = substr($comment, 0, 5000);
		
		$tfile = $_POST['page']."c.txt";
		if (file_exists($tfile)) {
			$str = file_get_contents($tfile)."\n";
		} else {
			$str = '';
		}
		$str .= $name."~".time()."~".$comment;
		file_put_contents($tfile, $str);
	}
	header("Location: ". $_POST['page']."");
?>

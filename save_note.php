<?php
	if(isset($_POST['note'])) {
		$note = $_POST['note'];
		$file = "notes.txt";
		$handle = fopen($file, "a");
		fwrite($handle, $note."\n");
		fclose($handle);
	}
	header("Location: index.html");
?>

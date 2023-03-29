<?php
	require_once("./vars.php");
	//include();
	//include_once();
	//require();

	$plik = file_get_contents($path . '/pliki/baza.csv');
	foreach(explode("\n",$plik) as $nazwa) 
		echo "<p>{$nazwa}</p>";
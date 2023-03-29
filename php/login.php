<?php
	$baza = new mysqli('localhost','root','','4ap_baza');
	$zapytanie = $baza->query("SELECT * FROM `osoby`;");
	$r = [];
	while($wiersz=$zapytanie->fetch_assoc()) {
		$zwrot['imie'] = $wiersz['imie'];
		$zwrot['nazwisko'] = $wiersz['nazwisko'];
		$zwrot['haslo'] = $wiersz['haslo'];
		$r[count($r)] = $zwrot; 
	}
	echo json_encode($r);
	//print_r($r);
	
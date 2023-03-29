<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8"/>
		<title>PHP</title>
		<script  src="./js/util.js"></script>
	</head>
	<body>
		<form method="post">
			<input type="text" name="a"/>
			<button>Wyślij</button>
		</form>
		<?php
			
		 	$baza = new mysqli('localhost','root','','4ap_baza');
			/*$baza->query("INSERT INTO `osoby` (`imie`,`nazwisko`,`haslo`) VALUES
						 ('Janina','Kowalska','trudnehaslo'),
						 ('Marian','Kowalska','\$t56\&'),
						 ('Janina','Zbych','adffw'),
						 ('Kalina','Adamczyk','admin1234'),
						 ('Jacek','Rowgowski','azerty'),
						 ('Marek','Pyzak','bramka');");*/
			$zapytanie = $baza->query("SELECT * FROM `osoby`");
			foreach($zapytanie as $w) {
				print_r($w['imie']);
			}
			
			/*while($wiersz=$zapytanie->fetch_assoc()) {
				echo "<p>${wiersz['imie']} o nazwisku ${wiersz['nazwisko']} posiada hasło: ${wiersz['haslo']}</p>";
			}*/
			$baza->close();
			
			//odczyt/zapis plików w PHP
			
			/*if (isset($_REQUEST['a']) && !empty($_REQUEST['a'])) {
				$plik = fopen('./pliki/baza.csv', 'a');
				fwrite($plik, $_REQUEST['a'] . "\r\n");
				fclose($plik);
			}
			/*else {
				$plik = file_get_contents('./pliki/baza.csv');
				foreach(explode("\n",$plik) as $nazwa) {
					echo "<p>{$nazwa}</p>";
				}				
			}*/
				
			//print_r($_REQUEST);
			//print_r($_GET);
			//print_r($_POST);
		?>
		<button id="reset">Przeładuj</button>
		<div id="out"></div>
		<script>addEvents()</script>
	</body>
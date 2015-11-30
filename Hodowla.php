<?php
		include_once('Zwierz.php');
		include_once('Drapieznik.php');
		include_once('Zabojca.php');
		$drapieżnik = new Drapieznik();
		$drapieżnik->zmien(new Zabojca(50,2));
		echo $drapieżnik->getParametry()."\n"; 
		
		/*$zwierz = new Zwierz();
		$wierz->otoZwierz();
		$mojZwierz = new Zwierz("szynszyl", "samiec", "szary", "sqeek sqeek");
		innyZwierz = new Zwierz("kruk", "samiec", "czarny", "kra kra");
		echo $mojZwierz->otoZwierz();
		echo $innyZwierz->otoZwierz();*/
	
		
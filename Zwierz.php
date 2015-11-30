<?php
	include_once('Zwierzinterface.php');
class Zwierz implements ZwierzInterface{
	private $gatunek;
	private $plec;
	private $umaszczenie;
	private $wydawanyDzwiek;
	
	/*function __construct(){
		$this->gatunek = "szynszyl";
		$this->plec = "samica";
		$this->umaszczenie = "szare";
		$this->wydawanyDzwiek= "squeek squeek";
		}
	*/
	
		function __construct($gatunek, $plec, $umaszczenie, $wydawanyDzwiek){
		$this->gatunek =$gatunek;
		$this->plec = $plec;
		$this->umaszczenie = $umaszczenie;
		$this->wydawanyDzwiek= $wydawanyDzwiek;
		}
		
		public function getGatunek(){
			return $this->gatunek;
		}
		public function setGatunek($gatunek){
			$this->gatunek=$gatunek;			
		}
		public function getPlec(){
			return $this->plec;
		}
		public function setPlec($plec){
			$this->plec=$plec;			
		}
		public function getUmaszczenie(){
			return $this->umaszczenie;
		}
		public function setUmaszczenie($umaszczenie){
			$this->umaszczenie=$umaszczenie;			
		}
		public function getWydawanyDzwiek(){
			return $this->wydawanyDzwiek;
		}
		public function setWydawanyDzwiek($wydawanyDzwiek){
			$this->wydawanyDzwiek=$wydawanyDzwiek;			
		}
}
<?php
	include_once('Zabojcainterface.php');
	class Zabojca implements ZabojcaInterface{

		private $waga;
		private $liczbaNog;
		
		public function __construct($waga, $liczbaNog ){
			$this->waga =$waga;
			$this->liczbaNog = $liczbaNog;
		}
	
		public function getWaga(){
			return $this->waga;
		}
	  
		public function setWaga($waga){
			$this->waga=$waga;			
		}
		
		public function getLiczbaNog(){
			return $this->liczbaNog;
		}
		
		public function setLiczbaNog($liczbaNog){
			$this->liczbaNog=$liczbaNog;			
		}
	} 
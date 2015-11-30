<?php
	include_once('Drapieznikinterface.php');
	include_once('Zabojca.php');
	include_once('Zwierz.php');
	
	class Drapieznik extends Zwierz implements DrapieznikInterface{
		
		private $zabojca;

		function __construct(){
		}
	
		public function getPredkoscMaksymalna(){
			return $this->zabojca->getLiczbaNog() * $this->zabojca->getWaga() * 0.5;	  
	    }
	  
		public function getPrzyspieszenie(){
			return $this->zabojca->getLiczbaNog() / 4 * $this->zabojca->getWaga();  
		}
		
		public function zmien($zabojca){
            $this->zabojca = $zabojca;
		}
		
		public function getParametry (){
    	return "Max. predkość: ".$this->getPredkoscMaksymalna()." Przyspieszenie: ".$this->getPrzyspieszenie();
		}
	}
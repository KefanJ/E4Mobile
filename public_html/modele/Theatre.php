<?php
class Theatre{
	private $idT;
	private $nomT;
        private $adresseT;
        private $idTP;
        private $dateT;
	
        
                
	function __construct($idT,$nomT,$adresseT,$idTP,$dateT){
		$this->idT = $idT;
		$this->nomT = $nomT;
                $this->adresseT = $adresseT;  
                $this->idTP = $idTP; 
                $this->dateT= $dateT;
               
              
	}
	
	public function getIdT(){
		return $this->idT;
	}
	
	public function getNomT(){
		return $this->nomT;
	}
        
        public function getAdresseT(){
		return $this->prenomC;
	}
        
	 public function getIdTP(){
		return $this->idTP;
	}
        
	 public function getDateT(){
		return $this->dateT;
	}
        
      
      
}
?>


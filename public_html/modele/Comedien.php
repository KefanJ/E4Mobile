<?php
class Comedien{
	private $idC;
	private $nomC;
        private $prenomC;
        private $naissanceC;
        private $ageC;
	private $nationaliteC;
        
                
	function __construct($idC,$nomC,$prenomC,$naissanceC,$ageC,$nationaliteC){
		$this->idC = $idC;
		$this->nomC = $nomC;
                $this->prenomC = $prenomC;  
                $this->naissanceC = $naissanceC; 
                $this->ageC= $ageC;
                $this->nationaliteC = $nationaliteC;
               
              
	}
	
	public function getIdC(){
		return $this->idC;
	}
	
	public function getNomC(){
		return $this->nomC;
	}
        
        public function getPrenomC(){
		return $this->prenomC;
	}
        
	 public function getNaissanceC(){
		return $this->naissanceC;
	}
        
	 public function getAgeC(){
		return $this->ageC;
	}
        
        public function getNationaliteC(){
		return $this->nationaliteC;
	}
      
}
?>

<?php
class Comedien{
	private $idC;
	private $nomC;
        private $prenomC;
        private $naissanceC;
     
	private $nationaliteC;
        
                
	function __construct($idC,$nomC,$prenomC,$naissanceC,$nationaliteC){
		$this->idC = $idC;
		$this->nomC = $nomC;
                $this->prenomC = $prenomC;  
                $this->naissanceC = $naissanceC; 
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
        
	 
        
        public function getNationaliteC(){
		return $this->nationaliteC;
	}
          
        public function getDate()
                {
                 return date("Y-m-d");
                }

        

        public function  getAge(){
            $age= date("Y-m-d");
           $a=date_diff(date_create($age), date_create($this-> getNaissanceC()))->y;
            return $a;
        }
}
?>

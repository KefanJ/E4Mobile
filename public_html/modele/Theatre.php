<?php
class Theatre{
	private $idT;
	private $nomT;
        private $rueT;
        private $villeT;
        private $codePT;
	
        
                
	function __construct($idT,$nomT,$rueT,$villeT,$codePT){
		$this->idT = $idT;
		$this->nomT = $nomT;
                $this->rueT = $rueT;  
                $this->villeT = $villeT; 
                $this->codePT= $codePT;
               
              
	}
	
	public function getIdT(){
		return $this->idT;
	}
	
	public function getNomT(){
		return $this->nomT;
	}
        
        public function getRueT(){
		return $this->rueT;
	}
        
	 public function getVilleT(){
		return $this->villeT;
	}
        
	 public function getCodePT(){
		return $this->codePT;
	}
        
      
      
}
?>


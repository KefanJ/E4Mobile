<?php
class Piece{
	private $idP;
	private $nomP;
	private $dateP;
	private $realisateurP;
        
                
	function __construct($idP,$nomP,$dateP,$realisateurP){
		$this->idP = $idP;
		$this->nomP = $nomP;
		$this->dateP = $dateP;
                $this->realisateurP = $realisateurP;
	}
	
	public function getIdP(){
		return $this->idP;
	}
	
	public function getNomP(){
		return $this->nomP;
	}
        
	
	public function getDateP(){
		return $this->dateP;
	}
        
        public function getRealisateurP(){
            return $this->realisateurP;
        }
}
?>
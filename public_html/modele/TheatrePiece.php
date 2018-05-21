<?php
class TheatrePiece {
	private $idTP;
        private $idThe;
        private $idPiece;
                
	
        function __construct($idTP,$idThe,$idPiece){
		$this->idTP = $idTP;
                $this->idThe = $idThe;
                $this->idPiece = $idPiece;
	}
	public function getIdTP(){
		return $this->idTP;
	}
	public function getIdThe(){
                return $this->idThe;
        }
        public function getIdPiece(){
            return $this->idPiece;
        }
}
?>


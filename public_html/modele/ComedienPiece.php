<?php
class ComedienPiece {
	private $idCP;
        private $idCom;
        private $idPie;
                
	
        function __construct($idCP,$idCom,$idPie){
		$this->idCP = $idCP;
                $this->idCom = $idCom;
                $this->idPie = $idPie;
	}
	public function getIdCP(){
		return $this->idCP;
	}
	public function getIdCom(){
                return $this->idCom;
        }
        public function getIdPie(){
            return $this->idPie;
        }
}
?>

<?php
class Passerelle{
        static private $mysql_link;
//  SELECT acteur_nom FROM acteur AS a,acteurfilm AS b WHERE b.id_act=a.acteur_id 
//        SELECT film_nom FROM acteur AS a,acteurfilm AS b,film AS c WHERE b.id_act=a.acteur_id AND b.id_film=c.film_id tout les films qu ils ont jouer
//SELECT acteur_nom,acteur_prenom FROM acteurfilm AS a,acteur AS b WHERE b.acteur_id=a.id_act AND id_film= "59"

	static function connexion($mysql_hote,$mysql_db,$mysql_user,$mysql_pass){
		Passerelle::$mysql_link = new PDO("mysql:host=$mysql_hote;dbname=$mysql_db", "$mysql_user", "$mysql_pass");
	}

        static function addComedien($nomC,$prenomC,$naissanceC,$ageC,$nationaliteC){
                $sql = "insert into comedien(c_id, c_nom,c_prenom ,c_datenaiss,c_age,c_nation  ) values (NULL,'$nomC','$prenomC','$naissanceC','$ageC','$nationaliteC')";
            $result = Passerelle::$mysql_link->exec($sql);           
            if ($result == 1){
                    return "SUCCESS";
            }
            else{
                    return "ERREUR";
            }
        }
        static function addPiece($nomP,$dateP,$realisateurP){
            $sql = "insert piece(p_id, p_nom, p_creation, p_realisateur	) values (NULL,'$nomP','$dateP','$realisateurP')";
            $result = Passerelle::$mysql_link->exec($sql);           
            if ($result == 1){
                    return "SUCCESS";
            }
            else{
                    return "ERREUR";
            }
        }
        
        
        static function addComedienPiece($idCom,$idPie){
            $sql = "insert comedienpiece(cp_id, id_c, id_p) values (NULL,'$idCom','$idPie')";
            $result = Passerelle::$mysql_link->exec($sql);           
            if ($result == 1){
                    return "SUCCESS";
            }
            else{
                    return "ERREUR";
            }
        }
        
        static function addTheatre($nomT,$adresseT,$idTC,$dateT){
            $sql = "insert theatre(t_id, t_nom, t_adresse,t_idpiece,t_date) values (NULL,'$nomT','$adresseT','$idTC','$dateT)";
            $result = Passerelle::$mysql_link->exec($sql);           
            if ($result == 1){
                    return "SUCCESS";
            }
            else{
                    return "ERREUR";
            }
        }
                  
        static function getOneComedien($idC){
            $comedien = null;
            if ($idC != -1) {
                    $sql ="select * from comedien where c_id=".$idC;
                    $result = Passerelle::$mysql_link->query($sql);
                    if ($result){
                            $row = $result->fetch();
                            $idC = $row['c_id'];
                            $nomC = $row['c_nom'];
                            $prenomC = $row['c_prenom']; 
                            $naissanceC = $row ['c_datenaiss'];  
                            $ageC = $row ['c_age'];
                            $nationaliteC = $row['c_nation'];
                           
                          
                            $comedien = new Comedien($idC,$nomC,$prenomC,$naissanceC,$ageC,$nationaliteC);		
                    }
            }
            return $comedien;
        }

        static function getLesComediens(){
            $comedien = array();
                    $sql ="SELECT * FROM comedien order by c_id DESC";
                    $result = Passerelle::$mysql_link->query($sql);
                     while ($row = $result->fetch()) {
                           $idC = $row['c_id'];
                            $nomC = $row['c_nom'];
                            $prenomC = $row['c_prenom'];
                            $naissanceC = $row ['c_datenaiss'];
                            $ageC = $row ['c_age'];
                            $nationaliteC = $row['c_nation']; 
                           
                            $comedien = new Comedien($idC,$nomC,$prenomC,$naissanceC,$ageC,$nationaliteC);
                           
                            $comediens[] = $comedien;
                            
                    }
            
/* @var $joueurs type */
        return $comediens;
        }
        static function getPiece(){
            $piece = array();
            
            $sql ="select * from piece   ";
            $result = Passerelle::$mysql_link->query($sql);
            
            while ($row = $result->fetch()) {
                            $idP = $row['p_id'];
                            $nomP = $row['p_nom'];
                            $dateP = $row['p_creation'];
                            $realisateurP = $row['p_realisateur'];
                            
                            
                            $piece = new Piece($idP,$nomP,$dateP,$realisateurP);
                            $pieces[] = $piece;
            }
            if($idP == NULL){
                echo '<script>alert("aucune piece");</script>';
                echo'href="index.php';
            }
            return $pieces;
        }
            static function getOnePiece($idP){
            $piece = null;
            if ($idP != -1) {
                    $sql ="select * from piece where p_id=".$idP;
                    
                    $result = Passerelle::$mysql_link->query($sql);
                    if ($result){
                            $row = $result->fetch();
                            $idP = $row['p_id'];
                            $nomP = $row['p_nom'];
                            $dateP = $row['p_creation'];
                            $realisateurP = $row['p_realisateur'];
                            
                            
                            $piece = new Piece($idP,$nomP,$dateP,$realisateurP);
                            $pieces[] = $piece;	
                    }
            }
            else{
                echo '<script>alert("aucune piece");</script>';
            }
            return $pieces;
            
        }
        
        static function getLesComedienPiece($idCP){
            
            $comedienPiece = array();
                
                    $sql ="SELECT * FROM comedienpiece WHERE cp_id= ".$idCP;
                    
                    $result = Passerelle::$mysql_link->query($sql);
//                    var_dump($result);
                    if ($result->rowCount() > 0) {
  
                    while ($row = $result->fetch()) { 
                        
                            $idCP = $row['cp_id'];
                            $idPie = $row['id_p'];
                            $idCom = $row['id_c'];
//                            var_dump($idact);
                            $comedienPiece = new ComedienPiece($idCP,$idPie,$idCom);	
                            $comedienPieces[] = $comedienPiece;	
                    }
                    
            return $comedienPieces;
        
        }
        else{
            echo '<script>alert("aucun acteur");</script>';
        }
}
        static function getLesComedienPiece2($idCP){
            
             $comedienPiece = array();
                
                     $sql ="SELECT * FROM comedienpiece WHERE cp_id= ".$idCP;
                    
                    $result = Passerelle::$mysql_link->query($sql);
//                    var_dump($sql);
                    while ($row = $result->fetch()) { 
                        
                            $idCP = $row['cp_id'];
                            $idPie = $row['id_p'];
                            $idCom = $row['id_c'];
                            $nomC = $row['c_nom'];
                            $prenomC = $row['c_prenom'];
                            var_dump($nomC);
                            $comedienPiece = new ComedienPiece($idCP,$idPie,$idCom,$nomC,$prenomC);	
                            $comedienPieces[] = $comedienPiece;	
                    }
                    
            return $comedienPieces;
        
        }
        
        static function getLesTheatres(){
            $theatre = array();
                    $sql ="SELECT * FROM theatre order by t_id DESC";
                    $result = Passerelle::$mysql_link->query($sql);
                     while ($row = $result->fetch()) {
                           $idT = $row['t_id'];
                            $nomT = $row['t_nom'];
                            $adresseT = $row['t_adresse'];
                            $idTP = $row ['t_idPiece'];
                            $dateT = $row ['t_date'];
                           
                           
                            $theatre = new Comedien($idT,$nomT,$adresseT,$idTP,$dateT);
                           
                            $theatres[] = $theatre;
                            
                    }
            
/* @var $joueurs type */
        return $theatres;
        }
        
        static function getOneTheatre($idT){
            $theatre = null;
            if ($idT != -1) {
                    $sql ="select * from theatre where t_id=".$idT;
                    
                    $result = Passerelle::$mysql_link->query($sql);
                    if ($result){
                            $row = $result->fetch();
                             $idT = $row['t_id'];
                            $nomT = $row['t_nom'];
                            $adresseT = $row['t_adresse'];
                            $idTP = $row ['t_idPiece'];
                            $dateT = $row ['t_date'];
                           
                           
                            $theatre = new Theatre($idT,$nomT,$adresseT,$idTP,$dateT);
                           
                            $theatres[] = $theatre;
                            
                    }
            }
            else{
                echo '<script>alert("aucune piece");</script>';
            }
            return $theatres;
            
        }
          static function updateTheatre($idT,$nomT, $adresseT, $idTP,$dateT){
            $sql="UPDATE `theatre` SET  `t_nom`='".$nomT."', `t_adress` ='$adresseT',t_idpiece='$idTP'"
                    . ",t_date ='$dateT'  WHERE t_id=".$idT;
            
            $result = Passerelle::$mysql_link->exec($sql);  
        }
        
        
        
        	  static function updateComedien($idC,$nomC, $prenomC, $naissanceC,$ageC,$nationaliteC){
            $sql="UPDATE `comedien` SET  `c_nom`='".$nomC."', `c_prenom` ='$prenomC',c_datenaiss='$naissanceC'"
                    . ",c_age ='$ageC',c_nation='$nationaliteC'  WHERE c_id=".$idC;
            
            $result = Passerelle::$mysql_link->exec($sql);  
        }
        
         static function updatePiece($idP,$nomP, $dateP, $realisateurP){
            $sql="UPDATE `piece` SET  `p_nom`='".$nomP."', `p_creation` ='$dateP',p_realisateur='$realisateurP'"
                    ."  WHERE p_id=".$idP;
            
            $result = Passerelle::$mysql_link->exec($sql);  
        }
        
       
         static function deleteComedien($idC){
            $sql="DELETE FROM `comedien` WHERE c_id=".$idC;           
            $result = Passerelle::$mysql_link->exec($sql);  
        }
     
       static function deletePiece($idP){
            $sql="DELETE FROM `piece` WHERE p_id=".$idP;           
            $result = Passerelle::$mysql_link->exec($sql);  
        }
        
        static function deleteComedienPiece($idCP){
            $sql="DELETE FROM `comedienpiece` WHERE cp_id=".$idCP;           
            $result = Passerelle::$mysql_link->exec($sql);  
        }
       
        static function deleteTheatre($idT){
            $sql="DELETE FROM `theatre` WHERE t_id=".$idT;           
            $result = Passerelle::$mysql_link->exec($sql);  
        }
}
?>


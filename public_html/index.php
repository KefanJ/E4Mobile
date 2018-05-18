<?php
require('modele/dbParametres.php');
require('modele/Comedien.php');
require('modele/Piece.php');
require ('modele/ComedienPiece.php');
require('modele/Passerelle.php');
require ('modele/Theatre.php');
require('vue/header.php');

?>
<div data-role="page">
    <div data-role="header" data-theme="b">
        <h1>Theatre</h1>
         <a href="http://localhost/E4Mobile/public_html/index.php" data-theme="a" data-icon="home" data-ajax='false'>Home</a>
    </div>
    <div data-role="content">
    <?php 
    
    Passerelle::connexion($MYSQL_HOTE,$MYSQL_DB,$MYSQL_USER,$MYSQL_PASS);
    if (isset ($_REQUEST['action'])){
            $action = $_REQUEST['action'];
    }
    else {
            $action = "";            
    }

             
                                 
    switch ($action) {
            case 'choix1'      :
      
                                     $contacts = Passerelle::getLesComediens();
                                     require('vue/showComedien.php'); 
                                     break;                             
                                          
                                  
            case  'choix2'     :   
                                     $contacts = Passerelle::getPiece();
                                     require ('vue/showPiece.php');    
                                     break;
            
                                 
                                 
                                 
            case 'choix3'       : 
                                    $contacts = Passerelle::getLesTheatres();
                                    require ('vue/ShowTheatre.php');
                                    break;
                                 
                                 
                                 
                                 
            case 'addP' 	:   
                                    require('vue/addPiece.php');
                                    break;                         
                                     
            case 'addC' 	:   $contacts = Passerelle::getLesComediens();
                                    require('vue/addComedien.php');
                                    break;
            
               case 'addCP'      : 
                
                                    $comedien = Passerelle::getLesComediens();
                                    require ('vue/addComedienPiece.php');
                                    
                                    break;             
                                    
                    case 'addT'      : 
                
                                    $theatre = Passerelle::getLesTheatres();
                                    require ('vue/addTheatre.php');
                                    
                                    break;                       
                                    
           
            case 'insertC' 	:   
                                    $nomC = $_REQUEST['nomC'];
                                    $prenomC = $_REQUEST['prenomC'];
                                    $naissanceC = $_REQUEST ['naissanceC'];
                                    $ageC = $_REQUEST ['ageC']; 
                                    $nationaliteC = $_REQUEST['nationaliteC'];  
                                   
                                    
                                    Passerelle::addComedien($nomC,$prenomC,$naissanceC,$ageC,$nationaliteC); 
                                    $contacts = Passerelle::getLesComediens();
                                    require ('vue/showComedien.php');
                                    break;
          
             case 'insertP' 	:   
                                    $nomP = $_REQUEST['nomP'];
                                    $dateP = $_REQUEST['dateP'];
                                    $realisateurP = $_REQUEST ['realisateurP'];
                                    Passerelle::addPiece($nomP,$dateP,$realisateurP); 
                                    $contacts = Passerelle::getPiece();
                                    require ('vue/showPiece.php');
                                    break;                    
           
                                
                                
            case 'insertT' 	:   
                                    $nomT = $_REQUEST['nomT'];
                                    $adresseT = $_REQUEST['adresseT'];
                                    $idTP = $_REQUEST['idTP'];
                                    $dateT = $_REQUEST['dateT'];
                                    Passerelle::addTheatre($nomT,$adresseT,$idTP,$dateT); 
                                    $contacts = Passerelle::getTheatre();
                                    require ('vue/showTheatre.php');
                                    break;                    
            
                                
                                
                                
            case 'detailsC' 	:   $idC = $_REQUEST['idC'];
                                    $contact = Passerelle::getOneComedien($idC);
                                    require('vue/showOneComedien.php');
                                    break;
                                
                                
            case 'detailsP' 	:   $idP = $_REQUEST['idP'];
                                    $contact = Passerelle::getOnePiece($idP);
                                    require('vue/showOnePiece.php');
                                    break;
                                
            case 'detailsCP' 	:   $idP= $_REQUEST['idP'];
                                    $contacts = Passerelle::getLesComedienPiece($idP);
                                    $comedien =   Passerelle::getOnePiece($idP);
                                    require('vue/showComedienPiece.php');      
                                    break;  
                                
            case 'detailsT' 	:   $idP= $_REQUEST['idT'];
                                    $contacts = Passerelle::getLesTheatres($idT);
                                    $comedien =   Passerelle::getOneTheatre($idT);
                                    require('vue/showTheatre.php'); 
                                    break;                      
                                
            
             case 'updateC' 	:   $idC = $_REQUEST['idC'];
                                    $nomC = $_REQUEST['nomC'];
                                    $prenomC = $_REQUEST['prenomC'];  
                                    $naissanceC = $_REQUEST['naissanceC'];
                                    $ageC = $_REQUEST['ageC'];
                                    $nationaliteC = $_REQUEST['nationaliteC'];
                                    Passerelle::updateComedien($idC,$nomC,$prenomC,$naissanceC,$ageC,$nationaliteC); 
                                    $contacts = Passerelle::getLesComediens();
                                    require('vue/showComedien.php');
                                    break; 
           case 'updateP' 	:   
                                    $nomP = $_REQUEST['nomP'];
                                    $dateP = $_REQUEST['dateP'];
                                    $realisateurP = $_REQUEST ['realisateurP'];
                                    Passerelle::updatePiece($nomP,$dateP,$realisateurP); 
                                    $contacts = Passerelle::getPiece();
                                    require ('vue/ShowPiece.php');
                                    break;  
                                
                                
            case 'updateT' 	:   
                                    $nomT = $_REQUEST['nomT'];
                                    $datet = $_REQUEST['dateT'];
                                    $realisateurP = $_REQUEST ['realisateurP'];
                                    Passerelle::updatePiece($nomP,$dateP,$realisateurP); 
                                    $contacts = Passerelle::getPiece();
                                    require ('vue/ShowPiece.php');
                                    break;                     
                                
            case 'deleteC'	:   $idC = $_REQUEST['idC'];
                                    Passerelle::deleteComedien($idC); 
                                    $contacts = Passerelle::getLesComediens();
                                    require('vue/showComedien.php');
                                    break;
            
            case 'deleteP'	:   $idP = $_REQUEST['idP'];
                                    Passerelle::deletePiece($idP); 
                                    $contacts = Passerelle::getPiece();
                                    require('vue/showPiece.php');
                                    break;                               
                     
            case 'deleteCP'	:   
                                    $idCP = $_REQUEST['idCP'];
                                    Passerelle::deleteComedienPiece($idCP);  
                                    break;
            
            case 'deleteT'	:   
                                    $idT = $_REQUEST['idT'];
                                    Passerelle::deleteTheatre($idT);  
                                    break;                    
                              
            default             :   
                                    require('vue/Choix.php');
                break;
    }
    ?>
    </div>
</div>
</body>
</html>



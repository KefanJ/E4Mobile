<?php
require('modele/dbParametres.php');
require('modele/Comedien.php');
require('modele/Piece.php');
require ('modele/ComedienPiece.php');
require('modele/Passerelle.php');
require ('modele/Theatre.php');
require ('modele/TheatrePiece.php');
require('vue/header.php');

?>
<div data-role="page">
    <div data-role="header" data-theme="e">
        <h1>Sunny Art</h1>
         <a href="http://localhost/E4Mobile/public_html/index.php" data-theme="b" data-icon="home" data-ajax='false'>Home</a>
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
                                   
            case 'addTP'      : 
                
                                    $piece = Passerelle::getPiece();
                                    require ('vue/addTheatrePiece.php');
                                    
                                    break;
           
            case 'insertC' 	:   
                                    $nomC = $_REQUEST['nomC'];
                                    $prenomC = $_REQUEST['prenomC'];
                                    $naissanceC = $_REQUEST ['naissanceC'];
                                 
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
                                    $rueT = $_REQUEST['rueT'];
                                    $villeT = $_REQUEST['villeT'];
                                    $codePT = $_REQUEST['codePT'];
                                    Passerelle::addTheatre($nomT,$rueT,$villeT,$codePT); 
                                    $contacts = Passerelle::getTheatre();
                                    require ('vue/showTheatre.php');
                                    break;  
                                
                                
                                
            case 'insertCP'     : 
                                    $idCom = $_REQUEST['idCom'];
                                    $idPie = $_REQUEST['idPie'];
                                    $comedien = Passerelle::getLesComediens();
                                    $idP = $_REQUEST['idP'];
                                    $contact = Passerelle::getOnePiece($idP);
                                    Passerelle::addComedienPiece($idCom,$idPie);
                                    require ('vue/showComedienPiece.php');
                                    break;
            
             case 'insertTP'     :  
                                    $idThe = $_REQUEST['idThe'] ;
                                    $idPiece = $_REQUEST['idCom'];
                                    $piece = Passerelle::getPiece();
                                    $idP = $_REQUEST['idP'];
                                    $contact = Passerelle::getOnePiece($idP);
                                    Passerelle::addTheatrePiece($idThe,$idPiece);
                                    
                                    require ('vue/showTheatrePiece.php');
                                    break;                    
                                
                                
            case 'detailsC' 	:   $idC = $_REQUEST['idC'];
                                    $contact = Passerelle::getOneComedien($idC);
                                    require('vue/showOneComedien.php');
                                    break;
                                
                                
            case 'detailsP' 	:   $idP = $_REQUEST['idP'];
                                    $contact = Passerelle::getOnePiece($idP);
                                    require('vue/showOnePiece.php');
                                    break;
                                
            case 'detailsCP' 	:   
                                    $idP = $_REQUEST['idP'];
                                    $contacts = Passerelle::getLesComedienPiece($idP);
                                    $comedien = Passerelle::getOnePiece($idP);
                                    require('vue/showComedienPiece.php');       
                                    break;  
                                
            case 'detailsT' 	:   $idT= $_REQUEST['idT'];
                                    $theatre =  Passerelle::getOneTheatre($idT);
                                    require('vue/showOneTheatre.php'); 
                                    break;                      
            
                                                     
            case 'detailsTP' 	:   
                                    $idPiece = $_REQUEST['idPiece'];
                                    $contacts = Passerelle::getLesTheatresPiece($idPiece);
                                    $theatre = Passerelle::getOnePiece($idPiece);
                                    require('vue/showTheatrePiece.php');      
                                    break; 
            
             case 'updateC' 	:   $idC = $_REQUEST['idC'];
                                    $nomC = $_REQUEST['nomC'];
                                    $prenomC = $_REQUEST['prenomC'];  
                                    $naissanceC = $_REQUEST['naissanceC'];
                                    $nationaliteC = $_REQUEST['nationaliteC'];
                                    Passerelle::updateComedien($idC,$nomC,$prenomC,$naissanceC,$nationaliteC); 
                                    $contacts = Passerelle::getLesComediens();
                                    require('vue/showComedien.php');
                                    break; 
           case 'updateP' 	:   
                                    $idP = $_REQUEST['idP'];
                                    $nomP = $_REQUEST['nomP'];
                                    $dateP = $_REQUEST['dateP'];
                                    $realisateurP = $_REQUEST ['realisateurP'];
                                    Passerelle::updatePiece($idP,$nomP,$dateP,$realisateurP); 
                                    $contacts = Passerelle::getPiece();
                                    require ('vue/ShowPiece.php');
                                    break;  
                                
                                
                                
                                
            case 'updateT' 	:   
                                    $idT = $_REQUEST['idT'];
                                    $nomT = $_REQUEST['nomT'];
                                    $rueT = $_REQUEST['rueT'];
                                    $villeT = $_REQUEST['villeT'];
                                    $codePT = $_REQUEST['codePT'];
                                    Passerelle::updateTheatre($idT,$nomT,$rueT,$villeT,$codePT); 
                                    $contacts = Passerelle::getLesTheatres();
                                    require ('vue/ShowTheatre.php');
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
                                    $idCom  = $_REQUEST['idCom'];
                                    Passerelle::deleteComedienPiece($idCom); 
                                    require ('vue/showComedienPiece.php');
                                    break;
            
            case 'deleteT'	:   
                                    $idT = $_REQUEST['idT'];
                                    Passerelle::deleteTheatre($idT);  
                                    break;
                                
                                
               case 'deleteTP'	:   
                                    $idPiece  = $_REQUEST['idPiece'];
                                    Passerelle::deleteTheatrePiece($idPiece); 
                                    require ('vue/showTheatrePiece.php');
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



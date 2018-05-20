<?php

class Passerelle {

    static private $mysql_link;

    static function connexion($mysql_hote, $mysql_db, $mysql_user, $mysql_pass) {
        Passerelle::$mysql_link = new PDO("mysql:host=$mysql_hote;dbname=$mysql_db", "$mysql_user", "$mysql_pass");
    }

    static function addComedien($nomC, $prenomC, $naissanceC, $nationaliteC) {
        $sql = "insert into comedien(c_id, c_nom,c_prenom ,c_datenaiss,c_nation  ) values (NULL,'$nomC','$prenomC','$naissanceC','$nationaliteC')";
        $result = Passerelle::$mysql_link->exec($sql);
        if ($result == 1) {
            return "SUCCESS";
        } else {
            return "ERREUR";
        }
    }

    static function addPiece($nomP, $dateP, $realisateurP) {
        $sql = "insert piece(p_id, p_nom, p_creation, p_realisateur	) values (NULL,'$nomP','$dateP','$realisateurP')";
        $result = Passerelle::$mysql_link->exec($sql);
        if ($result == 1) {
            return "SUCCESS";
        } else {
            return "ERREUR";
        }
    }

    static function addComedienPiece($idCom, $idPie) {
        $sql = "insert into comedienpiece(cp_id, id_c, id_p) values (NULL,'$idCom','$idPie')";
        $result = Passerelle::$mysql_link->exec($sql);
        if ($result == 1) {
            return "SUCCESS";
        } else {
            return "ERREUR";
        }
    }

    static function addTheatre($nomT, $rueT, $villeT, $codePT) {
        $sql = "insert into theatre(t_id, t_nom, t_rue,t_ville,t_codeP) values (NULL,'$nomT','$rueT','$villeT','$codePT')";
        $result = Passerelle::$mysql_link->exec($sql);
        if ($result == 1) {
            return "SUCCESS";
        } else {
            return "ERREUR";
        }
    }

    static function getOneComedien($idC) {
        $comedien = null;
        if ($idC != -1) {
            $sql = "select * from comedien where c_id=" . $idC;
            $result = Passerelle::$mysql_link->query($sql);
            if ($result) {
                $row = $result->fetch();
                $idC = $row['c_id'];
                $nomC = $row['c_nom'];
                $prenomC = $row['c_prenom'];
                $naissanceC = $row ['c_datenaiss'];
                $nationaliteC = $row['c_nation'];


                $comedien = new Comedien($idC, $nomC, $prenomC, $naissanceC, $nationaliteC);
            }
        }
        return $comedien;
    }

    static function getLesComediens() {
        $comedien = array();
        $sql = "SELECT * FROM comedien order by c_id DESC";
        $result = Passerelle::$mysql_link->query($sql);
        while ($row = $result->fetch()) {
            $idC = $row['c_id'];
            $nomC = $row['c_nom'];
            $prenomC = $row['c_prenom'];
            $naissanceC = $row ['c_datenaiss'];
            $nationaliteC = $row['c_nation'];

            $comedien = new Comedien($idC, $nomC, $prenomC, $naissanceC, $nationaliteC);

            $comediens[] = $comedien;
        }

        /* @var $joueurs type */
        return $comediens;
    }

    static function getPiece() {
        $piece = array();

        $sql = "select * from piece   ";
        $result = Passerelle::$mysql_link->query($sql);

        while ($row = $result->fetch()) {
            $idP = $row['p_id'];
            $nomP = $row['p_nom'];
            $dateP = $row['p_creation'];
            $realisateurP = $row['p_realisateur'];


            $piece = new Piece($idP, $nomP, $dateP, $realisateurP);
            $pieces[] = $piece;
        }
        if ($idP == NULL) {
            echo '<script>alert("aucune piece");</script>';
        }
        return $pieces;
    }

    static function getOnePiece($idP) {
        $piece = null;
        if ($idP != -1) {
            $sql = "select * from piece where p_id=" . $idP;

            $result = Passerelle::$mysql_link->query($sql);
            if ($result) {
                $row = $result->fetch();
                $idP = $row['p_id'];
                $nomP = $row['p_nom'];
                $dateP = $row['p_creation'];
                $realisateurP = $row['p_realisateur'];


                $piece = new Piece($idP, $nomP, $dateP, $realisateurP);
            }
        } else {
            echo '<script>alert("aucune piece");</script>';
        }

        return $piece;
    }

    static function getLesComedienPiece($idP) {

        $comedienPiece = array();

        $sql = "SELECT * FROM comedienpiece WHERE id_p= " . $idP;

        $result = Passerelle::$mysql_link->query($sql);
//                    var_dump($result);
        if ($result->rowCount() > 0) {

            while ($row = $result->fetch()) {

                $idCP = $row['cp_id'];
                $idCom = $row['id_c'];
                $idPie = $row['id_p'];

                //                            var_dump($idact);
                $comedienPiece = new ComedienPiece($idCP, $idCom, $idPie);
                $comedienPieces[] = $comedienPiece;
            }

            return $comedienPieces;
        } else {
            echo '<script>alert("aucun acteur");</script>';
        }
    }

//    static function getLesComedienPiece2($idCP) {
//
//        $comedienPiece = array();
//
//        $sql = "SELECT * FROM comedienpiece WHERE cp_id= " . $idCP;
//
//        $result = Passerelle::$mysql_link->query($sql);
////                    var_dump($sql);
//        while ($row = $result->fetch()) {
//
//            $idCP = $row['cp_id'];
//            $idPie = $row['id_p'];
//            $idCom = $row['id_c'];
//            $nomC = $row['c_nom'];
//            $prenomC = $row['c_prenom'];
//            var_dump($nomC);
//            $comedienPiece = new ComedienPiece($idCP, $idPie, $idCom, $nomC, $prenomC);
//            $comedienPieces[] = $comedienPiece;
//        }

//        return $comedienPieces;
//    }

    static function getLesTheatres() {
        $theatre = array();
        $sql = "SELECT * FROM theatre order by t_id DESC";
        $result = Passerelle::$mysql_link->query($sql);
        while ($row = $result->fetch()) {
            $idT = $row['t_id'];
            $nomT = $row['t_nom'];
            $rueT = $row['t_rue'];
            $villeT = $row ['t_ville'];
            $codeT = $row ['t_codeP'];

            $theatre = new Theatre($idT, $nomT, $rueT, $villeT, $codeT);

            $theatres[] = $theatre;
        }

        /* @var $joueurs type */
        return $theatres;
    }

    static function getOneTheatre($idT) {
        $theatre = null;
        if ($idT != -1) {
            $sql = "select * from theatre where t_id=". $idT;

            $result = Passerelle::$mysql_link->query($sql);
            if ($result) {
                $row = $result->fetch();
                $idT = $row['t_id'];
                $nomT = $row['t_nom'];
                $rueT = $row['t_rue'];
                $villeT = $row ['t_ville'];
                $codePT = $row ['t_codeP'];


                $theatre = new Theatre($idT, $nomT, $rueT, $villeT, $codePT);
            }
        } 
        else {
            echo '<script>alert("aucun theatre");</script>';
        }
        return $theatre;
    }

    static function updateTheatre($idT, $nomT, $rueT, $villeT, $codePT) {
        $sql = "UPDATE `theatre` SET  `t_nom`='" . $nomT . "', `t_rue` ='$rueT',t_ville='$villeT'"
                . ",t_code ='$codePT'  WHERE t_id=" . $idT;

        $result = Passerelle::$mysql_link->exec($sql);
    }

    static function updateComedien($idC, $nomC, $prenomC, $naissanceC, $nationaliteC) {
        $sql = "UPDATE `comedien` SET  `c_nom`='" . $nomC . "', `c_prenom` ='$prenomC',c_datenaiss='$naissanceC'"
                . ",c_nation='$nationaliteC'  WHERE c_id=" . $idC;

        $result = Passerelle::$mysql_link->exec($sql);
    }

    static function updatePiece($idP, $nomP, $dateP, $realisateurP) {
        $sql = "UPDATE `piece` SET  `p_nom`='" . $nomP . "', `p_creation` ='$dateP',p_realisateur='$realisateurP'"
                . "  WHERE p_id=" . $idP;

        $result = Passerelle::$mysql_link->exec($sql);
    }

    static function deleteComedien($idC) {
        $sql = "DELETE FROM `comedien` WHERE c_id=" . $idC;
        $result = Passerelle::$mysql_link->exec($sql);
    }

    static function deletePiece($idP) {
        $sql = "DELETE FROM `piece` WHERE p_id=" . $idP;
        $result = Passerelle::$mysql_link->exec($sql);
    }

    static function deleteComedienPiece($idCom) {
        $sql = "DELETE FROM `comedienpiece` WHERE cp_id=" . $idCom;

        $result = Passerelle::$mysql_link->exec($sql);
    }

    static function deleteTheatre($idT) {
        $sql = "DELETE FROM `theatre` WHERE t_id=" . $idT;
        $result = Passerelle::$mysql_link->exec($sql);
    }

}
?>


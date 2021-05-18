<?php
include("vues/v_sommaire_c.php");

$idComptable = $_SESSION['idVisiteur'];

$action = $_REQUEST['action'];



switch ($action) {
    case 'listeVisiteurs':
        
        $listeVisiteur = $pdo->afficherVisiteurs($idComptable);
        include("vues/listeVisiteurs.php");
        break;
    
    default:
        # code...
        break;
}

?>
<?php
include("vues/v_GestionnaireSommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
       
        case 'ajout':{
        if(isset($_POST['id'])==""||isset($_POST['nom'])==""|| isset($_POST['prenom'])==""||!is_numeric($_POST['cp'])||!$_POST['cp'] > 0 || isset($_POST['ville'])=="" ){
		include("vues/formConnexion.php");
	}else{
            $id = $_REQUEST['id'];
            $nom = $_REQUEST['nom'];
            $prenom = $_REQUEST['prenom'];
            $login = SUBSTR($prenom,1,1);
            $mdp = getMdp();
            $dateEmbauche="curdate()";
            $adresse = $_REQUEST['adresse'];
            $cp = $_REQUEST['cp'];
            $ville = $_REQUEST['ville'];
            $pdo->ajoutVisiteur($id,$nom,$prenom,$login,$mdp,$adresse,$cp,$ville,$dateEmbauche);
            echo $login;
            echo $mdp;
            break;
        }
       }
       case'modifInfo':{
           include("vues/formulaireModifier.php");
           break;
       }
            
        /*case 'modifier':{
            $lesProduits=$pdo->getVisiteur();
            include("vues/v_ListeVisiteur.php");
            break;
        } */       
}
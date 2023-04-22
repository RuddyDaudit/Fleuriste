<!-- Cover du menu du gestionnaire-->﻿    
<!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				  Gestionnaire :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
           <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
           <li class="smenu">
               <a href="index.php?uc=etatFrais&action=frais" title="Afficher les frais au forfait"> Frais</a>
           </li>
           <li class="smenu">
               <a href="index.php?uc=etatFrais&action=recap" title="Récaitulatif des fiches de frais"> Récapitulatif des fiches</a>
           </li>
            <li class="smenu">
               <a href="index.php?uc=visiteur&action=ajout" title="Ajouter un visiteur">Ajouter un visiteur</a>
           </li>      
            <li class="smenu">
              <a href="index.php?uc=visiteur&action=modifier" title="Liste des visiteurs">Les visiteurs</a>
           </li>
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </div>
    
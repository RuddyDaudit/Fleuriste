<div id="contenu">    
     <h2>Modifier son mot de passe :</h2>
<p>    
<form action="index.php?uc=visiteur&action=Upassword&id&mdp=<?php echo $_GET['id']?>" method ="post">
<table border="1" align="center">
  <tr> 
  <td>Mdp : </td><td><input type="text" name="mdp" size="8"> </td></tr>
  <td> MDP2: </td><td><input type="text" name="mdpTwo" size="8"> </td></tr>
  </tr>
 </table>
    <td><input type="submit" name="Submit"  value="Envoyer"></td>
</form>
</p>
<br><br>
</div>
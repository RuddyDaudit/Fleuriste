<div id="contenu">    
     <h2>Frais De Forfatisation </h2>
     <table class=listeLegere">
        <tr>
<th>Id</th>
<th>Libellé</th>
<th>Montant</th>
</tr>
<?php
foreach($lesFrais as $st)
{
    $id=$st['id'];
    $libelle=$st['libelle'];
    $montant=$st['montant'];
?>
<tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $libelle ?></td>
    <td><?php echo $montant ?></td>
</tr>
  <?php
}
?>

    </table>
</div>
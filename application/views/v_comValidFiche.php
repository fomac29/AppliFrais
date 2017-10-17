<?php
$this->load->helper('url');
?>
<div id="contenu">
	<h2>Liste des fiches de frais à valider</h2>
	 	
	<?php if(!empty($notify)) echo '<p id="notify" >'.$notify.'</p>';?>
	 
	<table class="listeLegere">
		<thead>
			<tr>
				<th >Visiteur</th>
				<th >Mois</th>
				<th >Etat</th>  
				<th >Montant</th>  
				<th >Date modif.</th>  
				<th  colspan="4">Actions</th>              
			</tr>
		</thead>
		<tbody>
          
		<?php    
			foreach( $mesFiches as $uneFiche) 
			{
				$modLink = '';
				$validLink = '';
				$refuLink = '';
				
				if ($uneFiche['id'] == 'CR') {
					$modLink = anchor('c_comptable/modFiche/'.$uneFiche['mois'], 'modifier',  'title="Modifier la fiche"');
					$validLink = anchor('c_comptable/validFiche/'.$uneFiche['mois'], 'valider',  'title="Valider la fiche"  onclick="return confirm(\'Voulez-vous vraiment valider cette fiche ?\');"');
					$refuLink = anchor('c_comptable/refuFiche/'.$uneFiche['mois'], 'refuser',  'title="Refuser la fiche"  onclick="return confirm(\'Voulez-vous vraiment refuser cette fiche ?\');"');
				}
				
				echo 
				'<tr>
					<td class = "libelle">'.$uneFiche['nomVisiteur'].' </td>;
					<td class="date">'.anchor('c_comptable/voirFiche/'.$uneFiche['mois'], $uneFiche['mois'],  'title="Consulter la fiche"').'</td>
					<td class="libelle">'.$uneFiche['libelle'].'</td>
					<td class="montant">'.$uneFiche['montantValide'].'</td>
					<td class="date">'.$uneFiche['dateModif'].'</td>
					<td class="action">'.$modLink.'</td>
					<td class="action">'.$validLink.'</td>
					<td class= "action">'.$refuLink.'</td>
				</tr>';
			}
		?>	  
		</tbody>
    </table>

</div>

<?php
$this->load->helper('url');
$v_path = base_url('application/views');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

	<head>
		<title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="<?php echo $v_path.'/templates/css/styles.css'?>" rel="stylesheet" type="text/css" />

		<script type = "texte/JavaScript">
			function hideNotify() {
				document.getElementById("notify").style.display = "none";
			}
		</script>
		
	</head>

	<body onload="setTimeout(hideNotify,7000);">
		<div id="page">
			<div id="entete">
				<img src="<?php echo $v_path.'/templates/images/logo.jpg'?>" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />
				<h1>Gestion des frais de déplacements</h1>
			</div>
			
			<!-- Division pour le menu -->
			<div id="menuGauche">
				<div id="infosUtil">
					<h2></h2>
				</div>  
				
				<ul id="menuList">
					<li>
						Comptable :
					</li>
					<li>
						<?php echo $this->session->userdata('prenom')."  ".$this->session->userdata('nom');  ?>
						<br></br>
					</li>
					
					<li class="smenu">
						<?php echo anchor('c_comptable/', 'Accueil', 'title="Page d\'accueil"'); ?>
					<br></br>
					</li>
					<li class="smenu">
						<?php echo anchor('c_comptable/mesFiches', 'Valider fiches de frais', 'title="validation des fiches de frais"'); ?>
					<br></br>
					</li>
					
					<li class="smenu">
						<?php echo anchor('c_comptable/deconnecter', 'Se déconnecter', 'title="Déconnexion"'); ?>
					</li>
				</ul>
				
			</div>

			<?php echo $body; ?>

			<div id="pied">
				<br></br>
			</div>

		</div>    

	</body>
</html>


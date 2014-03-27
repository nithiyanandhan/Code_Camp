
<!DOCTYPE html>

<html lang="fr">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../../css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="../../css/contact.css">
<link rel="stylesheet" type="text/css" href="../../css/gestion.css">
<link href='http://fonts.googleapis.com/css?family=Signika+Negative' rel='stylesheet' type='text/css'>
<body>
	<header>
		<div id="logotruc">

			<a href="http://www.prep-etna.fr/"><div id="prep_logo">
				<img src='../../css/images/prep_logo.png'>
			</div></a>
			<a href="index.php"><div id= "logocode">
				<img src='../../css/images/logocode.png'>
			</div></a>

			<div id="social">
				<a href="https://www.facebook.com/ecole.etna"><div class="fb"></div></a>
				<a href="https://twitter.com/etnaalternance"><div class="twitter"></div></a>
				<a href="https://plus.google.com/u/0/+Etna-alternanceNet/posts"><div class="google"></div></a>
			</div>


			<div id='cssmenu'>
				<ul>
					<li ><a href='index.php'><span>ACCUEIL</span></a></li>
					<li><a href='projet.php'><span>PROJETS</span></a></li>
					<li><a href='faq.php'><span>FAQ</span></a></li>
					<li><a href='contact.php'><span>CONTACT</span></a></li>
					<li  class='active'><a href='admin.php'><span>ADMIN</span></a></li>
					<li><a href='../../controleur/deconnexion.php'><span>DECONNEXION</span></a></li>
				</ul>
			</div>
		</div>
	</header>
	<div id="page">	
		<div id="connexion">
			<h1>Gestion Compte</h1>
			<div id="gestion">
					<?php
					$link = new mysqli('localhost','root','}XL4N22r', 'code_camp');
					$req="SELECT * FROM identification ORDER BY id_membre DESC";
					
					if($result = mysqli_query($link ,$req))
					{?>
				<h2><?php echo "Nom Entreprise : "."\n"."\n";?></h2>
				<?php
						while($row = mysqli_fetch_assoc($result))
							{ ?>
						
						<p><a href = "sup.php?nom_entreprise=<?php echo ($row['id_membre']);?>"><?php echo ($row['nom_entreprise']);?></a></p>

						<?php
					}
				}
				?>
			</div>
		</div>

		<div id="inscription">
			<h1>Gestion Post</h1>
				<div id="gestion">
					<a target="_blank"href=""><img style="border:0px;" src="http://images.supportduweb.com/buttons.php?frm=1&btn_type=38&txt=Valider%20Un%20article" onmouseover="this.src='http://images.supportduweb.com/buttons.php?frm=2&btn_type=38&txt=Valider%20Un%20article'" onmouseout="this.src='http://images.supportduweb.com/buttons.php?frm=1&btn_type=38&txt=Valider%20Un%20article';" alt="Valider%20Un%20article" /></a><script type="text/javascript">img=new Image();img.src= "http://images.supportduweb.com/buttons.php?frm=2&btn_type=38&txt=Valider%20Un%20article";</script>

					<a target="_blank"href=""><img style="border:0px;" src="http://images.supportduweb.com/buttons.php?frm=1&btn_type=38&txt=Modifier%20Un%20article" onmouseover="this.src='http://images.supportduweb.com/buttons.php?frm=2&btn_type=38&txt=Modifier%20Un%20article'" onmouseout="this.src='http://images.supportduweb.com/buttons.php?frm=1&btn_type=38&txt=Modifier%20Un%20article';" alt="Modifier%20Un%20article" /></a><script type="text/javascript">img=new Image();img.src= "http://images.supportduweb.com/buttons.php?frm=2&btn_type=38&txt=Modifier%20Un%20article";</script>

					<a target="_blank"href=""><img style="border:0px;" src="http://images.supportduweb.com/buttons.php?frm=1&btn_type=38&txt=Supprimer%20Un%20article" onmouseover="this.src='http://images.supportduweb.com/buttons.php?frm=2&btn_type=38&txt=Supprimer%20Un%20article'" onmouseout="this.src='http://images.supportduweb.com/buttons.php?frm=1&btn_type=38&txt=Supprimer%20Un%20article';" alt="Supprimer%20Un%20article" /></a><script type="text/javascript">img=new Image();img.src= "http://images.supportduweb.com/buttons.php?frm=2&btn_type=38&txt=Supprimer%20Un%20article";</script>
				</div>
			</div>
		</div>

		<footer>
			<div id="footer">
				<div id="banner"></div>
				<p><br/>Établissement d’enseignement supérieur technique privé. Numéro d’enregistrement de la Prep’ETNA auprès de la préfecture W941008185 <br/>Cette école est membre de IONIS Education Group comme :<br/>
					ISG, ISEG Business & Finance School, ISEG Marketing & Communication School, ISTH, ICS Bégué, ISEFAC Bachelor, Concours Advance, ESME<br/> Sudria, IPSA, Epitech, Sup'Biotech, e-artsup, Ionis-STM, SUP'Internet, ISEFAC Alternance, ETNA, IONIS Tutoring, Math Secours, IONIS Executive <br/>Learning,</p>
			</div>
		</footer>
	</div>
	</body>
</html>


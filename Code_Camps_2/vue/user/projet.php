<!DOCTYPE html>
<html>
	<head>
		<title>ETNA Code Camps</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link type='text/css' href='../../css/contact.css' rel='stylesheet' media='screen' />
		<link type='text/css' href='../../css/stylesheet.css' rel='stylesheet' media='screen' />
		<!-- Page styles -->
		<link type='text/css' href='../../css/demo.css' rel='stylesheet' media='screen' />

		<!-- Contact Form CSS files -->
		<link type='text/css' href='../../css/basic.css' rel='stylesheet' media='screen' />

	</head>
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
						<li class='active'><a href='projet.php'><span>PROJETS</span></a></li>
						<li><a href='faq.php'><span>FAQ</span></a></li>
						<li><a href='contact.php'><span>CONTACT</span></a></li>
               			<li ><a href='depot_defi.php'><span>DEPOT</span></a></li>
						<li><a href='../../controleur/deconnexion.php'><span>DECONNEXION</span></a></li>
					</ul>
				</div>
			</div>
		</header>
			<div id='container'>
<?php		
			               require_once('../controleur/connexionbdd.php');
             $link = new mysqli('localhost','root','}XL4N22r', 'code_camp');
             $req="SELECT * FROM article ORDER BY id_article DESC";
             if($result = mysqli_query($link ,$req))
             {
             while($row = mysqli_fetch_assoc($result))
             { ?>

        <p id = 'title'><?php echo ($row['theme']);?></p>
        <p id = 'sujet'> <?php echo ($row['entreprise']);?><br/>
         <?php echo ($row['titre']);?><br/>
         <?php echo ($row['defi']);?></p>

         <?php
            }
            }
            ?>


				</div>
				
				<footer>
			<div id="footer">
				<div id="banner"></div>
				<p><br/>Établissement d’enseignement supérieur technique privé. Numéro d’enregistrement de la Prep’ETNA auprès de la préfecture W941008185 <br/>Cette école est membre de IONIS Education Group comme :<br/>
				ISG, ISEG Business & Finance School, ISEG Marketing & Communication School, ISTH, ICS Bégué, ISEFAC Bachelor, Concours Advance, ESME<br/> Sudria, IPSA, Epitech, Sup'Biotech, e-artsup, Ionis-STM, SUP'Internet, ISEFAC Alternance, ETNA, IONIS Tutoring, Math Secours, IONIS Executive <br/>Learning,</p>
			</div>
		</footer>
	</body>
</html>

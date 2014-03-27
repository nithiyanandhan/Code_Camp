<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
	<link href='http://fonts.googleapis.com/css?family=Signika+Negative' rel='stylesheet' type='text/css'>
</head>
	<body>
		<header>
			<div id="logotruc">
				<a href="http://www.prep-etna.fr/"><div id="prep_logo">
					<img src='../css/images/prep_logo.png'>
				</div></a>
				<a href="index.php"><div id= "logocode">
					<img src='../css/images/logocode.png'>
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
   						<li  class='active'><a href='subs.php'><span>CONNEXION / INSCRIPTION</span></a></li>
					</ul>
			</div>
		</div>
		</header>
	<div id="page">
	<div id="connexion">
		<h1>CONNECTEZ-VOUS !</h1>	
		<form name="connex" action="../controleur/connex.php" method="POST">
			<label for="pseudo">pseudo :</label>
			<input type="text" name="pseudo" id="pseudo" size="20" />
				<br/>
			<label for="pwd">Mot de passe :</label>
			<input type="password" name="password" id="password" size="20" />
				<br/>
				<br/>
			<input type="submit" value="se connecter" style="cursor:pointer; " /> 
		</form>
	</div>

	<div id="inscription">
		<h1>Ou INSCRIVEZ-VOUS !</h1>
		<form name="subs" action="../controleur/test_inscription.php" method="POST">
			<label for="name">Nom de l'entreprise :</label>
			<input type="text" name="nom_entreprise" id="nom_entreprise" />
				</br>
			<label for="mail">Mail :</label>
			<input type="email" name="mail" id="mail" />
				</br>
			<label for="login">Choisir un login :</label>
			<input type="text" name="pseudo" id="pseudo" />
				</br>
			<label for="pwd1">Choisir mot de passe :</label>
			<input type="password" name="password" id="password" />
				</br>
			<label for="pwd2">Confirmer :</label>
			<input type="password" name="pwd2" id="pwd2"/>
				<br/>
			<label for="login">Adresse :</label>
			<input type="text" name="adresse" id="adresse" />	
				<br/>
			<input type="submit" value="S'inscrire" style="cursor:pointer;"/>
		</form>
	</div>
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


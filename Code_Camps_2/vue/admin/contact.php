<!DOCTYPE HTML>

<html lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../../css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="../../css/contact.css">
	<link href='http://fonts.googleapis.com/css?family=Signika+Negative' rel='stylesheet' type='text/css'>
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
               		<li><a href='projet.php'><span>PROJETS</span></a></li>
               		<li><a href='faq.php'><span>FAQ</span></a></li>
               		<li class='active'><a href='contact.php'><span>CONTACT</span></a></li>
               		<li><a href='admin.php'><span>ADMIN</span></a></li>
               		<li><a href='../../controleur/deconnexion.php'><span>DECONNEXION</span></a></li>
				</ul>
			</div>
		</div>
	</header>

	<div id="block">
		<div id="blocktitre">
			<h1>CONTACT</h1>
		</div>

		<form action="../../controleur/send_email.php" method="post"><br/><br/>
			<p>
				<label for="civilite">Civilit&eacute :</label>
				<select id="civilite" name="civilite">
					<option value="mr" selected="selected">Monsieur</option>
					<option value="mme">Madame</option>
					<option value="mlle">Mademoiselle</option>
				</select><br/><br/>
		
				<label for="nom">Nom:</label>
				<input type="text" id="nom" name="nom" size="20"/><br/><br/>  
				
				<label for="nom">Pr&eacutenom :</label>
				<input type="text" id="prenom" name="prenom" size="20"/><br/><br/>  
	
				<label for="email">E-mail :</label>  
				<input type="text" id="email" name="email" size="20"/><br/><br/>  
	 
				<label for="sujet">Sujet :</label>  
				<input class='active' type="text" id="sujet" name="sujet" size="20"/><br/><br/>  
			
				<label for="message">Message :</label>  
				<textarea id="message" name="message" cols="30" rows="4"></textarea><br/><br/>  
			</p>
				<input type="submit" value="envoyer" style="cursor:pointer; " /> 
		</form>
		<div id="detail" >
			<p>Le campus de l'ETNA se trouve au 15, rue Maurice Grandcoing, 94200 Ivry-sur-Seine,</p><br/>
			<p> Accesible par les transports :
   			<p>M&eacutetro 7, arr&ecirct Mairie d'Ivry,</p>
    		<p>RER C, arr&ecirct Ivry-sur-Seine,</p>
    		<p>Bus 125 et bus 323, arr&ecirct Moli&egravere</p>
			
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
<!DOCTYPE HTML>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../../css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="../../css/contact.css">
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
               <li class='active'><a href='depot_defi.php'><span>DEPOT</span></a></li>
               <li ><a href='../../controleur/deconnexion.php'><span>DECONNEXION</span></a></li>
           </ul>
       </div>
   </div>
</header>

<div id="block">
    <div id="blocktitre">
        <h1>DEFI CODE CAMPS</h1>
    </div>
    <form name="depot" action="../../controleur/post.php" method="POST">
        <p>
          <label for="tuteur">Nom et prénom du tuteur:</label>
          <input type="text" name="tuteur" id="tuteur" required="required" placeholder="Le tuteur du défi" />

          <br />
          <br />
          <label for="entreprise">Entreprise représentée :</label>
          <input type="text" name="entreprise" id="entreprise" required="required" placeholder="Entreprise représentée"/>

          <br />
          <br />
          <label for="entreprise">Titre du Defi :</label>
          <input type="text" name="titre" id="titre" required="required" placeholder="Titre du Defi"/>

          <br />
          <br />
          <label>Quel Code Camp thématique correspond à votre choix ? :</label>
            <select name = "theme" >
                <option selected="selected">Développement Windows phone (du 21 au 27 janvier)</option>
                <option>Technologies Apple COCOA (du 18 au 24 février)</option>
                <option>Technologies LINUX (du 11 au 17 mars)</option>
                <option>CMS (du 1er au 7 Avril)</option>
                <option>Technologies Microsoft (du 22 au 28 Avril)</option>
                <option>Système de gestion de base de données (du 29 au 5 mai)</option>
                <option>Startup Week (du 6 au 11 mai)</option>
            </select>


        <br />
        <br />
        <label for="prix">Prix du Defi :</label>
        <input type="text" name="prix" id="prix" placeholder="Bons d'achats ..."/>

        <br />
        <br />
        <label for="message">Description Defi :</label>  
        <textarea id="message" name="message" cols="30" rows="4"></textarea><br/><br/>  
        <input type="submit" value="deposer" style="cursor:pointer; "/>     
    </p>        
</form>
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

<head><link rel="stylesheet" type="text/css" href="style.css"</head>
<?php
session_start();
		
	echo	"<img src='images/batman.jpg' alt='Batman'></br><a href='jeux.php?jeu=jeu1'>Batman</a></br>";
	echo	"<img src='images/castlevania.jpg' alt='Castlevania'></br><a href='jeux.php?jeu=jeu2'>Castlevania</a></br>";
	echo	"<img src='images/fifa.jpg' alt='Fifa'></br><a href='jeux.php?jeu=jeu3'>Fifa</a></br>";
	echo    "<img src='images/gtav.jpg' alt='Gtav'></br><a href='jeux.php?jeu=jeu4'>Gtav</a></br>";
	echo    "<img src='images/last of us.jpg' alt='Last of us'></br><a href='jeux.php?jeu=jeu5'>Last of us</a></br>";
	echo    "<img src='images/marvel.jpg' alt='Marvel'></br><a href='jeux.php?jeu=jeu6'>Marvel</a></br>";	  
    echo	"<img src='images/pes.jpg' alt='Pes'></br><a href='jeux.php?jeu=jeu7'>Pes</a></br>";
    echo	"<img src='images/rayman.jpg' alt='Rayman'></br><a href='jeux.php?jeu=jeu8'>Rayman</a></br>";
    echo	"<img src='images/tomb raider.jpg' alt='Tomb raider'></br><a href='jeux.php?jeu=jeu9'>Tomb raider</a></br>";
    echo	"<img src='images/uncharted.jpg' alt='Uncharted'></br><a href='jeux.php?jeu=jeu10'>Uncharted</a></br>";	
		

	if(isset($_SESSION['compteur']))
	{ 
								
	echo "<b>Votre panier</b></br>";
	if (!empty($_SESSION['jeu1'])) 
	 { echo $_SESSION['jeu1']." exemplaire(s) Batman ";
	
        echo '<a href="catalogue.php?effacer1=delete">supprimer</a></br>';
	    if ((isset($_GET['effacer1'])) && ($_GET['effacer1'] == 'delete')) 
	    { 
 		$_SESSION['compteur']--;
		$_SESSION['jeu1']--;
	
		}
	 }



	 if (!empty($_SESSION['jeu2'])) 
	 { echo $_SESSION['jeu2']." exemplaire(s) Castlevania ";
        echo '<a href="catalogue.php?effacer2=delete">supprimer</a></br>';
	    if ((isset($_GET['effacer2'])) && ($_GET['effacer2'] == 'delete')) 
	    { 
 		$_SESSION['compteur']--;
		$_SESSION['jeu2']--;
		
		}

	 }



	 if (!empty($_SESSION['jeu3'])) 
	 { echo $_SESSION['jeu3']." exemplaire(s) Fifa ";
        echo '<a href="catalogue.php?effacer3=delete">supprimer</a></br>';
	    if ((isset($_GET['effacer3'])) && ($_GET['effacer3'] == 'delete')) 
	    { 
 		$_SESSION['compteur']--;
		$_SESSION['jeu3']--;
		
		}

	 }



	 if (!empty($_SESSION['jeu4'])) 
	 { echo $_SESSION['jeu4']." exemplaire(s) Gtav ";
        echo '<a href="catalogue.php?effacer4=delete">supprimer</a></br>';
	    if ((isset($_GET['effacer4'])) && ($_GET['effacer4'] == 'delete')) 
	    { 
 		$_SESSION['compteur']--;
		$_SESSION['jeu4']--;
		 
		}

	 }



	 if (!empty($_SESSION['jeu5'])) 
	 { echo $_SESSION['jeu5']." exemplaire(s) Last of us ";
        echo '<a href="catalogue.php?effacer5=delete">supprimer</a></br>';
	    if ((isset($_GET['effacer5'])) && ($_GET['effacer5'] == 'delete')) 
	    { 
 		$_SESSION['compteur']--;
		$_SESSION['jeu5']--;
		
		}

	 }



	 if (!empty($_SESSION['jeu6'])) 
	 { echo $_SESSION['jeu6']." exemplaire(s) Marvel ";
        echo '<a href="catalogue.php?effacer6=delete">supprimer</a></br>';
	    if ((isset($_GET['effacer6'])) && ($_GET['effacer6'] == 'delete')) 
	    { 
 		$_SESSION['compteur']--;
		$_SESSION['jeu6']--;
		  
		}

	 }




	 if (!empty($_SESSION['jeu7'])) 
	 { echo $_SESSION['jeu7']." exemplaire(s) Pes ";
        echo '<a href="catalogue.php?effacer7=delete">supprimer</a></br>';
	    if ((isset($_GET['effacer7'])) && ($_GET['effacer7'] == 'delete')) 
	    { 
 		$_SESSION['compteur']--;
		$_SESSION['jeu7']--;
		
		}

	 }




	 if (!empty($_SESSION['jeu8'])) 
	 { echo $_SESSION['jeu8']." exemplaire(s) Rayman ";
	    echo '<a href="catalogue.php?effacer8=delete">supprimer</a></br>';
	    if ((isset($_GET['effacer8'])) && ($_GET['effacer8'] == 'delete')) 
	    { 
 		$_SESSION['compteur']--;
		$_SESSION['jeu8']--;
		
		}

   	} 




	 if (!empty($_SESSION['jeu9'])) 
	 { echo $_SESSION['jeu9']." exemplaire(s) Tomb raider ";
        echo '<a href="catalogue.php?effacer9=delete">supprimer</a></br>';
	    if ((isset($_GET['effacer9'])) && ($_GET['effacer9'] == 'delete')) 
	    { 
 		$_SESSION['compteur']--;
		$_SESSION['jeu9']--;
		
		}

	 } 




	 if (!empty($_SESSION['jeu10'])) 
	 { echo $_SESSION['jeu10']." exemplaire(s) Uncharted";
        echo '<a href="catalogue.php?effacer10=delete">supprimer</a></br>';
	    if ((isset($_GET['effacer10'])) && ($_GET['effacer10'] == 'delete')) 
	    { 
 		$_SESSION['compteur']--;
		$_SESSION['jeu10']--;
		 
		}

	 } 

 }	

 ?>  


 
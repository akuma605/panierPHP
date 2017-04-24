<head><link rel="stylesheet" type="text/css" href="style.css"</head>
<?php
session_start();
 	if(!isset($_SESSION['compteur']))
	{ 
	$_SESSION['compteur']= ''; 
	}
	if (!empty($_GET['jeu'])) 
	{   $_SESSION['compteur']++;
		$jeux=$_GET['jeu'];
		switch ($jeux)
		{
		case "jeu1":  
			if(!isset($_SESSION['jeu1']))
			{ 
			$_SESSION['jeu1']= ''; 
			}
			$_SESSION['jeu1']++;
			break;
		case "jeu2":  
			if(!isset($_SESSION['jeu2']))
			{ 
			$_SESSION['jeu2']= ''; 
			}
			$_SESSION['jeu2']++;
			break;
			
		case "jeu3":
			if(!isset($_SESSION['jeu3']))
			{ 
			$_SESSION['jeu3']= ''; 
			}
			$_SESSION['jeu3']++;
			break;
		case "jeu4":
			if(!isset($_SESSION['jeu4']))
			{ 
			$_SESSION['jeu4']= ''; 
			}
			$_SESSION['jeu4']++;
			break;
		case "jeu5":   
			if(!isset($_SESSION['jeu5']))
			{ 
			$_SESSION['jeu5']= ''; 
			}
			$_SESSION['jeu5']++;
			break;
		case "jeu6":  
			if(!isset($_SESSION['jeu6']))
			{ 
			$_SESSION['jeu6']= ''; 
			}
			$_SESSION['jeu6']++;
			break;
		case "jeu7":  
			if(!isset($_SESSION['jeu7']))
			{ 
			$_SESSION['jeu7']= ''; 
			}
			$_SESSION['jeu7']++;
			break;
		case "jeu8": 
			if(!isset($_SESSION['jeu8']))
			{ 
			$_SESSION['jeu8']= ''; 
			}
			$_SESSION['jeu8']++;
			break;
		case "jeu9": 
			if(!isset($_SESSION['jeu9']))
			{ 
			$_SESSION['jeu9']= ''; 
			}
			$_SESSION['jeu9']++;
			break;			
		default:  
			if(!isset($_SESSION['jeu10']))
			{ 
			$_SESSION['jeu10']= ''; 
			}
			$_SESSION['jeu10']++;
			break;
			}
	}

		$jeux = $_GET['jeu'];
		if ($jeux=='jeu1') 
		{
		echo '<img src="images/batman.jpg" /><br />
	    </div></br></br>';
		}
			elseif ($jeux=='jeu2') 
			{
			echo '<img src="images/castlevania.jpg" /><br />
			</div><br /><br />';
			}  
				elseif ($jeux=='jeu3') 
				{
				echo '<img src="images/fifa.jpg" /><br />
				</div><br /><br />';
				} 
					elseif ($jeux=='jeu4') 
					{
					echo '<img src="images/gtav.jpg" /><br />
					</div><br /><br />';
					} 
					   elseif ($jeux=='jeu5') 
						{
						echo '<img src="images/last of us.jpg" /><br />
						</div><br /><br />';
						}  
							elseif ($jeux=='jeu6') 
							{
							echo '<img src="images/marvel.jpg" /><br />
							</div><br /><br />';
							}  
							   elseif ($jeux=='jeu7') 
								{
								echo '<img src="images/pes.jpg" /><br />
								</div><br /><br />';
								} 
									elseif ($jeux=='jeu8') 
									{
									echo '<img src="images/rayman.jpg" /><br />
									</div><br /><br />';
									}   
										elseif ($jeux=='jeu9') 
										{
										echo '<img src="images/tomb raider.jpg" /><br />
										</div><br /><br />';
										}  											
			else 
			{
			echo '<img src="images/uncharted.jpg" /><br />
			</div><br /><br />';
			} 	
	
	if(isset($_SESSION['compteur']))
	{ 
	echo "<b>Votre panier</b></br>";
	if (!empty($_SESSION['jeu1'])) 
	 { echo $_SESSION['jeu1']." exemplaire(s) Batman</br>";
	 }
	if (!empty($_SESSION['jeu2'])) 
	 { echo $_SESSION['jeu2']." exemplaire(s) Castlevania</br>";
	 }
	if (!empty($_SESSION['jeu3'])) 
	 { echo $_SESSION['jeu3']." exemplaire(s) Fifa</br>";
	 }
	if (!empty($_SESSION['jeu4'])) 
	 { echo $_SESSION['jeu4']." exemplaire(s) Gtav</br>";
	 }
	if (!empty($_SESSION['jeu5'])) 
	 { echo $_SESSION['jeu5']." exemplaire(s) Last of us</br>";
	 }
	if (!empty($_SESSION['jeu6'])) 
	 { echo $_SESSION['jeu6']." exemplaire(s) Marvel</br>";
	 }
	if (!empty($_SESSION['jeu7'])) 
	 { echo $_SESSION['jeu7']." exemplaire(s) Pes</br>";
	 }
	if (!empty($_SESSION['jeu8'])) 
	 { echo $_SESSION['jeu8']." exemplaire(s) Rayman</br>";
	 } 
	 if (!empty($_SESSION['jeu9'])) 
	 { echo $_SESSION['jeu9']." exemplaire(s) Tomb raider</br>";
	 } 
	if (!empty($_SESSION['jeu10'])) 
	 { echo $_SESSION['jeu10']." exemplaire(s) Uncharted</br>";
	 } 
 }		
	
	
	?>

<a href='catalogue.php'><h3>Retourner au catalogue</h3></a></br>


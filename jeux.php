
<head><link rel="stylesheet" type="text/css" href="style.css"</head>
<?php
session_start();
		$jeux = $_GET['jeu'];
		if ($jeux=='jeu1') 
		{
		echo '<img src="images/batman.jpg"/><br />
        <a href="panier.php?jeu=jeu1" target="_self"><b>acheter le jeu</b></a><br />
	    </div></br></br>';
		}
			elseif ($jeux=='jeu2') 
			{
				echo '<img src="images/castlevania.jpg"/><br />
        		<a href="panier.php?jeu=jeu2" target="_self"><b>acheter le jeu</b></a><br />
	    		</div></br></br>';
			} 
				elseif ($jeux=='jeu3') 
				{
					echo '<img src="images/fifa.jpg"/><br />
					<a href="panier.php?jeu=jeu3" target="_self"><b>acheter le jeu</b></a><br />
					</div></br></br>';
				} 
					elseif ($jeux=='jeu4') 
					{
						echo '<img src="images/gtav.jpg"/><br />
						<a href="panier.php?jeu=jeu4" target="_self"><b>acheter le jeu</b></a><br />
						</div></br></br>';
					} 
					   elseif ($jeux=='jeu5') 
						{
							echo '<img src="images/last of us.jpg"/><br />
							<a href="panier.php?jeu=jeu5" target="_self"><b>acheter le jeu</b></a><br />
							</div></br></br>';
						} 
							elseif ($jeux=='jeu6') 
							{
								echo '<img src="images/marvel.jpg"/><br />
								<a href="panier.php?jeu=jeu6" target="_self"><b>acheter le jeu</b></a><br />
								</div></br></br>';
							}  
							   elseif ($jeux=='jeu7') 
								{
									echo '<img src="images/pes.jpg"/><br />
									<a href="panier.php?jeu=jeu7" target="_self"><b>acheter le jeu</b></a><br />
									</div></br></br>';
								} 
									elseif ($jeux=='jeu8') 
									{
										echo '<img src="images/rayman.jpg"/><br />
										<a href="panier.php?jeu=jeu8" target="_self"><b>acheter le jeu</b></a><br />
										</div></br></br>';
									}  
										elseif ($jeux=='jeu9') 
										{
											echo '<img src="images/tomb raider.jpg"/><br />
											<a href="panier.php?jeu=jeu9" target="_self"><b>acheter le jeu</b></a><br />
											</div></br></br>';
										}  											
			elseif ($jeux=='jeu10') 
			{
				echo '<img src="images/uncharted.jpg"/><br />
        		<a href="panier.php?jeu=jeu10" target="_self"><b>acheter le jeu</b></a><br />
	    		</div></br></br>';
			} 	
		 
	 echo '<a href="catalogue.php" target="_self">retour</a>';  
?>
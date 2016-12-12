<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width"/>
   
	<!-- référencement -->
	<title>Formulaire de contact</title>
	<meta name="Description" content="Création d'un formulaire de contact (xhtml/css), javascript, PHP et MySQL" />
	<meta name="Keywords" content="formulaire, contact, (X)html/CSS, JS, PHP, MySQL" />
   
	<!-- CSS -->
	<link href='http://fonts.googleapis.com/css?family=Bigelow+Rules' rel='stylesheet' type='text/css'>
	<link href="css/style.css" type="text/css" rel="stylesheet" />

	<!-- JS -->
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/additional-methods.min.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
	<div class="body_container idea_container inner">
		<div class="bott_container wrapper">
			<div class="content_box">
				<div class="left_box">
					<h3> Formulaire de contact</h3>
					<div id="map"></div>
				</div>

				<div class="right_box">
					<div class="form_sec">
						<?php
							if (isset($_GET["yes"])){
								echo "<p class='success'>Message envoyé</p>";
							} else if (isset($_GET["no"])){
								echo "<p class='fail'>Message non envoyé</p>";
							}
						?>
						<form method="post" id="form_contact" action="formulaire.php">
							<fieldset>
								<ul>
								<li>
									<label>Nom :</label>
									<div class="row"><input type="text" id="nom" name="nom" /></div>
								</li>
								<li>
									<label>Prenom :</label>
									<div class="row"><input type="text" id="prenom" name="prenom" /></div>
								</li>
								<li>
									<label>E-mail :</label>
									<div class="row"><input type="text" id="email" name="email" /></div>
								</li>
								<li>
									<label>Téléphone :</label>
									<div class="row"><input type="text" id="tel" name="tel" /></div>
								</li>
								<li>
									<label>Sujet :</label>
									<div class="row"><input type="text" id="sujet" name="sujet" /></div>
								</li>
								<li>
									<label>Message :</label>
									<div class="row description_row">
										<textarea id="message" name="message" cols="" rows=""></textarea>
									</div>
								</li>
								</ul>
								<input type="submit" id="submit" value="Submit" />
							</fieldset>
						</form>
					</div>
				</div>
			
			</div>
		</div>
	</div>
</body>
</html>

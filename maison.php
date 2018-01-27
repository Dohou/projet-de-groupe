<?php include('connexion.php');
$msg="";
if (isset($_POST['btnValider'])){
	$sql="INSERT INTO maison(superficie,loyer,description,date_debut,date_fin) 
	VALUES ('".$_POST['superficie']."',
			 		  '".$_POST['loyer']."',
			 		  '".$_POST['description']."',
			 		  '".$_POST['date_debut']."',
			 		  '".$_POST['date_fin']."')";
	$result=mysqli_query($link,$sql);
	if ($result) {
		$msg='Insertion réussie';

	}else{
		$msg=mysqli_error($link);
	}

}
?>

<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-esquiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="C'est une agence immobilière">
	<meta name ="author" content="Digital Home">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/maison.css">

	<title>Maison</title>
</head>
<body>
<div class="container">

<div class="row">
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-header">
		
		<ul class="nav navbar-nav navbar-left">
				<li><a href="index.php"><span class="glyphicon glyphicon--log-in"></span><img src="image/logo.jpg" height="50px" width="50px"></a></li>
			</ul>
		</div>
			<ul class="nav navbar-nav navbar-right">
			<li class="active">
				<a href="client.php">Client</a>
			</li>
			<li>
				<a href="commune.php">Commune</a>
			</li>
			<li>
				<a href="maison.php">Maison</a>
			</li>
			<li>
				<a href="type_maison.php">Type de maison</a>
			</li>
			
			</ul>
</nav>
</div>
<br><br><br><br><br>

<div class="row">
<div class="col-md-12">
<div class="col-md-3"><img src="image/contemporain.jpg" width="150px" height="100px"></div>
<div class="col-md-9"><p><center><b>La maison contemporaine</b><br>
Construite en 1995 sur une superficie de 600m2; Elle contient 4 chambres, 3 salles de bains, une grande cuisine, une salle de séjour, un bureau, une salle de jeux, une salle à manger, un garage, une piscine et un jardin. Elle est appelée "la maison contemporaine" à cause de son architecture et de sa décoration.
</center></p></div>
</div>
</div><br><br>

<div class="row">
<div class="col-md-12">
<div class="col-md-9"><p><center><b>Le Loft ou le Studio américain</b><br>
Ce loft appelé communément studio américain est batie sur 150m2, contenant un espace cuisine, séjour et chambre à coucher est spacieux, convivial et agréable à vivre pour des jeunes célibataires ou étudiants.
</center></p></div>
<div class="col-md-3"><img src="image/loft-moderne.jpg" width="150px" height="100px"></div>
</div>
</div><br><br>

<div class="row">
<div class="col-md-12">
<div class="col-md-3"><img src="image/images (4).jpg" width="150px" height="100px"></div>
<div class="col-md-9"><p><center><b> La Maison Campagnarde</b><br>
Pour des personnes préférant des maisons éloignées des bruits ahurissants et du remue-ménage de la ville nous leur avons deniché cette somptueuse maison bâtie au beau milieu de la campagne avec un vaste jardin d'un hectare (1ha). Elle comprend 5 chambres, 3 salles de bains, une salle de séjour, une salle à manger, une vaste cuisine et un potager.
</center></p></div>
</div>
</div><br><br>

<div class="row">
<div class="col-md-12">
<div class="col-md-9"><p><center><b>La Duplex Moderne</b><br>
Construite en 2001 sur une superficie de 400m2. Cette maison est appelée la Duplex Moderne à cause de sa modernité. Contenant 4  chambres, 4 salles de bains, un séjour avec cheminée, une vaste cuisine, une grande salle à manger, une piscine. C'est une maison agréable, accessible à tous.</center></p></div>
<div class="col-md-3"><img src="image/duplex.jpg" width="150px" height="100px"></div>
</div>
</div><br><br>

</div>
</body>
</html>
<?php include('connexion.php');
	$msg="";
if (isset($_POST['btnValider'])){
	$sql="INSERT INTO commune (nom_commune,quartier)
		VALUES ('".$_POST['nom_commune']."','".$_POST['quartier']."')";
	$result=mysqli_query($link,$sql);
	if ($result) {
		$msg='Insertion réussie';

	}else{
		$msg=mysqli_error($link);
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta neme="description" content="c'est une agence immobilière">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/commune.css">
	
	<title>Commune</title>
</head>

<body>
<div class="container" >

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
			
		</div>
</nav>
</div>

		<div class="row">
			<img src="image/devanture.jpg" width="100%" height="550px">
		</div><br>

		<div class="row"><!--separer (divise) les different blocs du Menu avec bootstrap-->

	<div class="col-md-2"></div>

	<form action="" name="form1" method="POST" >
	<div class="col-md-8" >

		<legend>Liste des Communes</legend>

		<div class="form-group">
			<label >Nom_Commune</label>
			<select name="nom_commune">
			<option value="cocody">Cocody</option>
			<option value="marcory">Marcory</option>
			<option value="plateau">Plateau</option>
		</select><br>
		</div>

		<div class="form-group">
			<label >Quartier</label>
			<select name="quartier">
			<option value="cocody/angre">Cocody/Angre</option>
			<option value="cocody/attoban">Cocody/Attoban</option>
			<option value="marcory/bietry">Marcory/Biétry</option>
			<option value="marcory/hibiscus">Marcory/Hibiscus</option>
			<option value="plateau/vallon">Plateau/Cité Administrative</option>
		</select><br>
		</div>

		<center><button name="btnValider" type="submit" class="btn btn-danger submit">Envoyer</button></center><br><br>

	</div>

	</form>

	<span><?php
		echo $msg;
	 ?></span>

	<div class="col-md-2"></div>

	<div class="row">
	<table class="table">
		<thead>
			<tr>
				<th>N°</th>
				<th>Nom_Commune</th>
				<th>Quartier</th>
				<th>Action</th>
			</tr>
		</thead>
	
		<tbody>
		<?php
			$n=1;
			$list="SELECT * FROM commune";
			$res=mysqli_query($link,$list);
			while ($data=mysqli_fetch_array($res)) { 		
			
		?><!--retourne un tableau qui corresspond a une ligne-->
		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $data['nom_commune']; ?></td>
			<td><?php echo $data['quartier']; ?></td>
		</tr>

		<?php 
		 $n++;
		}

		?>
	</tbody>
	</table>

	</div>
</div>

</body>
</html>
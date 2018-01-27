<?php include('connexion.php');
$msg="";
if (isset($_POST['btnEnvoyer'])){
	$sql="INSERT INTO client(nom,prenom,profession,email,contact) 
	VALUES ('".$_POST['nom']."',
			 		  '".$_POST['prenom']."',
			 		  '".$_POST['profession']."',
			 		  '".$_POST['email']."',
			 		  '".$_POST['contact']."')";
	$result=mysqli_query($link,$sql);
	if ($result) {
		$msg='Insertion réussie';

	}else{
		$msg=mysqli_error($link);
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="c'est une agence immobilière">
	<meta name="author" content="Digital Home">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/client.css">
	

	<title>Client</title>
</head>
<body>

<div class="container">
	
	<div class="row">
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-header">
		
		<ul class="nav navbar-nav navbar-left">
				<li><a href="index.php"><span class="glyphicon glyphicon--log-in"></span><img src="image/logo.jpg" height="60px" width="60px"></a></li>
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
</div><br><br><br>

<div class="row">
	<img src="image/epuree.jpg" width="100%" height="450px">
</div>

		<legend>Page du Client</legend><br><br>

		<div class="form-group">
			<label>NOM</label>
			<input type="text" name="nom" class="form-control" placeholder="Entrer votre nom" ><br>
		</div>

		<div class="form-group">
			<label >PRENOM</label>
			<input type="text" name="prenom" class="form-control" placeholder="Entrer votre prenom" ><br>
		</div>

		<div class="form-group">
			<label >PROFESSION</label>
			<input type="text" name="profession" class="form-control" placeholder="Entrer votre profession" ><br>
		</div>

		<div class="form-group">
			<label >EMAIL</label>
			<input type="email" name="email" class="form-control" placeholder="Entrer votre email" required><br>
		</div>

		<div class="form-group">
			<label>CONTACT</label>
			<input type="text" name="contact" class="form-control" placeholder="Entrer votre contact" required><br>
		</div>

		<center><button name="btnEnvoyer" type="submit" class="btn btn-danger submit">ENVOYER</button></center><br><br>

	</div>
	</form>
	</div>

<span><?php
		echo $msg;
	 ?>
	 	
	 </span>
	<div class="col-md-2"></div>

	<div class="row">
	<table class="table">
		<thead>
			<tr>
				<th>N°</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Profession</th>
				<th>Email</th>
				<th>Contact</th>
				<th>Action</th>
			</tr>
		</thead>	
		<tbody>

		<?php
			$n=1;
			$list=" SELECT * FROM client ";
			$res=mysqli_query($link,$list);
			while ($data=mysqli_fetch_array($res)) { 

		?><!--retourne un tableau qui corresspond a une ligne-->

		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $data['nom']; ?></td>
			<td><?php echo $data['prenom']; ?></td>
			<td><?php echo $data['profession']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['contact']; ?></td>
			<td>
                <a href="?modif_id=<?php echo $data['id']; ?>">Modifier</a>
                <a href="?sup=<?php echo $data['id']; ?>">Supprimer</a>
            </td>
		</tr>

		<?php  
			$n++;

			}
		
		?>
	</tbody>
	</table>
	</div>

</body>
</html>
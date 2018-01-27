<?php include('connexion.php');
$msg="";
if (isset($_POST['btnValider'])){
		$sql= "INSERT INTO type_maison (libelle) VALUES ('".$_POST['libelle'].")";
		$result=mysqli_query($link,$sql);
		if ($result) {
			$msg='Insertion reussie';
		}else{
			$msg=mysqli_error($link);
		}
	}
 ?>

<!DOCTYPE html>
<html lang="">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Type de Maison</title>

		<link rel="stylesheet" href="css/bootstrap.min.css" >

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
			
		</div>
</nav>
</div><br><br><br><br>
			<div class="row">

				<img src="image/sejour.jpg" width="100%" height="450px">

			</div>
			<br>

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">

					<form action="" method="POST" role="form">
						<legend>Formulaire de Type de maison</legend>
						<span> <?php echo $msg; ?> </span>
					
						<div class="form-group">
							<label for="">Libelle</label>
							<input name="libelle" type="text" class="form-control" id="" placeholder="Entrer le libelle">
						</div>
                        <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
			<br>
			<div class="row">
				
				<table class="table">
				<thead>
                <tr>
							<th>Libelle</th>
							<th>Action</th>
						</tr>

					</thead>
					<tbody>
						<?php 
							$n=1;
							$list=" SELECT * FROM type_maison";
							$res= mysqli_query($link,$list);
							while ($data = mysqli_fetch_array($res)){
                             ?>
								
							<tr>
								<td> <?php echo $n; ?> </td>
								<td><?php echo $data['libelle']; ?></td>
								<td><?php echo $data['description']; ?></td>
								<td></td>
							</tr>
							<?php $n++;
						} ?>
					</tbody>
				</table>

			</div>
		
</body>
</html>
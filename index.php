<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>TP Master 2</title>
</head>
<body>

	<div class="container mt-3 mb-3">
		<center> <h1><b>TP Video Player</b></h1></center>
		<hr/>
			<center><a  href="upload.php" class="btn btn-primary mt-3">Upload a New Video</a></center>	
				<hr/>
		<div class="row">
				<?php
				include("db.php");
					
				$q = "SELECT * FROM video";

				$query = mysqli_query($conn,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
					?>

					<div class="container">
		<div class="main-video">
			
			<div class="video">
						<video width="200%" controls>
<source src="<?php echo 'upload/'.$name;?>">
</video>
<h3 class="title"><?php echo $name;?></h3>
					</div></div></div>

				<?php }
?>
</div>
				</div>
</body>
</html>
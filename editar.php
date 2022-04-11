<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">

    <title>PHP crud - EDIT</title>
  </head>
  <body>
      <?php
      $id = $_GET['id'];
      $name = $_GET['nombre'];
      $color = $_GET['color'];
      $email = $_GET['email'];
      ?>
	<div class="container">
		<div class="row justify-content-center mt-4">
			<div class="col-5 text-center">
				<form action="editar_b.php" method="post">

					<h3>Editar dato</h3>
					<input id="name" type="text" class="d-none" name="id" value="<?php echo $id ?>">
					<input id="name" type="text" class="form-control my-2" name="nombre" placeholder="Nombre completo" value="<?php echo $name ?>">
					<input id="color" type="text" class="form-control my-2" name="color" placeholder="Su color favorito" value="<?php echo $color ?>">	
					<input id="email" type="text" class="form-control my-2" name="email" placeholder="Email" value="<?php echo $email ?>">
		
					<input type="submit" name="register" class="btn btn-primary" value="Actualizar">
					<a  href="index.php" class="btn btn-danger">Volver</a>

				</form>
			</div>
		</div>
	</div>
	
    
	<?php 
		//include("registrar.php");
		//include("mostrar.php");	
	?>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php session_start();
require_once('controllers/controllersProducto.php'); 
$sexo = 2;
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>Productos</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main2.css">
		<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">
	</head>

	<body>

		<?php require_once("nav.php"); ?>
		<h1 class="text-title">MUJER</h1>
		<section class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
					<aside class="menu-aside">
						<ul>
							<li class="li-header">CATEGORÍAS DE PRODUCTOS</li>
							<li>
								<a href="#" id="it-pol">
									<form action="productos-hombre.php" method="GET">
										<input type="hidden" value="1" name="id_categoria">
										<input type="submit" value="CASACAS">
									</form>
								</a>
							</li>
							<li>
								<a href="#" id="it-pol">
									<form action="productos-hombre.php" method="GET">
										<input type="submit" value="POLOS">
										<input type="hidden" value="3" name="id_categoria">
									</form>
								</a>
							</li>
							<li>
								<a href="#" id="it-pol">
									<form action="productos-hombre.php" method="GET">
										<input type="submit" value="CAMISAS">
										<input type="hidden" value="4" name="id_categoria">
									</form>
								</a>
							</li>
							<li class="last-border">
								<a href="#" id="it-pol">
									<form action="productos-hombre.php" method="GET">
										<input type="submit" value="PANTALONES">
										<input type="hidden" value="2" name="id_categoria">
									</form>
								</a>
							</li>
						</ul>

						<div class="prom">
							<figure>
								<img src="images/promo.png" class="img-responsive">
							</figure>
						</div>
					</aside>
				</div>
				<!--LISTADO POR CATEGORIA DE SEXO-->
				<?php if (isset($_GET['id_sexo'])) {
					try{
						$id_sexo = $_GET['id_sexo'];
						$lista_productos = $producto->listarPorSexo($id_sexo);
					}catch(Exception $e){
						header('location: error.php');
					}
				}else{
					try{
						$id_categoria = $_GET['id_categoria'];
						$lista_productos = $producto->listarPorCategoria($id_categoria, $sexo);
					}catch(Exception $e){
						header('location: error.php');
					}
				} ?>
				<div id="prod-casaca" class="col-sm-8">
					<div class="grid">
						<div class="row">
							<?php for ($i=6; $i < 9; $i++) {  ?>
							<div class="col-sm-4 img-grid">
								<img src="<?php echo $lista_productos[$i]['image']; ?>" class="img-responsive">
								<div class="hover">
									<h5> <a href="interno-hombre.php">VER</a></h5>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>

					<div class="grid">
						<div class="row">
							<?php for ($i=3; $i < 6; $i++) {  ?>
							<div class="col-sm-4 img-grid">
								<img src="<?php echo $lista_productos[$i]['image']; ?>" class="img-responsive">
								<div class="hover">
									<h5> <a href="interno-hombre.php">VER</a></h5>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>

					<div class="grid">
						<div class="row">
							<?php for ($i=0; $i < 3; $i++) {  ?>
							<div class="col-sm-4 img-grid">
								<img src="<?php echo $lista_productos[$i]['image']; ?>" class="img-responsive">
								<div class="hover">
									<h5> <a href="interno-hombre.php">VER</a></h5>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
	</section>

	<?php include "footer.php"; ?>	

</body>
<?php include 'callResourcesJS.php'; ?>
</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMINISTRADOR</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/main2.css">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">
</head>
<?php if(isset($_SESSION['usuario']) && $_SESSION['usuario'] == 'admin'){ ?>
<body>
<div class="form-group">  
<?php include 'nav.php'; ?>
<div>
<div class="form-group">

</div> 

</body>
<?php } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</html>
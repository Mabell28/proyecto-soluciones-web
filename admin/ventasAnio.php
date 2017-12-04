<?php session_start(); 
require_once ('controllersAdmin/controllersAdminReportes.php');

$reportes_anio = array();
if (isset($_GET['anio'])) {
    $anio = $_GET['anio'];
    $reportes_anio = $obj->ventasAnio($anio);
}
?>
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
<body>
<div class="container-fluid"> 
    <div class="row">
        <?php include 'nav.php'; ?>
    </div> 
    <div class="row">
        <div class="row col-xs-2">
            <select class="form-control" id="year">
            	<option value="2017">2017</option>
            	<option value="2016">2016</option>
            	<option value="2015">2015</option>
            	<option value="2014">2014</option>
            	<option value="2013">2013</option>
            	<option value="2012">2012</option>
            	<option value="2011">2011</option>
            	<option value="2010">2010</option>
            </select>
            <button class="btn btn-primary" id="btn-year">REPORTE</button>
        </div>
    </div>
    <div class="row" id="reports">
        <?php if(isset($_GET['anio'])){ ?>
        <?php if(!empty($reportes_anio)){ ?>
        <h2><?php echo 'REPORTES DE '.($_GET['anio']); ?></h2>
        <table class="table"> 
            <thead>
                <tr>
                    <th>Mes</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>'
                <tr>
        <?php  foreach ($reportes_anio as $value) { 
            $mes = mes($value['mes']);
        ?>
                <tr>
                    <td><?php echo $mes; ?></td>
                    <td><?php echo $value['total_mes']; ?></td>
                </tr>
        <?php }?>
                </tr>
            </tbody>
        </table>
    <?php }else{ ?>
    <h2><?php echo 'NO SE ENCONTRARON REGISTROS DE '.($_GET['anio']); ?></h2>
    <?php }} ?>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
    $('#btn-year').click(function(){
        var year = $('#year').val();
        window.location.href = 'ventasAnio.php?anio='+year;
        });
</script>
</html>
  
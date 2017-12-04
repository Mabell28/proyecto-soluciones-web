<?php session_start(); 
require_once('controllersAdmin/controllersAdminReportes.php');

$reportes_mes = array();
if (isset($_GET['mes'])) {
    $mes = $_GET['mes'];
    $reportes_mes = $obj->ventasMes($mes);
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
            <select class="form-control" id="calendario">
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
                <option value="6">Junio</option>
                <option value="7">Julio</option>
                <option value="8">Agosto</option>
                <option value="9">Setiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </select>
            <button class="btn btn-primary" id="btn-month">REPORTE</button>
        </div>
    </div>
    <div class="row" id="reports">
        <?php if(isset($_GET['mes'])){ ?>
        <?php if(!empty($reportes_mes)){ ?>
        <h2><?php echo 'REPORTES DE '.mes($_GET['mes']); ?></h2>
        <table class="table"> 
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Total ventas</th>
                    <th>Nombre producto</th>
                    <th>ID producto</th>
                </tr>
            </thead>
            <tbody>'
                <tr>
        <?php  foreach ($reportes_mes as $value) { ?>
                <tr>
                    <td><?php echo $value['fecha']; ?></td>
                    <td><?php echo $value['total']; ?></td>
                    <td><?php echo $value['nombre_producto']; ?></td>
                    <td><?php echo $value['id_producto']; ?></td>
                </tr>
        <?php }?>
                </tr>
            </tbody>
        </table>
    <?php }else{ ?>
    <h2><?php echo 'NO SE ENCONTRARON REGISTROS DE '.mes($_GET['mes']); ?></h2>
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
    $('#btn-month').click(function(){
        var month = $('#calendario').val();
        window.location.href = 'ventasMes.php?mes='+month;
        });
</script>
</html>
  
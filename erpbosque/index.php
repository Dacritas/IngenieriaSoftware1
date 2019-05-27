<?php 
session_start();
include('inc/header.php');
include 'Inventory.php';
$inventory = new Inventory();
$inventory->checkLogin();
?>
<title>ERP Universidad el bosque</title>
<!--importacion de scripts necesarios-->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/common.js"></script>
<meta charset="UTF-8">
<div class="container">		
	<h2>ERP Unbosque</h2>	
	<?php include("menus.php"); ?>   <!--incrustacion del Navbar -->
	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
							<h3 class="panel-title">Inventorio actual</h3>
						</div>						
					</div>
				</div>
				<div class="panel-body">
					<div class="row"><div class="col-sm-12 table-responsive">
						<table id="inventoryDetails" class="table table-bordered table-striped">
							<thead><tr>
								<th>Producto</th>      
								<th>Codigo producto</th>	
								<th>Inventario inicial</th> 
								<th>Inventario recibido</th> 									
								<th>Inventario enviado</th>
								<th>Inventario en bodega</th>								
							</tr></thead>
						</table>
					</div></div>
				</div>
			</div>
		</div>
	</div>
		
</div>	
<?php include('inc/footer.php');?>







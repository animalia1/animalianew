<?php
 require_once  '../../config.php';
 include ('header.php');
 $db=config::getConnexion();
   
    $req1= $db->query("SELECT distinct sum(quantity1) as total ,nom FROM panier l join produit p on l.produitid1=p.id group by nom ");
    $req1->execute();
          $liste= $req1->fetchALL(PDO::FETCH_OBJ);
              $req2= $db->query("SELECT sum(quantity1) as nb FROM panier   " );
     $nb = $req2->fetch();
 
  $dataPoints = array();
 foreach ($liste as $row) {
    $dataPoints[] = array("label" => $row->nom, "y" =>$row->total/intval($nb['nb'])*100 );
    //$nom=$row->nom;
 }
 
?>
<?php
 
 /*$dataPoints = array( 

     array("label"=>$nom, "y"=>64.02),
     array("label"=>"Firefox", "y"=>12.55),
     array("label"=>"IE", "y"=>8.47),
     array("label"=>"Safari", "y"=>6.08),
     array("label"=>"Edge", "y"=>4.29),
     array("label"=>"Others", "y"=>4.59)
 )
  */
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Winkle I Fast build Admin dashboard for any platform</title>
	<meta name="description" content="Winkle is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Winkle Admin, Winkleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Data table CSS -->
	<link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- Toast CSS -->
	<link href="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
	
	<!-- Morris Charts CSS -->
    <link href="../vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>
	
	<!-- vector map CSS -->
	<link href="../vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
    <!-- /Preloader -->
         <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-6">
			
    <div class="wrapper theme-1-active navbar-top-violet horizontal-nav">
	<div class="row">
        	
					<div class="col-lg-15 col-md-15 col-sm-15 col-xs-50">
                    <div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Traffic Types</h6>
								</div>
								<div class="pull-right">
									<div class="btn-group">
										<div class="dropdown">
											<button aria-expanded="false" data-toggle="dropdown" class="btn btn-danger btn-sm dropdown-toggle" type="button">Action <span class="caret"></span></button>
											<ul role="menu" class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
									</div>
								</div>
    <script>
 window.onload = function() {
  
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     title: {
         text: "Le Produit le plus Intéressant"
     },
     subtitles: [{
         text: "November 2019"
     }],
     data: [{
         type: "pie",
         yValueFormatString: "#,##0.00\"%\"",
         indexLabel: "{label} ({y})",
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
  
 }
 </script>
 
 
 <div id="chartContainer" style="height: 370px; width: 100%;"></div>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
</div>
</div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="../vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="../vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="../vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="../vendors/bower_components/echarts/dist/echarts-en.min.js"></script>
	<script src="../vendors/echarts-liquidfill.min.js"></script>
	
	<!-- Vector Maps JavaScript -->
    <script src="../vendors/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="dist/js/vectormap-data.js"></script>
	
	<!-- Toast JavaScript -->
	<script src="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
	
	<!-- Piety JavaScript -->
	<script src="../vendors/bower_components/peity/jquery.peity.min.js"></script>
	<script src="dist/js/peity-data.js"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="../vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="../vendors/bower_components/morris.js/morris.min.js"></script>
    <script src="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
	
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	<script src="dist/js/dashboard-data.js"></script>
</body>

</html>

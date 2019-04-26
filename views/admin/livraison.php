
<!DOCTYPE html>
<html lang="en">
			<!-- /Right Sidebar Menu -->
				
			
       
				<!-- /Title -->
				

<body>

<?php 
class config {
	private static $instance = NULL;

	public static function getConnexion() {
		if (!isset(self::$instance)) {
	try{
			self::$instance = new PDO('mysql:host=localhost;dbname=Animalia', 'root', '');
	self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e){
					die('Erreur: '.$e->getMessage());
	}
		}
		return self::$instance;
	}
}
include "../../core/livraisonC.php";
include ('header.php'); 
if(isset($_GET['ajouter'])){
    echo '<script>swal("Parfait!", "un nouveau livreur a ete ajouter!", "success");</script>';
}
if(isset($_GET['modif'])){
    echo '<script>swal("Parfait!", "un livreur a ete modifier!", "success");</script>';
}
if(isset($_GET['error'])){
    echo '<script>swal("Oops...", "merci de verifier les champs!", "error");</script>';
}


if (isset($_GET["name"])){
	$livraison2C=new LivraisonC();
	$livraison2C->supprimerLivraison($_GET["name"]);
	
	while (ob_get_status()) 
	{
		ob_end_clean();
	}

	echo "<script type='text/javascript'>window.location.href = 'contact-card.php?success=1';</script>";
}
	?>

<div class="page-wrapper " style="min-height: 950px;">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Gestion Livreur</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>Livraison</span></a></li>
							<li class="active"><span>Gestion Livreur</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
                </div>

                <div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="contact-list">
										<div class="row">
											
											
											<aside class="col-lg-10 col-md-8 pl-0">
												<div class="panel pa-0">
												<div class="panel-wrapper collapse in">
												<div class="panel-body  pa-0">
													<div class="table-responsive mb-30">
														<table id="datable_1" class="table  display table-hover mb-30" data-page-size="10">

														<?php 
															?>
															<thead>
																<tr>
																	<th>NO</th>
																	
																	<th>numero de commande</th>
																	
																	<th>nom</th>
																	<th>prenom</th>
																	<th>adresse</th>
																	<th>Telephone</th>
																	<th>etat</th>
																	<th>Date</th>
																	<th>zip</th>
																</tr>
															</thead>
															<tbody>




																
															<?PHP
															$i =1;
															$livraison1C=new LivraisonC();
															$lsiteLivraisons=$livraison1C->afficherLivraison();
																foreach($lsiteLivraisons as $row){
															?>
																<tr>
																	<td><?PHP echo "$i"; ?></td>
																	<td><a href="#"><?PHP echo $row['order_id_fk']; ?></a></td>
																	
																	<td><?PHP echo $row['nom'] ?></td>
																	<td><?PHP echo $row['prenom'] ?></td>
																	<td><?PHP echo $row['adresse']; ?></td>
																	<td><?PHP echo $row['numero']; ?></td>
																	<td><span class="label label-danger"><?PHP echo $row['etat']; ?></span> </td>
																	<td><?PHP echo $row['date']; ?></td>
																	<td><?PHP echo $row['zip'] ?></td>
																	
																</tr>
																<?PHP
																$i +=1;
}
?>
															</tbody>
														</table>
													</div>
												</div>
												</div>
												</div>
											</aside>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->





    </div>
</div>
<script src="../../dist/js/control.js"></script>
<?php
	if(isset($_GET['edit'])){
	echo "<script>window.onload = function(){														
	$('#myModal').modal('show');
	} </script>";
	}
?>
</body>
</html>
<html lang="en">


<body>
	<?php include ("header.php"); ?>
			
        
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">products</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>e-commerce</span></a></li>
						<li class="active"><span>products</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Product Row One -->
				<div class="row"> 
				<?PHP
															include "../../core/produitC.php";
															$produit1C=new produitC();
															$listeProduits=$produit1C->afficherProduit();
																foreach($listeProduits as $row){  
																	
															?>
       		 <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6" >  
						 <div class="panel panel-default card-view pa-0">
							 <div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<article class="col-item">
										<div class="photo">
											<div class="options">
												<a href="add-products.php?edit=<?php echo $row['id'].'&type_animaux='.$row['type_animaux'];?>" class="font-18 txt-grey mr-10 pull-left"><i class="zmdi zmdi-edit"></i></a>
												<a href="traitement2.php?delete=<?php echo $row['id']?>" class="font-18 txt-grey pull-left "><i class="zmdi zmdi-close"></i></a>
											</div>
											
											<a href="javascript:void(0);"> <img style="width:355px;height:285px;"src="<?php echo $row["image"]; ?>" class="img-responsive" alt="Product Image" /> </a>
										</div>
										<div class="info">
											<h6><?php echo $row["nom"]; ?></h6>
											<div class="product-rating inline-block">
												<a href="javascript:void(0);" class="font-12 txt-orange zmdi zmdi-star mr-0"></a><a href="javascript:void(0);" class="font-12 txt-orange zmdi zmdi-star mr-0"></a><a href="javascript:void(0);" class="font-12 txt-orange zmdi zmdi-star mr-0"></a><a href="javascript:void(0);" class="font-12 txt-orange zmdi zmdi-star mr-0"></a><a href="javascript:void(0);" class="font-12 txt-orange zmdi zmdi-star-outline mr-0"></a>
											</div>
											<span class="head-font block text-warning font-16">$<?php echo $row["price"]; ?></span>
										</div>
									</article>
								</div>
							 </div>	
						 </div>	
					  </div>	 
				<!-- /Product Row Four -->
				
			<?php 
					 } ?>
			</div>
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2018 &copy; Winkle. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	

	
		
	<!-- Init JavaScript -->
	<script src="../../dist/js/init.js"></script>
 </body>
</html>
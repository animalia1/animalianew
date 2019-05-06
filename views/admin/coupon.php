
<?php 


include ("../../core/couponC.php");
include ("../../config.php");

include ('header.php'); 
?>
<!-- Main Content -->
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
						<div class="col-sm-6">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Coupon form</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="traitementcoupon.php">
												<div class="form-group">
													<label class="control-label mb-10" >Coupon:</label>
													<input class="form-control" name='code' max=4>
												</div>
                                   
												<div class="form-group">
													<label class="control-label mb-10">Promotion:</label>
													%<input  type="number" min=1 max=100  step=1 class="form-control" placeholder="1-100%" name='promotion'>
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10">Nombre d'utilisateur:</label>
													<input  type="number" min="0" max="100" value="0" step="10" class="form-control" placeholder="1-100" name='nb_user'>
                
                                            	</div>
												<div class="form-group mb-0">
													<button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
												</div>	
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
                    	<div class="row">
						<div class="col-md-12">
							<div class="main-content">
								<div class="commerce">
									<form>
										<table class="table shop_table cart">
											<thead>
												<tr>
													<th class="product-remove hidden-xs">&nbsp;</th>
													
													<th class="product-name">coupon</th>
													<th class="product-price text-center">Promotion</th>
													<th class="product-quantity text-center">nombre d'utilisateur</th>
													
												</tr>
											</thead>
											<tbody>






											
															<?php
															$coupon1=new couponC();
															
															$listecoupon=$coupon1->affichecoupon();
																foreach($listecoupon as $row){  
	                             
															?>
												<tr class="cart_item">
													<td class="product-remove hidden-xs">
														<a href="traitementcoupon.php?supcode=<?php echo $row['code']?>" class="remove" title="Remove this item">&times;</a>
													</td>
													
													<td class="product-name">
														<a href="traitementcoupon.php"><?php echo $row['code'] ?></a>
													</td>

													<td class="product-price text-center">
														<a href="traitementcoupon.php"><?php echo $row['promotion'] ?></a>
													</td>
													<td class="product-quantity text-center">
														<a href="traitementcoupon.php"><?php echo $row['nb_user'] ?></a>
													</td>
												</tr>
																	


																<?php } ?>

								
												
											</tbody>
										</table>
									</form>
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
                        	<!-- /#wrapper -->
		
		<!-- JavaScripts -->
		
	<script src="../../dist/js/init.js"></script>
		
                        </body>
                        </html>
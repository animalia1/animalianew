


<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>404 - Page not found | HTML Commerce Template</title>
		<link rel="shortcut icon" href="images/favicon.ico">


		<link rel='stylesheet' href='css/swatches-and-photos.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/jquery.selectBox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/elegant-icon.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/custom.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='css/magnific-popup.css' type='text/css' media='all'/>
        <!-- Data table CSS -->
	<link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body onload="script();">
	<?php 
		
		session_start();

include ('header.php');
include ('selectLivreur.php');
if(!(isset($_SESSION['username']))){
echo "<script>window.location.href= 'index.php';</script>";
}?>
	

                        <!--shipping rami work-->
						
			<div class="content-container" style="margin-top:-20px;">
				<div class="container">
						<div class="row row-fluid">
						<div class="col-md-12 mb-2">
							<div class="main-content">
								<form class="commerce">
									<div class="wishlist-title ">
										<h2>Mes Produits Favoris</h2>
									</div>
									<table class="shop_table cart wishlist_table mt-40">
										<thead>
											<tr>
												<th class="product-remove"></th>
												<th class="product-thumbnail"></th>
												<th class="product-name"><span class="nobr">Nom de produit</span></th>
												<th class="product-price"><span class="nobr">Prix unitaire </span></th>
												<th class="product-stock-stauts"><span class="nobr">Stock </span></th>
												<th class="product-add-to-cart"></th>
											</tr>
										</thead>
										<tbody>
											<?php 
											include ("../core/favorisC.php");
											if(isset($_REQUEST['supp']))
											{
												favorisC::supprimerFavoris($_REQUEST['user'],$_REQUEST['supp']);
											}
												$list = favorisC::afficherFavoris($_SESSION['id']);
												foreach($list as $fav){ ?>
											<tr>
												<td class="product-remove">
													<a href="?user=<?php echo $fav['userid'] ?>&supp=<?php echo $fav['productid'] ?>" class="remove remove_from_wishlist">&times;</a>
												</td>
												<td class="product-thumbnail">
													<a href="shop-detail-1.html">
														<img width="100" height="150" src="<?php echo "admin/".$fav['image'] ?>" alt="Product-1"/>
													</a>
												</td>
												<td class="product-name">
													<a href="shop-detail.php?id=<?php echo $fav['productid'] ?>"><?php echo $fav['nomproduit'] ?></a>
												</td>
												<td class="product-price">
													<span class="amount">&#36;<?php echo $fav['price'] ?>
													</span>
												</td>
												<td class="product-stock-status">
													<span class="wishlist-in-stock">In Stock</span>
												</td>
												<td class="product-add-to-cart">
											 		<a href="#" class="add_to_cart_button button rounded"> Ajouter au panier</a>
												</td>
											</tr>
												<?php } ?>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="6">&nbsp;</td>
											</tr>
										</tfoot>
									</table>
								</form>
							</div>
						</div>
					</div>
				</div>


			<?php
				include ('footer.php');
			?>

	



	</body>
	

	<script src="dist/js/controle.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtSRG_8GaJhse2ljiW1sy2UV_NkXxjV0E&callback=initMap"
		async defer></script>

</html>
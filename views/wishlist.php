


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
				session_start(); ?>
		<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userloginModalForm"  methode="get" action="login.php">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Login</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" id="username" name="username" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" id="password" required value="" name="password" class="form-control" placeholder="Password">
							</div>
							<div class="checkbox clearfix">
								<label class="form-flat-checkbox pull-left">
									<input type="checkbox" name="rememberme" id="rememberme" value="forever">
									<i></i>&nbsp;Remember Me
								</label>
								<span class="lostpassword-modal-link pull-right">
									<a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your password?</a>
								</span>
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-register pull-left">
								<a data-rel="registerModal" href="#">Not a Member yet?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userregisterModalForm" methode="get" action="register.php" >
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Register account</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="user_email">Email</label>
								<input type="email" id="email" name="email" required class="form-control" value="" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="user_password">Password</label>
								<input type="password" id="password1" required value="" name="password1" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="user_password">Retype password</label>
								<input type="password" id="password2" required value="" name="password2" class="form-control" placeholder="Retype password">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userlostpasswordModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Forgot Password</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Username or E-mail:</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username or E-mail">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php
				
				if(!(isset($_SESSION['username']))) { ?>
						<div class="topbar">
							<div class="container topbar-wap">
								<div class="row">
									<div class="col-sm-6 col-left-topbar">
										<div class="left-topbar">
											connecte vous pour commander
											<a href="#"><i class="fa fa-long-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-sm-6 col-right-topbar">
										<div class="right-topbar">
											<div class="user-login">
												<ul class="nav top-nav">
													<li><a data-rel="loginModal" href="#"> conneter </a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
		
		<?php
			include ('header.php');
			include ('selectLivreur.php');
			$livreurid= selectlivreur();
		?>
		

                        <!--shipping rami work-->
						
			<div class="content-container">
				<div class="container">
						<div class="row row-fluid">
						<div class="col-md-12">
							<div class="main-content">
								<form class="commerce">
									<div class="wishlist-title ">
										<h2>My wishlist on WooW</h2>
									</div>
									<table class="shop_table cart wishlist_table">
										<thead>
											<tr>
												<th class="product-remove"></th>
												<th class="product-thumbnail"></th>
												<th class="product-name"><span class="nobr">Product Name</span></th>
												<th class="product-price"><span class="nobr">Unit Price </span></th>
												<th class="product-stock-stauts"><span class="nobr">Stock Status </span></th>
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
			</div>


			<?php
				include ('footer.php');
			?>

	</div>
	</div>
	</div>



	</body>
	

	<script src="dist/js/controle.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtSRG_8GaJhse2ljiW1sy2UV_NkXxjV0E&callback=initMap"
		async defer></script>

</html>
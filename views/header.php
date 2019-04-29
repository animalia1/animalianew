<div class="offcanvas open">
			<div class="offcanvas-wrap">
				<div class="offcanvas-user clearfix">
					<a class="offcanvas-user-wishlist-link" href="wishlist.php">
						<i class="fa fa-heart-o"></i> My Wishlist
					</a>
					<a class="offcanvas-user-account-link" href="my-account.html">
						<i class="fa fa-user"></i> Login
					</a>
				</div>
				<nav class="offcanvas-navbar">
					<ul class="offcanvas-nav">
						<li class="menu-item-has-children dropdown current-menu-ancestor">
							<a href="./" class="dropdown-hover">Home <span class="caret"></span></a>
							
						</li>
						
						<li><a href="collection.html">Collections</a></li>
						<li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-hover">Blog <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="blog-default.html">Blog Default</a></li>
								<li><a href="blog-center.html">Blog Center</a></li>
								<li><a href="blog-masonry.html">Blog Masonry</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-hover">Pages <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="about-us.html">About us</a></li>
								<li><a href="contact-us.html">Contact Us</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="404.html">404</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="wrapper" class="wide-wrap">
			<div class="offcanvas-overlay"></div>
			<header class="header-container header-type-classic header-navbar-classic header-scroll-resize">
				
				<div class="navbar-container">
					<div class="navbar navbar-default navbar-scroll-fixed ">
						<div class="navbar-default-wrap">
							<div class="container">
								<div class="row">
									<div class="navbar-default-col">
										<div class="navbar-wrap">
											<div class="navbar-header">
												<button type="button" class="navbar-toggle">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar bar-top"></span>
													<span class="icon-bar bar-middle"></span>
													<span class="icon-bar bar-bottom"></span>
												</button>
												<a class="navbar-search-button search-icon-mobile" href="#">
													<i class="fa fa-search"></i>
												</a>
												<a class="cart-icon-mobile" href="#">
													<i class="elegant_icon_bag"></i><span>0</span>
												</a>
												<a class="navbar-brand" href="index.php">
													<img class="logo" alt="WOOW" src="images/logo.png">
													<img class="logo-fixed" alt="WOOW" src="images/logo-fixed.png">
													<img class="logo-mobile" alt="WOOW" src="images/logo-mobile.png">
												</a>
											</div>
											<nav class="collapse navbar-collapse primary-navbar-collapse">
												<ul class="nav navbar-nav primary-nav">
													<li class="current-menu-item menu-item-has-children dropdown">
														<a href="./index.php" class="dropdown-hover">
															<span class="underline">Home</span> <span class="caret"></span>
														</a>
													</li>

													
													<li class="menu-item-has-children dropdown">
														<a href="#" class="dropdown-hover">
															<span class="underline">oiseau</span> <span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
														<?PHP
															include "../core/produitC.php";
															$category1C=new categoryC();
															$listecategory=$category1C->afficherCategoryan('oiseaux');
																foreach($listecategory as $row){  
	                             
															?>
															<li><a href="cat-detail.php?<?php echo "cat=".$row["cat_title"]."&type=".$row["type_animaux"]; ?>"><?php echo $row["cat_title"]; ?></a></li>
															
														<?php } ?>
														</ul>
													</li>
													<li class="menu-item-has-children dropdown">
														<a href="#" class="dropdown-hover">
															<span class="underline">CHAT</span> <span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
														<?PHP
															$category1C=new categoryC();
															$listecategory=$category1C->afficherCategoryan('chats');
																foreach($listecategory as $row){  
	                             
															?>
															<li><a href="cat-detail.php?<?php echo "cat=".$row["cat_title"]."&type=".$row["type_animaux"]; ?>"><?php echo $row["cat_title"]; ?></a></li>
															
														<?php } ?>
														</ul>
													</li>	


													<li class="menu-item-has-children dropdown">
														<a href="#" class="dropdown-hover">
															<span class="underline">chien</span> <span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
														<?PHP
															$category1C=new categoryC();
															$listecategory=$category1C->afficherCategoryan('chiens');
																foreach($listecategory as $row){  
	                             
															?>
															<li><a href="cat-detail.php?<?php echo "cat=".$row["cat_title"]."&type=".$row["type_animaux"]; ?>"><?php echo $row["cat_title"]; ?></a></li>
															
														<?php } ?>
														</ul>
													</li>	
													
													
													<li class="menu-item-has-children dropdown">
														<a href="#" class="dropdown-hover">
															<span class="underline">Contact</span> <span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li><a href="about-us.html">About us</a></li>
															<li><a href="contact-us.html">Contact Us</a></li>
															<li><a href="faq.html">FAQ</a></li>
															<li><a href="404.html">404</a></li>
														</ul>
													</li>
												</ul>
											</nav>
											<div class="header-right">
												<div class="navbar-search">
													<a class="navbar-search-button" href="#">
														<i class="fa fa-search"></i>
													</a>
													<div class="search-form-wrap show-popup hide"></div>
												</div>
												<div class="navbar-minicart navbar-minicart-topbar">
													<div class="navbar-minicart">
														<a class="minicart-link" href="#">
															<span class="minicart-icon">
																<i class="fa fa-shopping-cart"></i>
																<span>0</span>
															</span>
														</a>
													</div>
												</div>
												<div class="navbar-wishlist">
													<a class="wishlist" href="wishlist.php">
														<i class="fa fa-heart-o"></i>
													</a>
												</div>



												<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h5 class="modal-title">Merci d'ecrire un feedback concernant votre derniere commande</h5>
													</div>
													
													<form method="get" action="admin/traitement.php">
													<div class="modal-body">
															<div class="form-group">
																<input type="hidden" name="idclient" value="<?php echo $_SESSION['id'] ?>"/>
																<label for="message-text" class="control-label mb-1"style="text-align:left;float:left;">Message:</label>
																<textarea name="message"class="form-control" id="message-text"></textarea>
															</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">fermer</button>
														<input type="submit" class="btn btn-danger">
													</div>
													
													</form>
												</div>
											</div>
										</div>




												<div class="navbar-user">
													<a  class="wishlist"  alt="default" data-toggle="<?php if(isset($_SESSION['msg'])){if($_SESSION['msg']){echo "modal";}} ?>" data-target="#responsive-modal">
															<span class="minicart-icon">
													<i class="fa fa-comment-o"></i>
													<span><?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; else echo "0"; ?></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="header-search-overlay hide">
							<div class="container">
								<div class="header-search-overlay-wrap">
									<form class="searchform">
										<input type="search" class="searchinput" name="s" autocomplete="off" value="" placeholder="Search..."/>
									</form>
									<button type="button" class="close">
										<span aria-hidden="true" class="fa fa-times"></span>
										<span class="sr-only">Close</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			
		<!-- Sweet-Alert  -->
	<script src="../vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
		
		<script src="../dist/js/sweetalert-data.js"></script>
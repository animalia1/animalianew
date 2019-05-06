<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Shop Detail 1 | HTML Commerce Template</title>
		<link rel="shortcut icon" href="images/favicon.ico">

		<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'/>
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

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body>
		<?php
		
		session_start();
		include ("header.php"); 
			include ("../core/favorisC.php");
			include "../core/CommC.php";
  $db = config::getConnexion();
  $id= $_REQUEST['id'];
$req4="SElECT * From produit where id= $id";
$listeP=$db->query($req4);
$comm1C=new CommC();
$listeComm=$comm1C->afficherComms();
$reaction1C=new reactionC();
$listereaction=$reaction1C->afficherreactions();
$req="SELECT p.id, p.image, SUM(s.etat) total 
FROM produit p LEFT JOIN avis s
ON p.id = s.id_prod where p.id= $id

GROUP BY p.id ";
$listePP=$db->query($req);
		?>
		<?php 
			if(isset($_REQUEST['user'])){
				$favorisC = new favorisC();
				$favorisC->ajouterFavoris($_REQUEST['user'],$_REQUEST['id']);
			}
			?>
			
			<?PHP
				$produitA=new produitC();
				$produit=$produitA->afficherProduitc($_REQUEST['id']);
	                             
			?>
			<div class="content-container no-padding">
				<div class="container-full">
			<div class="heading-container">
				<div class="container heading-standar">
					<div class="page-breadcrumb">
						<ul class="breadcrumb">
							<li>
								<span>
									<a class="home" href="#">
										<span>Home</span>
									</a>
								</span>
							</li>
							<li>
								<span><?php echo $produit['category'];?></span>
							</li>
						</ul>
					</div>
				</div>
			</div>


			
					<div class="row">
						<div class="col-md-12">
							<div class="main-content">
								<div class="commerce">
									<div class="style-1 product">
										<div class="container">
											<div class="row summary-container">
												<div class="col-md-7 col-sm-6 entry-image">
													<div class="single-product-images">
														<div class="single-product-images-slider">
															<div class="caroufredsel product-images-slider" data-synchronise=".single-product-images-slider-synchronise" data-scrollduration="500" data-height="variable" data-scroll-fx="none" data-visible="1" data-circular="1" data-responsive="1">
																<div class="caroufredsel-wrap">
																	<ul class="caroufredsel-items">
																		<li class="caroufredsel-item">






																			<a href="admin/<?php echo $produit['image']; ?>" data-rel="magnific-popup-verticalfit">
																				<img width="600" height="685" src="admin/<?php echo $produit['image']; ?>" alt=""/>
																			</a>
																		</li>
																		
																	</ul>
																	<a href="#" class="caroufredsel-prev"></a>
																	<a href="#" class="caroufredsel-next"></a>
																</div>
															</div>
														</div>
														
													</div>
												</div>
												<form>
																	
												<div class="col-md-5 col-sm-6 entry-summary">
													<div class="summary">
														<h1 class="product_title entry-title"><?php echo $produit['nom']; ?></h1>
														<p class="price">
																<span class="amount"><?php echo $produit['price']." DT";?></span>		
														</p>
														<div class="product-excerpt">
															<p>
															<?php echo $produit['description'];?>
															</p>
														</div>
														<?php 
								foreach ($listePP as $row) {
								echo'<tr>' ;
								
								echo'<td> Nombre de jaime: '.$row['total'].'</td>';
								$id_produit = $row['id'];
								?>
								</form>
						<form action="../core/like.php" method="POST">
						<input type="hidden"  name="id" value="<?php echo $_REQUEST['id'] ?>" title="Qty" />

					    <input type="hidden" value="<?php echo $id_produit ?>" name="id_produit" id="id_serv" > 
						<td>  <button class="btn btn-success" name="likeBTN"><i class="fa fa-thumbs-up"></i></button>
						 <button class="btn btn-danger" name="dislikeBTN"><i class="fa fa-thumbs-down"></i></button> </td>

						</form>
								<?php
						  		echo'</tr>';
						  		# code...
							}
							?>
														<form class="cart" action="admin/traitementCommande.php">
															<div class="add-to-cart-table">
																<div class="quantity">
																<input type="hidden"  name="id" value="<?php echo $_REQUEST['id'] ?>" title="Qty" />
																<input type="hidden"  name="price" value="<?php echo $produit['price'] ?>" />

																	<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4"/>
																</div>
																<button type="submit" class="button">Ajouter au panier</button>
															</div>
														</form>
														<p><a href="<?php if(!(isset($_SESSION['username']))){echo 'shop-detail.php?wishlist=error';} else {echo 'shop-detail.php?id='.$_REQUEST['id'].'&user='.$_SESSION['id'];}?>"><strong>Ajouter au favoris</strong></a></p>
														<div class="clear"></div>
														<div class="product_meta">
															<span class="posted_in">
																Categories: 
																<a href="#"><?php echo $produit['category'];?></a>
															</span>
															
														</div>
														<div class="share-links">
															<div class="share-icons">
																<span class="facebook-share">
																	<a href="#" title="Share on Facebook">
																		<i class="fa fa-facebook"></i>
																	</a>
																</span>
																<span class="twitter-share">
																	<a href="#" title="Share on Twitter">
																		<i class="fa fa-twitter"></i>
																	</a>
																</span>
																<span class="google-plus-share">
																	<a href="#" title="Share on Google +">
																		<i class="fa fa-google-plus"></i>
																	</a>
																</span>
																<span class="linkedin-share">
																	<a href="#" title="Share on Linked In">
																		<i class="fa fa-linkedin"></i>
																	</a>
																</span>
															</div>
														</div>
													</div> 
												</div>
											</div>
										</div>
										<div class="commerce-tab-container">
											<div class="container">
												<div class="col-md-12">
													<div class="tabbable commerce-tabs">
														<ul class="nav nav-tabs">
															<li class="vc_tta-tab ">
													    		<a data-toggle="tab" href="#tab-1">Reactions</a>
													    	</li>
													    	<li class="vc_tta-tab ">
													    		<a data-toggle="tab" href="#tab-2 ">Commentaires</a>
													    	</li>
													  	</ul>
													  	<div class="tab-content">
													    	
													    	<div id="tab-2" class="tab-pane fade">
													    		<div id="comments" class="comments-area">
																	<h2 class="comments-title">There are <span>3</span> Comments</h2>
																	<ol class="comments-list">
																	<?PHP
foreach($listeComm as $row){
	?>
																		<li class="comment">
																			<div class="comment-wrap">
																				<div class="comment-img">
																					<img alt="" src="images/avatar.jpg" class='avatar' height='80' width='80'/>
																				</div>
																				<div class="comment-block">
																					<header class="comment-header">
																						<cite class="comment-author">
																						<?PHP echo $row['name']; ?>
																						</cite>
																						
																					</header>
																					<div class="comment-content">
																						<p>
																						<?PHP echo $row['comment']; ?>
																						</p>
																						<span class="comment-reply">
																						
														<a href="modifierComm.php?login=<?PHP echo $row['login']."&id=". $_REQUEST['id']; ?>" class="btn btn-warning" name="modifier"><i class="fa fa-edit"></i></a>
														 <a href="supprimerComm.php?supprimer=Supprimer&login=<?PHP echo $row['login']."&id=". $_REQUEST['id']; ?>" class="btn btn-danger" name="supprimer"><i class="fa fa-trash"></i></a>
																						</span>
																					</div>
																				</div>
																			</div>
</li>
<?PHP
}
?>
																	

							
																	<div class="comment-respond">
																		<h3 class="comment-reply-title">
																			<span>Ajouter Commentaire</span>
																		</h3>
																		<form class="comment-form" method="POST" action="ajoutComm.php">
																			<div class="row">
																				<div class="comment-form-author col-sm-12">
																				<input readonly type="hidden" name="name" id="id" value="<?php if(isset($_SESSION['username'])){echo $_SESSION['username']; }else{echo "connecter pour faire un commentaire";} ?>"
																				placeholder="Anonymous" required>
																				<span id="missid"></span>																				</div>
																				<input  type="hidden" name="id"  value="<?php echo $_REQUEST['id']; ?>">

																				<div class="comment-form-comment col-sm-12">
																				<textarea <?php if(!(isset($_SESSION['username']))){echo "readonly"; }?> type="text" name="comment" id="idcomm" class="form-control" required cols="40" rows="6"></textarea>
																				<span id="missidcomm"></span>	
																				</div>
																			</div>
																			<div class="form-submit">
																				<input  <?php if(!(isset($_SESSION['username']))){echo "disabled"; }?> class="btn btn-default-outline btn-outline"type="submit" name="ajouter" value="Ajouter" id="bouton"></td>
																				
																			</div>
																		</form>
																	</div>

																	</div>
																		
																</div>






																<div id="tab-1" class="tab-pane fade">
													    		<div id="comments" class="comments-area">
																	
																	

							
																<div class="comment-respond">
																		<h3 class="comment-reply-title">
																			<span>Reactions</span>
																		</h3>
																		<form class="comment-form" method="POST" action="ajoutreaction.php">
																			<div class="row">
																			<div class="comment-form-author col-sm-12">
																				<input type="text" name="idr" id="idr"required>
																				<span id="missidr">	</span>																			</div>
																				<input  type="hidden" name="id"  value="<?php echo $_REQUEST['id']; ?>">

																				<div class="comment-form-comment col-sm-12">
																				<textarea type="text" name="type" id="type2" required cols="40" rows="6"required></textarea>
																				<span id="misstype"></span>	
																				</div>
																			</div>
																			<div class="form-submit">
																				<input class="btn btn-default-outline btn-outline"type="submit" name="ajouter" value="Envoyer" id="bouton"></td>
																				
																			</div>
																		</form>
																	</div>
																	</div>
																		
																</div>








													    	</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
						<div class="container">
							<div class="row row-fluid mb-10">
								<div class="col-sm-12">
									<div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
										<div class="product-slider-title">
											<h3 class="el-heading">Meilleurs produits</h3>
										</div>
										<div class="caroufredsel-wrap">
											<div class="commerce columns-4">
												<ul class="products columns-4" data-columns="4">
													<?php 
													$produit2C=new favorisC();
														$listefavoris=$produit2C->afficherProduitFavoris();
														foreach($listefavoris as $row){ 
													?>
													<li class="product product-no-border style-2">
														<div class="product-container">
															<figure>
																<div class="product-wrap style="cursor: pointer;"">
																	<div class="product-images">
																		<span class="onsale">&hearts;	</span>
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<a href="<?php echo 'shop-detail.php?id='.$row['id'];?>"><img width="328" height="328" style="border-radius:7px;" src="<?php echo 'admin/'.$row['image'];?>" alt=""/></a>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<a href="shop-detail-1.html"><img width="450" height="450" style="border-radius:7px;opacity:.5;" src="<?php echo 'admin/'.$row['image'];?>" alt=""/></a>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="?favoris=<?php echo $row['id'];?>" class="add_to_wishlist" onmouseover="this.style.color='#EC8ABA'"onmouseout="this.style.color=''">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html"><?php echo $row['nom'];?></a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<ins><span class="amount"><?php echo $row['price'].' dt';?></span></ins>
																				</span>
																			</div>
																			<div class="loop-action">
																				<div class="loop-add-to-cart">
																					<a href="#" class="add_to_cart_button">
																						Add to cart
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
		<?php } ?>
												</ul>
											</div>
											<a href="#" class="caroufredsel-prev"></a>
											<a href="#" class="caroufredsel-next"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
									</div> 
									<div class="woo-instagram">
										<h3 class="heading-center-custom">
											<span>Instashop</span>
										</h3>
										<div class="instagram">
											<div class="instagram-wrap">
												<div class="caroufredsel caroufredsel-item-no-padding" data-height="variable" data-scroll-fx="scroll" data-scroll-item="1" data-visible-min="1" data-visible-max="4" data-responsive="1" data-infinite="1" data-autoplay="0" data-circular="1">
													<div class="caroufredsel-wrap">
														<ul class="caroufredsel-items row">
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7HXbHJjB" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7GdlHJi-" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7F21HJi9" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7E8jHJi6" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7DlgnJi2" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7CicnJi1" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7AWbHJiz" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T6_MAnJix" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T6-PbnJiw" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T69ipHJit" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T68pOHJiq" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T672znJip" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
														</ul>
														<a href="#" class="caroufredsel-prev"></a>
														<a href="#" class="caroufredsel-next"></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<footer id="footer" class="footer">
				<div class="footer-newsletter">
					<div class="container">
						<div class="footer-newsletter-wrap">
							<h3 class="footer-newsletter-heading">NEWSLETTER</h3>
							<form class="mailchimp-form">
								<div class="mailchimp-form-content clearfix">
									<label for="subscribe_email" class="hide">Subscribe</label>
									<input type="email" id="subscribe_email" class="form-control" required="required" placeholder="Enter your email..." name="email">
									<button type="submit" class="btn mailchimp-submit">sign up</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="footer-featured">
					<div class="container">
						<div class="row">
							<div class="footer-featured-col col-md-4 col-sm-6">
								<i class="fa fa-money"></i>
								<h4 class="footer-featured-title">
									100% <br> return money
								</h4>
								free return standard order in 30 days 
							</div>
							<div class="footer-featured-col col-md-4 col-sm-6">
								<i class="fa fa-globe"></i>
								<h4 class="footer-featured-title">
									world wide <br> delivery
								</h4>
								free ship for payment over $100
							</div>
							<div class="footer-featured-col col-md-4 col-sm-6">
								<i class="fa fa-clock-o"></i>
								<h4 class="footer-featured-title">
									24h <br> shipment 
								</h4>
								for standard package 
							</div>
						</div>
					</div>
				</div>
				<div class="footer-widget">
					<div class="container">
						<div class="footer-widget-wrap">
							<div class="row">
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_text">
										<div class="textwidget">
											<ul class="address">
												<li>
													<i class="fa fa-home"></i>
													<h4>Address:</h4>
													<p>132 Jefferson Avenue, Suite 22, Redwood City, CA 94872, USA</p>
												</li>
												<li>
													<i class="fa fa-mobile"></i>
													<h4>Phone:</h4>
													<p>(00) 123 456 789</p>
												</li>
												<li>
													<i class="fa fa-envelope"></i>
													<h4>Email:</h4>
													<p><a href="mailto:email@domain.com">email@domain.com</a></p>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_nav_menu">
										<h3 class="widget-title">
											<span>infomation</span>
										</h3>
										<div class="menu-infomation-container">
											<ul class="menu">
												<li><a href="#">About Us</a></li>
												<li><a href="#">Contact Us</a></li>
												<li><a href="#">Term &#038; Conditions</a></li>
												<li><a href="#">Gift Voucher</a></li>
												<li><a href="#">BestSellers</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_nav_menu">
										<h3 class="widget-title">
											<span>Customer Care</span>
										</h3>
										<div class="menu-customer-care-container">
											<ul class="menu">
												<li><a href="#">Support</a></li>
												<li><a href="#">Sitemap</a></li>
												<li><a href="#">FAQ</a></li>
												<li><a href="#">Shipping</a></li>
												<li><a href="#">Returns</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_text">
										<h3 class="widget-title">
											<span>open house</span>
										</h3>
										<div class="textwidget">
											<ul class="open-time">
												<li><span>Mon - Fri:</span><span>8am - 5pm</span> </li>
												<li><span>Sat:</span><span>8am - 11am</span> </li>
												<li><span>Sun: </span><span>Closed</span></li>
											</ul>
											<h3 class="widget-title">
												<span>payment Menthod</span>
											</h3>
											<div class="payment">
												<a href="#"><i class="fa fa-cc-mastercard"></i></a>
												<a href="#"><i class="fa fa-cc-visa"></i></a>
												<a href="#"><i class="fa fa-cc-paypal"></i></a>
												<a href="#"><i class="fa fa-cc-discover"></i></a>
												<a href="#"><i class="fa fa-credit-card"></i></a>
												<a href="#"><i class="fa fa-cc-amex"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright text-center">
					© 2015 WOOW - Responsive Commerce Theme
				</div>
			</footer>
		</div>

		<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userloginModalForm">
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
								<input type="text" id="username" name="log" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" id="password" required value="" name="pwd" class="form-control" placeholder="Password">
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
					<form id="userregisterModalForm">
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
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="user_email">Email</label>
								<input type="email" id="user_email" name="user_email" required class="form-control" value="" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="user_password">Password</label>
								<input type="password" id="user_password" required value="" name="user_password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="user_password">Retype password</label>
								<input type="password" id="cuser_password" required value="" name="cuser_password" class="form-control" placeholder="Retype password">
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
		<div class="minicart-side">
			<div class="minicart-side-title">
				<h4>Shopping Cart</h4>
			</div>
			<div class="minicart-side-content">
				<div class="minicart">
					<div class="minicart-header no-items show">
						Your shopping bag is empty.
					</div>
					<div class="minicart-footer">
						<div class="minicart-actions clearfix">
							<a class="button no-item-button" href="#">
								<span class="text">Go to the shop</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='js/easing.min.js'></script>
		<script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='js/bootstrap.min.js'></script>
		<script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='js/jquery.appear.min.js'></script>
		<script type='text/javascript' src='js/script.js'></script>
		<script type='text/javascript' src='js/swatches-and-photos.js'></script>
		<script type='text/javascript' src='js/jquery.cookie.min.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.init.min.js'></script>
		<script type='text/javascript' src='js/jquery.selectBox.min.js'></script>
		<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='js/jquery.transit.min.js'></script>
		<script type='text/javascript' src='js/jquery.carouFredSel.js'></script>
		<script type='text/javascript' src='js/jquery.magnific-popup.js'></script>

		<script type='text/javascript' src='js/core.min.js'></script>
		<script type='text/javascript' src='js/widget.min.js'></script>
		<script type='text/javascript' src='js/mouse.min.js'></script>
		<script type='text/javascript' src='js/slider.min.js'></script>
		<script type='text/javascript' src='js/jquery-ui-touch-punch.min.js'></script>
		<script type='text/javascript' src='js/price-slider.js'></script>
	</body>
</html>
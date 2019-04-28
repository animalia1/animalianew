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
		<?php include ("header.php"); 
			include ("../core/favorisC.php");
		?>
		<?php 
			if(isset($_REQUEST['user'])){
				$favorisC = new favorisC();
				$favorisC->ajouterFavoris($_REQUEST['user'],$_REQUEST['id']);
			}
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
								<span>Shop Detail 1</span>
							</li>
						</ul>
					</div>
				</div>
			</div>


			
			<?PHP
				$produitA=new produitC();
				$produit=$produitA->afficherProduitc($_REQUEST['id']);
	                             
			?>
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
														<form class="cart">
															<div class="add-to-cart-table">
																<div class="quantity">
																	<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4"/>
																</div>
																<button type="submit" class="button">Add to cart</button>
															</div>
														</form>
														<p><a href="<?php if(!(isset($_SESSION['username']))){echo 'shop-detail.php?wishlist=error';} else {echo 'shop-detail.php?id='.$_REQUEST['id'].'&user='.$_SESSION['id'];}?>"><strong>Add to Wishlist</strong></a></p>
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
													    	<li class="vc_tta-tab active">
													    		<a data-toggle="tab" href="#tab-1">Description</a>
													    	</li>
													    	<li class="vc_tta-tab">
													    		<a data-toggle="tab" href="#tab-2">Reviews</a>
													    	</li>
													  	</ul>
													  	<div class="tab-content">
													    	<div id="tab-1" class="tab-pane fade in active">
													    		<h2>Product Description</h2>
																<h3>Nullam vulputate erat id enim lacinia</h3>
																<h3></h3>
																<p>Vel rutrum odio bibendum. Vestibulum quis metus euismod, porta odio et, lacinia eros. Vestibulum vel lobortis ligula, non mollis diam. Donec eu urna quis nibh consectetur pharetra eget vitae dolor. Duis volutpat orci at</p>
																<p>Curabitur rutrum tristique arcu eget tincidunt. Nullam cursus viverra condimentum. Fusce vel nisi sem. Suspendisse sit amet mauris laoreet velit pretium tempus in quis purus.</p>
																<h3></h3>
																<p>Nullam molestie vulputate magna ac tempus. Quisque ac nibh finibus, tempor nunc a, euismod nunc. Nunc lectus magna, mattis eget libero eu, pharetra dapibus tellus. Aliquam dignissim lacus arcu, eu gravida purus rhoncus nec. Aenean porta tempus diam sit amet consequat. Morbi condimentum hendrerit aliquam. Sed at neque faucibus</p>
																<h3></h3>
																<h3></h3>
																<h3>Aenean aliquet condimentum augue, ut tempor turpis sollicitudin in.</h3>
																<p>Nunc vitae odio mollis, euismod mauris at, finibus felis. Phasellus vestibulum, sem at varius imperdiet, velit risus laoreet tortor, in feugiat massa augue sed nibh. Ut fermentum, ligula eget dictum vulputate, orci risus viverra nulla, non posuere metus orci quis mauris. Vivamus aliquam, purus sit amet ultricies dignissim, libero massa rhoncus mi, et imperdiet mauris mi in leo. Ut viverra, erat non rutrum suscipit, nunc purus porta odio, sit amet egestas ex tellus quis nisl. Nullam vitae egestas lectus. Duis faucibus sagittis nunc non porta. Ut eget tempus justo. Donec iaculis id nibh at rhoncus. Nam sed ex lectus. Sed aliquam imperdiet libero ut sollicitudin.</p>
													    	</div>
													    	<div id="tab-2" class="tab-pane fade">
													    		<div id="comments" class="comments-area">
																	<h2 class="comments-title">There are <span>3</span> Comments</h2>
																	<ol class="comments-list">
																		<li class="comment">
																			<div class="comment-wrap">
																				<div class="comment-img">
																					<img alt="" src="http://placehold.it/80x80" class='avatar' height='80' width='80'/>
																				</div>
																				<div class="comment-block">
																					<header class="comment-header">
																						<cite class="comment-author">
																							John Doe
																						</cite>
																						<div class="comment-meta">
																							<span class="time">10 days ago</span>
																						</div>
																					</header>
																					<div class="comment-content">
																						<p>
																							Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
																						</p>
																						<span class="comment-reply">
																							<a class='comment-reply-link' href='#'>Reply</a>
																						</span>
																					</div>
																				</div>
																			</div>
																			<ol class="children">
																				<li class="comment">
																					<div class="comment-wrap">
																						<div class="comment-img">
																							<img alt="" src="http://placehold.it/80x80" class='avatar' height='80' width='80'/>
																						</div>
																						<div class="comment-block">
																							<header class="comment-header">
																								<cite class="comment-author">
																									Jane Doe
																								</cite>
																								<div class="comment-meta">
																									<span class="time">10 days ago</span>
																								</div>
																							</header>
																							<div class="comment-content">
																								<p>
																									Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
																								</p>
																								<span class="comment-reply">
																									<a class='comment-reply-link' href='#'>Reply</a>
																								</span>
																							</div>
																						</div>
																					</div>
																				</li> 
																			</ol> 
																		</li> 
																		<li class="comment">
																			<div class="comment-wrap">
																				<div class="comment-img">
																					<img alt="" src="http://placehold.it/80x80" class='avatar' height='80' width='80'/>
																				</div>
																				<div class="comment-block">
																					<header class="comment-header">
																						<cite class="comment-author">
																							David Platt
																						</cite>
																						<div class="comment-meta">
																							<span class="time">5 days ago</span>
																						</div>
																					</header>
																					<div class="comment-content">
																						<p>
																							Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
																						</p>
																						<span class="comment-reply">
																							<a class='comment-reply-link' href='#'>Reply</a>
																						</span>
																					</div>
																				</div>
																			</div>
																		</li> 
																	</ol>
																	<div class="comment-respond">
																		<h3 class="comment-reply-title">
																			<span>Leave your thought</span>
																		</h3>
																		<form class="comment-form">
																			<div class="row">
																				<div class="comment-form-author col-sm-12">
																					<input id="author" name="author" type="text" placeholder="Your name" class="form-control" value="" size="30" />
																				</div>
																				<div class="comment-form-email col-sm-12">
																					<input id="email" name="email" type="text" placeholder="email@domain.com" class="form-control" value="" size="30" />
																				</div>
																				<div class="comment-form-comment col-sm-12">
																					<textarea class="form-control" placeholder="Comment" id="comment" name="comment" cols="40" rows="6" ></textarea>
																				</div>
																			</div>
																			<div class="form-submit">
																				<a class="btn btn-default-outline btn-outline" href="#">
																					<span>Post Comment</span>
																				</a>
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
										<div class="container">
											<div class="row">
												<div class="col-sm-12">
													<div class="related products">
														<div class="related-title">
															<h3><span>We know you will love</span></h3>
														</div>
														<ul class="products columns-4" data-columns="4">
															<li class="product product-no-border style-2">
																<div class="product-container">
																	<figure>
																		<div class="product-wrap">
																			<div class="product-images">
																				<span class="onsale">Sale!</span>
																				<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328.jpg" alt=""/></a>
																				</div>
																				<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328alt.jpg" alt=""/></a>
																				</div>
																			</div>
																		</div>
																		<figcaption>
																			<div class="shop-loop-product-info">
																				<div class="info-meta clearfix">
																					<div class="star-rating">
																						<span style="width:0%"></span>
																					</div>
																					<div class="loop-add-to-wishlist">
																						<div class="yith-wcwl-add-to-wishlist">
					                                                                        <div class="yith-wcwl-add-button">
					                                                                            <a href="#" class="add_to_wishlist">
					                                                                                Add to Wishlist
					                                                                            </a>
					                                                                        </div>
					                                                                    </div>
					                                                                </div>
																				</div>
																				<div class="info-content-wrap">
																					<h3 class="product_title">
																						<a href="shop-detail-1.html">Daniel Stromborg Round</a>
																					</h3>
																					<div class="info-price">
																						<span class="price">
																							<del><span class="amount">£23.00</span></del> <ins><span class="amount">£20.00</span></ins>
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
															<li class="product product-no-border style-2">
																<div class="product-container">
																	<figure>
																		<div class="product-wrap">
																			<div class="product-images">
																				<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328.jpg" alt=""/></a>
																				</div>
																				<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328alt.jpg" alt=""/></a>
																				</div>
																			</div>
																		</div>
																		<figcaption>
																			<div class="shop-loop-product-info">
																				<div class="info-meta clearfix">
																					<div class="star-rating">
																						<span style="width:0%"></span>
																					</div>
																					<div class="loop-add-to-wishlist">
																						<div class="yith-wcwl-add-to-wishlist">
					                                                                        <div class="yith-wcwl-add-button">
					                                                                            <a href="#" class="add_to_wishlist">
					                                                                                Add to Wishlist
					                                                                            </a>
					                                                                        </div>
					                                                                    </div>
					                                                                </div>
																				</div>
																				<div class="info-content-wrap">
																					<h3 class="product_title">
																						<a href="shop-detail-1.html">Hans Wegner Shell Chair</a>
																					</h3>
																					<div class="info-price">
																						<span class="price">
																							<span class="amount">&pound;10.75</span>
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
															<li class="product product-no-border style-2">
																<div class="product-container">
																	<figure>
																		<div class="product-wrap">
																			<div class="product-images">
																				<span class="onsale">Sale!</span>
																				<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328.jpg" alt=""/></a>
																				</div>
																				<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328alt.jpg" alt=""/></a>
																				</div>
																			</div>
																		</div>
																		<figcaption>
																			<div class="shop-loop-product-info">
																				<div class="info-meta clearfix">
																					<div class="star-rating">
																						<span style="width:0%"></span>
																					</div>
																					<div class="loop-add-to-wishlist">
																						<div class="yith-wcwl-add-to-wishlist">
					                                                                        <div class="yith-wcwl-add-button">
					                                                                            <a href="<?php if(!(isset($_SESSION['username']))){echo 'shop-detail.php?wishlist=error';} else {echo 'shop-detail.php?id='.$_REQUEST['id'].'&aa='.$_SESSION['id'];}?>" class="add_to_wishlist">
					                                                                                Add to Wishlist
					                                                                            </a>
					                                                                        </div>
					                                                                    </div>
					                                                                </div>
																				</div>
																				<div class="info-content-wrap">
																					<h3 class="product_title">
																						<a href="shop-detail-1.html">Hans Wegner Two Seat Sofa</a>
																					</h3>
																					<div class="info-price">
																						<span class="price">
																							<del><span class="amount">£20.50</span></del> 
																							<ins><span class="amount">£19.00</span></ins>
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
															<li class="product product-no-border style-2">
																<div class="product-container">
																	<figure>
																		<div class="product-wrap">
																			<div class="product-images">
																				<span class="onsale">Sale!</span>
																				<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328.jpg" alt=""/></a>
																				</div>
																				<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328alt.jpg" alt=""/></a>
																				</div>
																			</div>
																		</div>
																		<figcaption>
																			<div class="shop-loop-product-info">
																				<div class="info-meta clearfix">
																					<div class="star-rating">
																						<span style="width:0%"></span>
																					</div>
																					<div class="loop-add-to-wishlist">
																						<div class="yith-wcwl-add-to-wishlist">
					                                                                        <div class="yith-wcwl-add-button">
					                                                                            <a href="#" class="add_to_wishlist">
					                                                                                Add to Wishlist
					                                                                            </a>
					                                                                        </div>
					                                                                    </div>
					                                                                </div>
																				</div>
																				<div class="info-content-wrap">
																					<h3 class="product_title">
																						<a href="shop-detail-1.html">Hans Wegner Desk</a>
																					</h3>
																					<div class="info-price">
																						<span class="price">
																							<del><span class="amount">£20.50</span></del> 
																							<ins><span class="amount">£19.00</span></ins>
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
														</ul>
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
<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Animalia</title>
		<link rel="shortcut icon" href="images/favicon.ico">

		<link rel='stylesheet' href='css/settings.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/swatches-and-photos.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/jquery.selectBox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
		<link rel='stylesheet' href='css/elegant-icon.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/custom.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/magnific-popup.css' type='text/css' media='all'/>
		<link href="../vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

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
		<?php include ("header.php"); 
		if(isset($_GET['login'])){
			echo '<script>swal("Parfait!", "vous ete maintenent connecter", "success");</script>';
		}
		?>
			<div class="content-container no-padding"style="z-index: 1;">
				<div class="container-full">
					<div class="main-content">
						<div class="row row-fluid">
							<div class="col-sm-12">
								<div class="rev_slider_wrapper">
									<div id="rev_slider" class="rev_slider ">
										<ul>  
											<li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide">
 
												<!--<img src="images/slideshow/dummy.png" alt="" width="1920" height="656" data-lazyload="images/slideshow/slider_1920x657.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
												-->
												<div class="tp-caption home1-small-black tp-resizeme" data-x="386" data-y="217" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">
													Tout est disponible 
												</div>
 
												<div class="tp-caption primary-button rev-btn" data-x="528" data-y="342" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;" data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:1px;cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off">
													shop
												</div>
 
												<div class="tp-caption home1-primary tp-resizeme" data-x="427" data-y="261" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">
													chez Animalia !
												</div>
 
												<div class="tp-caption tp-resizeme" data-x="-20" data-y="110" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
													<img src="images/slideshow/cat.png" alt="" width="550" height="500" data-ww="650px" data-hh="500px" data-lazyload="images/slideshow/cat.png">
												</div>
 
												<!--<div class="tp-caption tp-resizeme" data-x="172" data-y="311" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
													<img src="images/slideshow/dummy.png" alt="" width="260" height="303" data-ww="260px" data-hh="303px" data-lazyload="images/slideshow/ipad.png">
												</div>-->
 
												<!--<div class="tp-caption tp-resizeme" data-x="281" data-y="390" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
													<img src="images/slideshow/dummy.png" alt="" width="221" height="228" data-ww="221px" data-hh="228px" data-lazyload="images/slideshow/iphone.png">
												</div>-->
 
												<div class="tp-caption tp-resizeme" data-x="700" data-y="160" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
													<img src="images/slideshow/dog.png" alt="" width="625" height="500" data-ww="625px" data-hh="500px" data-lazyload="images/slideshow/dog.png">
												</div>
											</li>
 
											<li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide">
 
												<!--<img src="images/slideshow/dummy.png" alt="" data-lazyload="images/slideshow/slider_1920x657.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
												-->
 
												<div class="tp-caption tp-resizeme" data-x="-80" data-y="46" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="x:-50px;opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="x:-50px;opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
													<img src="images/slideshow/dummy.png" alt="" width="304" height="523" data-ww="504px" data-hh="523px" data-lazyload="images/products/brit.png">
												</div>
 
												<div class="tp-caption home1-small-black tp-resizeme" data-x="610" data-y="183" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													the best products 2015
												</div>
 
												<div class="tp-caption primary-button rev-btn" data-x="610" data-y="402" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;" data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:1px;cursor:pointer;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off">
													shop now
												</div>
 
												<div class="tp-caption home1-primary tp-resizeme" data-x="610" data-y="227" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													Built-in speakerphone
												</div>
 
												<div class="tp-caption home3-small-black tp-resizeme" data-x="610" data-y="296" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													Suscipit aliquam lorem ornare consectetur integer urna<br> fermentum venenatis, molestie a non phasellus feugiat curae nam<br> orci convallis
												</div>
											</li>
										</ul>
										<div class="tp-bannertimer tp-bottom"></div>
									</div>
								</div>
							</div>
						</div>

						<!--

							shopping container
						-->

						<div class="container" style="z-index:0;">
							<div class="row shipping-policy">
								<div class="policy-featured-col col-md-4 col-sm-6">
									<i class="fa fa-money"></i>
									<h4 class="policy-featured-title">
										100% <br> remboursé 
									</h4>
									Remboursé gratuitement avant 30 jours
								</div>
								<div class="policy-featured-col col-md-4 col-sm-6">
									<i class="fa fa-globe"></i>
									<h4 class="policy-funiseatured-title">
										Livraison <br> Tunis
									</h4>
									Livraison gratuit (Tunis)
								</div>
								<div class="policy-featured-col col-md-4 col-sm-6">
									<i class="fa fa-clock-o"></i>
									<h4 class="policy-featured-title">
										livraison <br>  sous 48 heures 
									</h4>
									Pour les paquets standards
								</div>
							</div>
						</div>

						<!--end-->
						
						<div class="container">
							<div class="row row-fluid mb-10">
								<div class="col-sm-12">
									<div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
										<div class="product-slider-title">
											<h3 class="el-heading">nouveaute</h3>
										</div>
										<div class="caroufredsel-wrap">
											<div class="commerce columns-4">
												<ul class="products columns-4" data-columns="4">
													<?php 
													$produit1C=new produitC();
														$listeproduit=$produit1C->afficherNouveauProduit();
														foreach($listeproduit as $row){ 
													?>
													<li class="product product-no-border style-2">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<span class="onsale">NEW!</span>
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<a href="<?php echo 'shop-detail.php?id='.$row['id'];?>"><img width="328" height="328" src="<?php echo 'admin/'.$row['image'];?>" alt=""/></a>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<a href="shop-detail-1.html"><img width="450" height="450" src="<?php echo 'admin/'.$row['image'];?>" alt=""/></a>
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
						<div class="container-full "style="width:100%; height: 450px; backgroud-color:rgba(232, 67, 147,.6);">
							<div class="row row-fluid  mb-5"style="background-color:rgba(232, 67, 147,.6);">
								<div class="container">
									<div class="col-sm-7 pt-12">
										<p class="white italic size-15 mb-0">Connects wirelessly</p>
										<h2 class="custom_heading white mt-0">Immaculate sound</h2>
										<p class="white">ANIMALIA vous propose un large choix de produits de qualité en alimentation, accessoires et hygiène pour vos animaux de compagnie.
														</br>Ouvert 7j/7 de 9H à 20H</p>
									</div>
									<div class="col-sm-5 pb-3">
										<div class="special-product">
											<div class="special-product-wrap">
												<div class="special-product-image">
													<a href="#">
														<img class="mt-2" width="470" height="470" src="images/store.jpg" alt="special_product"/>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row row-fluid pt-6 pb-6">
								<div class="text-center col-sm-3">
									<div class="box-ft box-ft-5 black">
										<img src="images/thumb_270x470.jpg" alt="">
										<a href="#">
											<span class="bof-tf-title-wrap">
												<span class="bof-tf-title-wrap-2">
													<span class="bof-tf-title">iPad Pro</span>
													<span class="bof-tf-sub-title">Thin.Light.Epic</span>
												</span>
											</span>
										</a>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="box-ft box-ft-5">
										<img src="images/thumb_570x470.jpg" alt="">
										<a href="#">
											<span class="bof-tf-title-wrap">
												<span class="bof-tf-title-wrap-2">
													<span class="bof-tf-title">Accessories</span>
													<span class="bof-tf-sub-title">
														Personalize your iPad with casesand covers. 
													</span>
												</span>
											</span>
										</a>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="box-ft box-ft-5 mb-3">
										<img src="images/thumb_270x220.jpg" alt="">
										<a href="#">
											<span class="bof-tf-title-wrap">
												<span class="bof-tf-title-wrap-2">
													<span class="bof-tf-title">Mixr</span>
													<span class="bof-tf-sub-title">Sync your sound. And your style. </span>
												</span>
											</span>
										</a>
									</div>
									<div class="box-ft box-ft-5">
										<img src="images/thumb_270x220.jpg" alt="">
										<a href="#">
											<span class="bof-tf-title-wrap">
												<span class="bof-tf-title-wrap-2">
													<span class="bof-tf-title">Mac Pro</span>
													<span class="bof-tf-sub-title">Starting at $2,999</span>
												</span>
											</span>
										</a>
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


		<?php 
		if(!($_SESSION['id'])){ $id= $_SESSION['id'];}
		if(!($_SESSION['username'])){ ?>
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
		<?php } ?>
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
		<script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
		<script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>
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
		<script type='text/javascript' src='js/isotope.pkgd.min.js'></script>

		<script type='text/javascript' src='js/extensions/revolution.extension.video.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.slideanims.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.actions.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.layeranimation.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.kenburn.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.navigation.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.migration.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.parallax.min.js'></script>

		<script type="text/javascript">

			var tpj=jQuery;
			
			var revapi7;
			tpj(document).ready(function() {
				if(tpj("#rev_slider").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider");
				}else{
					revapi7 = tpj("#rev_slider").show().revolution({
						sliderType:"standard",
						sliderLayout:"fullwidth",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							onHoverStop:"on",
							touch:{
								touchenabled:"on",
								swipe_threshold: 75,
								swipe_min_touches: 50,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							arrows: {
								style:"gyges",
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:30,
									v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:30,
									v_offset:0
								}
							}
							,
							bullets: {
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								style:"hephaistos",
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:30,
								space:5,
								tmp:''
							}
						},
						gridwidth:1170,
						gridheight:600,
						lazyType:"smart",
						parallax: {
							type:"mouse",
							origo:"slidercenter",
							speed:2000,
							levels:[2,3,4,5,6,7,12,16,10,50],
						},
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
		</script>
	</body>
</html>
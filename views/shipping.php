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
		if(!(isset($_SESSION['username']))){
			header ('location: index.php');
		}?>
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
						<div class="content-container mt-0">
				<div class="container ">
					<div class="row mt-0">                
<h3><span class="number"><i class="icon-bag txt-black mr-10"></i></span><span class="head-font capitalize-font">shipping</span></h3>
<fieldset>
<form method="get" action="admin/traitement.php">
    <div class="row">
        <div class="col-sm-12 mt-20">
            <div class="form-wrap">
                <div class="form-group">
                    <div class="row">

                        <div class="col-md-6 col-xs-12">
                            <label class="control-label mb-10" for="firstName">Nom :</label>
                            <input id="firstName" type="text" name="first_name" class="form-control required" value="" onblur="controlFirstName(this)" />
                            <p style="color:red;" id="fisrtNameAlert"></p>
                        </div>
                        <div class="span1"></div>
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label mb-10" for="lastName">Prenom:</label>
                            <input id="lastName" type="text" name="last_name" class="form-control required" value="" onblur="controlLastName(this)" />
                            <p style="color:red;" id="lastNameAlert"></p>
                        </div>
                    </div>
				</div>
				<!--Google map-->
				<div id="map" class="z-depth-1-half map-container mb-30" style="height: 400px"></div>
				<div class="span1"></div>


				<div class="form-group">
                    <label class="control-label mb-10" for="emailAddress">Adresse:</label>
                    <input id="Address" type="text" name="address" class="form-control" required="" value="" />
                    <p style="color:red;" id="emailAlert"></p>
				</div>
				<div class="span1"></div>
				
                <div class="form-group">
						<div class="row">
							
					<div class="col-md-6 col-xs-12">
                    <label class="control-label mb-10" for="postalCode">Code postale:</label>
                    <input id="postalCode" type="text" name="zip_code"  data-mask="99999-9999" class="form-control required" value="" onblur="controleCodePostale(this)" />
					<p style="color:red;" id="codePostaleAlert"></p>
					</div>

					<div class="span1"></div>
					<div class="col-md-6 col-xs-12">
                    <label class="control-label mb-10" for="phoneNumber">Numero telephone:</label>
                    <input type="text" id="phoneNumber"  data-mask="+40 999 999 999" name="phone_number" class="form-control required" value="" onblur="controleTelephone(this)" />
					<p style="color:red;" id="phoneAlert"></p>
				</div>
					</div>
				</div>
                <div class="form-group">
                    <label class="control-label mb-10" for="emailAddress">Adresse email:</label>
                    <input id="emailAddress" type="text" name="email_address" class="form-control required" value="" onblur="verifMail(this)"/>
                    <p style="color:red;" id="emailAlert"></p>
                </div>
				<input type="hidden" name="prix"  id="prixLivraison2" />
					<input type="hidden" name="date" id="test"  value="" />
                <div class="form-group">
					<label class="control-label mb-10" ></label>
					<label class="control-label mb-10" for="calcul">prix livraison (choisir votre position sur la map) : </label>

                    <label class="control-label mb-10" id="prixLivraison"  style="color:green;" value=""></label>
					
					<input type="hidden" name="orderid"  value="2" />
					<input type="hidden" name="livreurid"  value="<?php echo $livreurid['id']; ?>" />
					<input type="hidden" name="idclient"  value="<?php echo $_SESSION['id']; ?>" />

					<input type="hidden" name="livreurdispo"  value="<?php echo $livreurid['dispo']; ?>" />

                </div>

				<label class="control-label mb-10" for="calcul"><?php $message=calcul($livreurid['dispo']); echo $message; ?></label>
                <div class="form-group mb-0 mt-30">
                        <input type="submit"  class="btn btn-default " id="submitButton" onclick="submit()" >
                    
                </div>
                

            </div>
        </div>
    </div>
	</form>
</fieldset>



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
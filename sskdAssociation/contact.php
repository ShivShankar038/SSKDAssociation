<!DOCTYPE html>
<html class="not-ie no-js" lang="en">
<head>

	<!-- Google Web Fonts
  ================================================== -->
	 <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,300italic,400,500%7cCourgette%7cRaleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

	<!-- Basic Page Needs
  ================================================== -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Noor By Aastha | Contacts</title>

	<meta name="keywords" content="" />
		<meta name="description" content="NoorByAastha Home" />
		<meta name="author" content="" />

		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">	

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- CSS
		================================================== -->
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/grid.css" />
		<link rel="stylesheet" href="css/layout.css" />
		<link rel="stylesheet" href="css/fontello.css" />
		<link rel="stylesheet" href="css/animation.css" />
		<link rel="stylesheet" href="css/animate.css" />
		
		<link rel="stylesheet" href="js/magnific-popup/magnific-popup.css" />
		
		<!-- HTML5 Shiv
		================================================== -->
		<script src="js/jquery.modernizr.js"></script>
		
	</head>
	<body class="header-type-fixed animated">
		<!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->
		<div id="wrapper">
			<!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->	
			<nav id="mobile-advanced" class="mobile-advanced"></nav>
			<!-- - - - - - - - - - - - end Mobile Menu - - - - - - - - - - - - - -->
			<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->	
			<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="header-in">
								<h1 id="logo"><a href="index.html"><img src="images/logo/noor-logo-black@100.png" alt=""></a></h1>
								<nav id="navigation" class="navigation">
									<ul>
										<li>
											<a href="index.html">Home</a>
										</li>
										<li>
											<a href="about-us.html"> About Us</a>
										</li>
										<li>
											<a href="look-book.html">Look Book</a>
										</li>
										<li>
											<a href="services.html">Services</a>
										</li>
										<li>
											<a href="blog.html">Blog</a>
										</li>
										<li>
											<a href="contact.php">Contact</a>
										</li>
									</ul>
								</nav><!--/ #navigation-->
							</div><!--/ .header-in-->		
						</div>
					</div><!--/ .row-->
				</div><!--/ .container-->
			</header><!--/ #header-->
			<!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->
			<!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
			<div id="content">
				
				<section class="section padding-off">
					<div class="project-single-entry" style="height: 150px; margin-bottom: 0px;">
						<img src="images/hd-bg-1.png" alt="" />
					</div>
				</section><!--/ .section-->
				
				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-sm-8 col-sm-push-2 col-sm-pull-2">
								<h2 class="align-center">Get in Touch</h2>
								<div class="section-title">
									<h6>FEEL FREE TO CONTACT US</h6>
								</div>
								<form name="myform" id="myForm" class="contact-form" method="post" action="php/send_email.php" method="post">
									<div class="inputs-block">
										<p class="input-block type-input">
											<input type="text" name="name" id="name" value="" placeholder="Name *" />
										</p>
										<p class="input-block type-input">
											<input type="email" name="new_email" id="new_email" value="" placeholder="Email *" />
										</p>
										<p class="input-block type-input">
											<input type="number" name="phone" id="phone" value="" placeholder="Phone *" />
										</p>
									</div><!--/ .inputs-block-->
									<div class="textarea-block">
										<p class="input-block">
											<textarea name="message" id="message" placeholder="Message *"></textarea>
										</p>
										<p class="input-block">
										<button class="button default submit" type="submit" id="submit" onclick="new_send_email();" ><i class="icon-paper-plane-2"></i></button>
										</p>
									</div><!--/ .textarea-block-->
								</form><!--/ .contact-form-->
							</div>
						</div><!--/ .row-->
						
						<div class="row">
							<div class="col-xs-12">
								
							</div>
						</div><!--/ .row-->
					</div><!--/ .container-->	
				</section><!--/ .section-->
				
				<script>
					function send_email(){
						var email   = $('#new_email').val();
						var name    = $('#name').val();
						var phone    = $('#phone').val();
						var message = $('#message').val();

						var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

					if($('#new_email').val() == null || $('#new_email').val() == ""){
						alert("Email Feild is required");
								return false;

						}else if(!new_email.value.match(filter)){

								alert("Please provide valid email address!");
								new_email.focus;
								return false;

						}else{
						$.post("php/send_mail.php",
							{ email: email, name:name, phone:phone, message: message},

							function(data){
								if(data == 'yes'){
									window.location.reload();
								}
							}
						);
					}
					}
				</script>
				
			</div><!--/ #content-->
			<!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->
			
			<!-- - - - - - - - - - - - - Bottom Footer - - - - - - - - - - - - - - - -->
			<footer class="bottom-footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
								<div class="copyright">
								<img src="images/logo/noor-logo-black@180.png" alt="img">
								<br>
								<ul class="social-icons style-fall align-center">
									<li class="facebook"><a href="https://www.facebook.com/noorbyaastha/">Facebook</a></li>
									<li class="youtube"><a href="https://www.youtube.com/demo/">Pinterest</a></li>
									<li class="instagram"><a href="https://www.instagram.com/noorbyaastha/">Instagram</a></li>
								</ul><!--/ .social-icons-->
									© 2019 Noor By Aastha. All rights reserved.
								</div><!--/ .cppyright-->
							</div>
						</div>
					</div><!--/ .row-->
				</div><!--/ .container-->
			</footer><!--/ .bottom-footer-->	
			<!-- - - - - - - - - - - - end Bottom Footer - - - - - - - - - - - - - - -->
		</div><!--/ #wrapper-->
		<!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
		<!--[if lt IE 9]>
			<script src="js/respond.min.js"></script>
			<script src="js/jquery.selectivizr.min.js"></script>
		<![endif]-->
		<script src="js/plugins.js"></script>
		<script src="js/plugins/min/jquery.easing.1.3-min.js"></script>
		<script src="js/sequence/jquery.sequence.js"></script>
		<script src="js/owl-carousel/owl.carousel.js"></script>
		<script src="js/plugins/min/jquery.mixitup-min.js"></script>
		<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/custom.js"></script>

	</body>
</html>

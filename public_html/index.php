<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>cmd-space web development</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!--	custom css	-->
		<link rel="stylesheet" href="css/main.css">
		<!--	font awesome cdn	-->
		<script src="https://use.fontawesome.com/334aa750b2.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!--		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!--	slick slider cdn for js	-->
		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

		<!-- jQuery Form, Validate, Additional Methods -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js" type="text/javascript"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!--	slick slider cdn for css	-->
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

		<!--	main js file -->
		<script src="js/main.js"></script>
	</head>
	<body>
		<div class="site-wrapper">

			<div class="site-wrapper-inner">

				<div class="cover-container">

					<div class="masthead clearfix">
						<div class="inner">
							<h3 class="masthead-brand">cmd-space</h3>
							<nav>
								<ul class="nav masthead-nav">
									<li class="active"><a href="https://bootcamp-coders.cnm.edu/~mcrane2/cmd-space-com/public_html/">home</a></li>
									<li><a href="#contact-me">contact</a></li>
									<li><a href="https://bootcamp-coders.cnm.edu/~mcrane2/resume/" target="_blank">resum&eacute;</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="container">
						<header>
							<div class="row">
								<div class="col-xs-12">
									<h1 class="text-center">Mason Crane Web Developer</h1>
									<img src="documentation/images/Mason-Crane-Web-Developer.jpg" alt="Mason Crane Web Developer" id="mcwd" class="img-responsive center-block">
									<h2 class="text-center">You stay classy, Albuquerque!</h2>
								</div>
							</div>
						</header>
						<main>

							<!--						<div class="slider fade">-->
							<!--							<div><div class="image"><img src="documentation/images/pwp.png" alt="placeholder"/></div></div>-->
							<!--							<div><div class="image"><img src="documentation/images/pwp%20mobile.png" alt="placeholder2"/></div></div>-->
							<!--						</div>-->
							<div class="row">
								<div class="col-xs-12">
									<!--	placeholder for slider	-->
									<img src="documentation/images/pwp.png" alt="stuffs" class="placeholder-slider center-block">
									<p class="text-center">Above is a placeholder for the eventual slider</p>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<p>I'm sorry, Morty. It's a bummer. In reality you're as dumb as they come. I just wanna die! Snuffles was my slave name, you can call me snowball because my fur is pretty and white. Puh rum pum pow!</p>
									<p>Oh, wow. That's an intense line of questioning, Snuffles Awww, bitch! Allahu blehhhh Akbar! Awww, it's you guys!</p>
									<p>You're missing the point Morty. Why would he drive a smaller toaster with wheels? I mean, does your car look like a smaller version of your house? No. Alien Invasion Tomato Monster Mexican Armada Brothers Who Are Just Regular Brothers Running In A Van From An Asteroid And All Sorts Of Things: The Movie. I know the two of you are very different from each other in a lot of ways, but you have to understand that as far as Grandpa's concerned, you're both pieces of shit! Yeah. I can prove it mathematically. Actually, l-l-let me grab my whiteboard. This has been a long time coming, anyways. It probably has space aids.</p>
								</div>
							</div>

							<!--						<div class="col-md-1"></div>-->
							<!--						<div class="col-md-5 circular">-->
							<!--							<h4 class="text-center">Welcome to a website where your dreams come true...</h4>-->
							<!--						</div>-->
							<!--						<div class="col-md-5 circular">-->
							<!--							<h4 class="text-center">Seriously, this website is that cool!</h4>-->
							<!--						</div>-->
							<div class="row">
								<div class="col-xs-12" id="contact-me">
									<h2 class="text-center">contact me</h2>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-6">
									<form id="contact-form">

										<div class="form-group">
											<label for="contact-name">Name</label>
											<input class="form-control" type="text" id="contact-name" name="contact-name" placeholder="your name..." required>
										</div>

										<div class="form-group">
											<label for="contact-email">Email</label>
											<input class="form-control" type="email" id="contact-email" name="contact-email" placeholder="your email..." required>
										</div>

										<div class="form-group">
											<label for="contact-textarea">Message</label>
											<textarea class="form-control" name="contact-textarea" id="contact-textarea" cols="30" rows="10" placeholder="your message goes here..." required></textarea>
										</div>

										<!--	Google reCAPTCHA -->
										<div class="g-recaptcha" data-sitekey="6LcpdBcUAAAAAMRMZDc-7pGMwurb3FpwpsL6FhYc"></div>

										<button class="btn color-submit">Send!</button>
									</form>
								</div>
							</div>

							<!--empty area for form error/success output-->
							<div class="row">
								<div class="col-xs-12">
									<div id="output-area"></div>
								</div>
							</div>

							<div class="row" id="bottom-media">

								<div class="col-xs-6">
									<h4 class="text-right">Get in touch:</h4>
								</div>

								<div class="col-xs-5">
									<a href="https://www.facebook.com/mason.crane" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
									<a href="https://twitter.com/mecx" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
									<a href="https://www.linkedin.com/in/masoncr/" target="_blank"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
									<a href="https://github.com/cmd-space" target="_blank"><i class="fa fa-github-square fa-3x" aria-hidden="true"></i></a>
								</div>
							</div>

						</main>
					</div>

				</div>
			</div>
		</div>
	</body>
</html>
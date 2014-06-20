<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <title>Ryan Johnston - Web Developer</title>

  <meta name="description" content="Personal portfolio website for Ryan Johnston (aka Johnstonian)">
  <meta name="author" content="Ryan Johnston">
  <meta name="keywords" content="portfolio, web development, cv, resume">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />

  <link type="text/plain" rel="author" href="humans.txt" />

  <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--[if lt IE 9]>
  	<link rel="stylesheet" type="text/css" href="css/ie-styles.css">
		<script type="text/javascript" src="js/iehacks/html5shiv.min.js"></script>
		<script type="text/javascript" src="js/iehacks/respond.min.js"></script>
	<![endif]-->

</head>
<body role="main">

	<header role="banner" class="header">
		<h1 class="hidden">Ryan Johnston - Web Developer</h1>
			<div class="logo-header">
				<a href="#intro-section"><img alt="ryan johnston logo" src="images/logo_name.png" /></a>
			</div>

			<nav class="nav-collapse main-nav" role="navigation">
				<h2 class="hidden">Main Navigation</h2>
				<ul class="nav" role="menu">
					<li class="nav-articles"><a class="waypoint" href="#article-section">Articles</a></li>
					<li class="nav-about"><a class="waypoint" href="#about-section">About</a></li>
					<li class="nav-work"><a class="waypoint" href="#project-section">Recent Work</a></li>
					<li class="nav-contact"><a class="waypoint" href="#contact-section">Contact</a></li>
					<li class="nav-testimonials"><a class="waypoint" href="#testimonial-section">Testimonials</a></li>
				</ul>
				
			</nav>

	</header>

	<section class="section  intro" id="intro-section">
		<h2 class="hidden">Intro Screen</h2>
		<div class="logo-holder">
			<a class="startBtn">
				<div class="ryan">
					<img src="images/logo.png" class="logo" alt="Ryan Johnston - Web Developer" />
				</div>
			</a>
			
			<a class="startBtn"><div class="ship-and-lasers"></div></a>

			<p class="start"><a class="alternate startBtn" href="#article-section">Start</a></p>
		</div>
		
		
		<div class="stars">
			<img src="images/stars.png" class="starImg" alt="" />
		</div>
	</section>
	
	<section class="section  articles" id="article-section">
		<div class="container">
			<h2 class="section-title">Articles</h2>

			<div class="section-border">
				<i class="icon-wrapper  fa  fa-pencil fa-2x"></i>
			</div>

		<div class="grid">
			<div class="column-article" role="article">

				<h3><a href="//johnstonianera.com/responsive-two-column-layout/">Building a Responsive Two Column Layout</a></h3>
				<div class="date-container">
					<p class="date">December 5, 2013</p>
				</div>
				<p>This tutorial will explain how to create a two column layout with one fixed column and one fluid column. The example is basic, but it can be expanded to have multiple columns, even fluid nested columns. We will start with a mobile first view that consists of the columns stacked on top of each other. We will later add media queries to make the columns sit side by side as screen size allows.</p>

				<p class="more"><a href="//johnstonianera.com/responsive-two-column-layout/">Keep Reading <i class="fa fa-long-arrow-right"></i></a></p>
			</div>

			<div class="column-article" role="article">

				<h3><a href="//johnstonianera.com/media-query-management/">Media Query Management</a></h3>
				<div class="date-container">
					<p class="date">November 27, 2013</p>
				</div>
				
				<p>Responsive web design is arguably the de facto standard in web design today. One of the major principles of RWD is implementing media queries into designs to make them more flexible and more adaptive to the media that renders them. There are many wonderful examples on the web that showcase the power of media queries and how they can facilitate more adaptive designs. The examples are often only a few lines of code. This is great for learning, but those examples do not scale well in a real world project. It’s not always obvious how to organize and maintain your style sheet that includes lots of media quries. Especially if you are relatively new to the field.</p>

				<p class="more"><a href="//johnstonianera.com/media-query-management/">Keep Reading <i class="fa  fa-long-arrow-right"></i></a></p>
			</div>

			<div class="column-article" role="article">

				<h3><a href="//johnstonianera.com/media-query-snippet-for-sublime-text/">Media Query Snippet for Sublime Text</a></h3>
				<div class="date-container">
					<p class="date">August 23, 2013</p>
				</div>
				<p>Declaring CSS Media Query rules has become standard practice during my recent responsive design projects. But declaring those rules has stunted my coding flow because I can never remember the correct syntax for a media query.</p>

				<p class="more"><a href="//johnstonianera.com/media-query-snippet-for-sublime-text/">Keep Reading <i class="fa  fa-long-arrow-right"></i></a></p>
			</div>

			<div class="column-article" role="article">

				<h3><a href="//johnstonianera.com/prepros/">Prepros: Preprocessing Made Easy</a></h3>
				<div class="date-container">
					<p class="date">August 14, 2013</p>
				</div>
				<p>Prepros makes it super simple to setup your project with the preprocessing juice it needs. It can do all the heavy lifting for you to preprocess javascript, css, and even images. It compiles LESS, Sass, Stylus, Jade, Slim, Coffeescript, LiveScript, Haml and Markdown. It also handles JS Concatenation. And it does this on the fly while developing in real time.</p>

				<p class="more"><a href="//johnstonianera.com/prepros/">Keep Reading <i class="fa  fa-long-arrow-right"></i></a></p>
			</div>

		</div>

		<a href="//johnstonianera.com">
			<div class="view-all-circle">
				<p class="view-all">View More</p>
			</div>	
		</a>

		</div>
	</section>
	
	<section class="section  about" id="about-section">
		<div class="container">
			<h2 class="section-title">About</h2>

			<div class="section-border">
				<i class="icon-wrapper  fa  fa-gamepad fa-2x"></i>
			</div>

			<p class="center"><strong>I build websites.</strong></p>

			<div class="grid">
				<div class="column-about">
					<p class="about-copy">I'm a full stack developer who loves the web. I'm passionate about semantic and standards based development. Efficient code, intuitive user experiences, and pushing CSS3 standards really knock my socks off. <!-- I'm excited about the future of the web and strive to make it a better experience every day. --></p>

					<p class="about-copy">Like many, I started with web development in the world of Geocities and Angelfire. My latest work has expanded into the modern web landscape of responsive design and mobile first methodologies.</p>
				</div>

				<div class="column-about">
					<p class="about-copy">In addition to my passion for the web, I also enjoy reading fiction, training for adventure runs, listening to music, and playing soccer. I also have a soft spot for video games. My guilty pleasures are retro platformers and any zombie themed game.</p>

					<p class="about-copy">I currently work at COUNTRY Financial where I develop dynamic applications for the web using PHP, MySQL, JavaScript, CSS3, and HTML5.</p>
				</div>
			</div>

			<div class="freelance">
				<p class="freelance-copy">Need help with a project? <br />
					<a class="medium  light-link" href="#contact-section">Send me a message</a> and I'll be glad to help!
				</p>
			</div>
		</div>

		<div class="ground-blue"></div>
	</section>

	<section class="section  skillset" id="skills">
		<h2 class="hidden">Skillset</h2>
		<div class="container">
			<div class="grid  center">
				<div class="pill">
					<div class="skill-wrapper">
					<div class="bolt-holder">
						<i class="bolt  white  fa  fa-bolt"></i>
					</div>
					<p>Skills</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  orange  fa  fa-check"></i>
					</div>
					<p>html</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>css</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>sass</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>javascript</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>php</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>mysql</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
						<div class="check-holder">
							<i class="check  fa  fa-check"></i>
						</div>
						<p>wordpress</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>git</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>svn</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>coldfusion</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>jquery</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>xslt</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>xml</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>db2</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>iis</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>apache</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>linux</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>java</p>
					</div>
				</div>
				<div class="pill">
					<div class="skill-wrapper">
					<div class="check-holder">
						<i class="check  fa  fa-check"></i>
					</div>
					<p>postgresql</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section  hobbies">
		<div class="container">
		<h2 class="section-title  white">In my free time, I enjoy...</h2>

			<div class="grid">
				<div class="column-hobby">
					<div class="hobby-icon">
						<img class="hobby-logo" src="images/music-note.svg" alt="music note" id="music-note" />
					</div>
					<div class="hobby-content">
						<h4>Music</h4>
						<p>Enjoy listening and playing music. I play guitar and bass, as well as the saxophone.</p>
					</div>
				</div>

				<div class="column-hobby">
					<div class="hobby-icon">
						<img class="hobby-logo" src="images/running.svg" alt="person running" id="running" />
					</div>
					<div class="hobby-content">
						<h4>Running</h4>
						<p>Training for adventure runs like <a href="//thezombierun.com" target="zombie_run">The Zombie Run</a> and <a href="//warriordash.com" target="warrior_dash">Warrior Dash</a>.</p>
					</div>
				</div>

				<div class="column-hobby">
					<div class="hobby-icon">
						<img class="hobby-logo" src="images/soccer-ball.svg" alt="soccer ball" id="soccer-ball" />
					</div>
					<div class="hobby-content">
						<h4>Soccer</h4>
						<p>Participating/managing recreational soccer leagues and coaching.</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="section  projects" id="project-section">
		<div class="container">
			<h2 class="section-title">Recent Work</h2>

			<div class="section-border">
				<i class="icon-wrapper  fa  fa-code fa-2x"></i>
			</div>

			<div class="grid">

				<div class="project" id="brs-project">
					
					<div class="screenshot"><img src="images/screenshots/brs/brs-small.jpg" alt="Business Retirement Solutions Website Screenshot" /></div>

					<h3>Business Retirement Solutions</h3>
		  		
		  		<p class="url">url: <a href="//countryretirementplans.com" target="_blank"><strong>countryretirementplans.com</strong></a></p>
					<p><strong>type:</strong> website, responsive</p>
					<p class="technologies"><strong>technologies:</strong> <span class="link-color">html</span>, <span class="link-color">css</span>, <span class="link-color">sass</span>, <span class="link-color">php</span>, <span class="link-color">javascript</span>, <span class="link-color">wordpress</span>, <span class="link-color">modernizr</span>, <span class="link-color">jquery</span>, <span class="link-color">polyfills</span></p>

					<p><strong>description:</strong> Lead developer on COUNTRY's first responsive web design project. I worked with designers and usability folks to develop a responsive website tailored to educating potential clients on the retirement services that COUNTRY Financial has to offer. This website was built with WordPress and responsive design methodologies.</p>

					<p class="more"><a href="project-brs.html">View Project <i class="fa fa-long-arrow-right"></i></a></p>
				</div>

				<div class="project">
					
					<div class="screenshot"><img src="images/screenshots/readingpie/readingpie-small.jpg" alt="Reading Time Pies Website Screenshot" /></div>

					<h3>Reading Time Pies</h3>
					
					<p class="url">url: <a href="https://johnstonianera.com/readingpie/" target="_blank">johnstonianera.com/readingpie</a></p>
					<p><strong>type:</strong> interactive web application using oAuth with Readmill API</p>
					<p class="technologies"><strong>technologies:</strong> <span class="link-color">html</span>, <span class="link-color">css</span>, <span class="link-color">php</span>, <span class="link-color">javascript</span>, <span class="link-color">oAuth</span>, <span class="link-color">Readmill API</span>, <span class="link-color">json</span></p>

					<p><strong>description:</strong> Allows a Readmill user view their reading statistics by viewing their reading times in a pie chart. Each book is divided into a pie slice to show the percentage of total reading time for each book. The user is able to drill down into each book in their library to see more details about the reading statistics for each given book. Also displays highlights for each book the user had read. This is a work in progress.</p>

				</div>

				<div class="project">

					<div class="screenshot"><img src="images/screenshots/aca/aca-small.jpg" alt="Affordable Healthcare Act Website Screenshot" /></div>

					<h3>Affordable Healthcare Act</h3>
					
					<p class="url">urls: <a href="http://www.countryaca.com">countryaca.com</a>, <a href="http://www.countryaca.com/interactive">countryaca.com/interactive</a></p>
					<p><strong>type:</strong> responsive website, javascript interactive</p>
					<p class="technologies"><strong>technologies:</strong> <span class="link-color">html</span>, <span class="link-color">css</span>, <span class="link-color">sass</span>, <span class="link-color">php</span>, <span class="link-color">javascript</span>, <span class="link-color">jquery</span>, <span class="link-color">wordpress</span>, <span class="link-color">modernizr</span>, <span class="link-color">polyfills</span></p>
					<p><strong>description:</strong> Lead Developer on COUNTRY Financial's second responsive design web project. I also created the COUNTRY Green Road javascript interactive that helps potential clients navigate the Affordable Care Act program and decide if it is the right health care option.</p>
					
				</div>
				
				<div class="project">

					<div class="screenshot"><img src="images/screenshots/cf/cf-small.jpg" alt="COUNTRY Financial.com Mobile Screenshot" /></div>
					<h3>COUNTRY Financial.com</h3>
					
					<p class="url">url: <a href="http://www.countryfinancial.com/mobile">countryfinancial.com/mobile</a></p>
					<p><strong>type:</strong> mobile website</p>
					<p class="technologies"><strong>technologies</strong>: <span class="link-color">html</span>, <span class="link-color">css</span>, <span class="link-color">jquery</span>, <span class="link-color">java</span></p>
					
					<p><strong>description:</strong> Converted countryfinancial.com to a mobile version. Used jQuery Mobile for the framework. It was originally a sub-domain, but now is part of the main website. The mobile version of the site will load based on browser/device detection.</p>
					
				</div>

				<div class="project">

					<div class="screenshot"><img src="images/screenshots/spintowin/spintowin-small.jpg" alt="Spin to Win Screenshot" /></div>
					<h3>Spin to Win</h3>
					
					<p class="url">url: <a href="http://johnstonianera.com/projects/spin-to-win">spin-to-win</a></p>
					<p><strong>type:</strong> interactive prize game</p>
					<p class="technologies"><strong>techonologies:</strong> <span class="link-color">html</span>, <span class="link-color">css</span>, <span class="link-color">php</span>, <span class="link-color">javascript</span>, <span class="link-color">flash</span>, <span class="link-color">mysql</span>, <span class="link-color">ajax</span></p>
					<p><strong>description:</strong> A lottery game created for the Road Trips and Guitar Picks campaign. A user logged in to the microsite each day and played the game to try and win a variety of RTGP products. The game was originally develped in Flash (ActionScript 3) and later converted to an HTML5/javascript game.</p>
					
					<p class="more"><a href="//johnstonianera.com/projects/spin-to-win/">View Demo <i class="fa fa-long-arrow-right"></i></a></p>
				</div>

				<div class="project">
					
					<div class="screenshot"><img src="images/screenshots/simplydrive/simplydrive-small.jpg" alt="Simply Drive Mobile Screenshot" /></div>
					<h3>Simply Drive</h3>
					
					<p class="url">url: <a href="http://simplydrive.com/mobile/">simplydrive.com/mobile/</a>, <a href="http://simplydrive.com/course/lesson6.php">lesson6.php</a></p>
					<p><strong>type:</strong> website, mobile website, flash interactive</p>
					<p class="techonologies"><strong>technologies:</strong> <span class="link-color">html</span>, <span class="link-color">css</span>, <span class="link-color">javascript</span>, <span class="link-color">flash</span></p>
					<p><strong>description:</strong> Website created to provide information to students and parents about driving discounts teens can earn by following the Simply Drive program. The website also educates teens about the dangers of driving. The website was then converted to a custom mobile website. I also developed the flash interactive game that helps teach teens the dangers of distractions while driving.</p>
					
				</div>

			</div>
		</div>
	</section>

	<section class="section  contact" id="contact-section">
		<div class="contact-top"></div>
		<div class="container">
			<h2 class="section-title">Let's Chat...</h2>
			<form role="form" name="contact-form" class="validate-form" id="contactForm" method="POST" action="#">
				<div id="errorContainer">
				<p>Please correct the following error(s) before a message can be sent:</p>
					<ul id="errors"></ul>
				</div>
				<fieldset>
					<label for="fullname">Full Name<span class="required">*</span></label>
					<input 
						type="text" 
						class="fullname"
						id="fullname"
						name="fullname"
						placeholder="Full name" 
						required />
					<label for="email">Email<span class="required">*</span></label>
					<input 
						type="email" 
						id="email" 
						class="email" 
						name="email" 
						placeholder="Email" 
						required  />
					<label for="message">Message<span class="required">*</span></label>
					<textarea 
						class="message" 
						id="message" 
						name="message" 
						placeholder="Your message..."
						cols="30" 
						rows="5" 
						required></textarea>

					<input type="submit" name="Send" id="sendBtn" value="Send" />
				</fieldset>
			</form>
		</div>
	</section>

	<section class="section  testimonials" id="testimonial-section">
		<div class="testimonials-top"></div>
		<div class="container">
			<h2 class="section-title">Testimonials</h2>

			<div class="section-border">
				<i class="icon-wrapper  fa  fa-comments fa-2x"></i>
			</div>

			<div class="grid">

				<div class="quote">
					<div class="left-quote"><img alt="double quote icon" src="images/quote.png" width="22" height="22" /></div>
					<div class="endorsement">
						<p>Ryan is fantastic web developer. I have enjoyed working with him. He always meets impossible deadlines. He is my go to guy for mobile development questions. Glad to have him as a colleague.</p>
						<p class="reference">Matt Christensen <span class="orange">| Web/Facebook Developer</span></p>
					</div>
				</div>

				<div class="quote">
					<div class="left-quote"><img alt="double quote icon" src="images/quote.png" width="22" height="22" /></div>
					<div class="endorsement">
						<p>Ryan is a skillful and excellent programmer. He's a great colleague to work beside and definitely an asset to the company. Even when faced with impossible new ideas and designs, he always finds a way to implement them and make them work.</p>
						<p class="reference">Jason Kirchgessner <span class="orange">| Designer at Country Financial</span></p>
					</div>
				</div>

				<div class="quote">
					<div class="left-quote"><img alt="double quote icon" src="images/quote.png" width="22" height="22" /></div>
					<div class="endorsement">
						<p>Ryan is dedicated, always willing to help, and always willing to learn something new. It's a pleasure to work with him.</p>
						<p class="reference">John Bowen <span class="orange">| Usability/Writer at Teleologic Learning Company</span></p>
					</div>
				</div>

				<div class="quote">
					<div class="left-quote"><img alt="double quote icon" src="images/quote.png" width="22" height="22" /></div>
					<div class="endorsement">
						<p>Ryan was a great developer and was eager to learn new things. Good communicator and easy to get along with.</p>
						<p class="reference">Tom Gersic <span class="orange">| Director of Mobile Development at Salesforce.com</span></p>
				</div>
			</div>
		</div>
	</div>
	</section>

	<footer class="footer" role="contentinfo">
		<div class="copyright">
			<p class="footer-copy">&copy; 2014 Ryan Johnston. <a href="humans.txt">humans.txt</a></p>
		</div>
		
		<div class="social-links">
			<a href="//github.com/Johnstonian" title="GitHub profile" target="github">
				<i class="fa fa-2x fa-github right"></i>
			</a>
			<a href="//twitter.com/johnstonian" title="twitter profile" target="twitter">
				<i class="fa fa-2x fa-twitter right"></i>
			</a>
			<a href="//linkedin.com/pub/ryan-johnston/8/103/5bb" title="LinkedIn profile" target="linkedin">
				<i class="fa fa-2x fa-linkedin right"></i>
			</a>
		</div>
	</footer>

	<script type="text/javascript" src="js/main.min.js"></script>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="js/iehacks/validate/jquery.validate.js"></script>
		<script type="text/javascript" src="js/iehacks/columns.ie.fixer.js"></script>
	<![endif]-->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-621676-2', 'johnstonianera.com');
	  ga('send', 'pageview');

	</script>
</body>

</html>
<!DOCTYPE html>
<html class="background-100-e">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Md Kanok Hossain</title>
		<meta name="description" content="Md Kanok Hossain" />
		<meta name="keywords" content="onepage, Md Kanok Hossain" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{asset('/')}}front-end/bower_components/fontawesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="{{asset('/')}}front-end/bower_components/animate.css/animate.min.css" />
		<link rel="stylesheet" href="{{asset('/')}}front-end/bower_components/minicolors/jquery.minicolors.css" />
		<link rel="stylesheet" href="{{asset('/')}}front-end/bower_components/slick.js/slick/slick.css" />
		<link rel="stylesheet" href="{{asset('/')}}front-end/bower_components/slick.js/slick/slick-theme.css" />
		<link rel="stylesheet" href="{{asset('/')}}front-end/bootstrap/dist/css/bootstrap-custom.min.css" />
		<link rel="stylesheet" href="{{asset('/')}}front-end/lib/linecons/style.css" />
		<link rel="stylesheet" href="{{asset('/')}}front-end/styles/style.min.css" />
		<link rel="stylesheet" href="{{asset('/')}}front-end/theme-custom.css" />
		<link rel="shortcut icon" href="{{asset('/')}}front-end/favicon-icon.jpg" type="image/x-icon" />
		<link rel="apple-touch-icon" href="apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png" />
		<style>
			.font{
				font-family: fantasy;
			}
			.ring-container {
				position: relative;
			}

			.w {
				width: 15px;
				height: 15px;
				background-color: #62bd19;
				border-radius: 50%;
				position: absolute;
			}
			.w{
				margin:0%;
			}

			.ringring {
				border: 3px solid #62bd19;
				-webkit-border-radius: 30px;
				height: 25px;
				width: 25px;
				position: absolute;
				-webkit-animation: pulsate 1s ease-out;
				-webkit-animation-iteration-count: infinite; 
				opacity: 0.0
			}
			@-webkit-keyframes pulsate {
				0% {-webkit-transform: scale(0.1, 0.1); opacity: 0.0;}
				50% {opacity: 1.0;}
				100% {-webkit-transform: scale(1.2, 1.2); opacity: 0.0;}
			}
			
			.losange, .losange div {
			margin: 0 auto;
			transform-origin: 50% 50%;
			overflow: hidden;
			width: 100px;
			height: 100px;
			}
			.losange {
			transform: rotate(45deg) translateY(10px);
			}
			.losange .los1 {
			width: 255px;
			height: 255px;
			transform: rotate(-45deg) translateY(-74px);
			}
			.losange .los1 .bg-img {
			width: 50%;
			height: auto;
			background-image: url('{{asset('/')}}front-end/profile-photo.jpg');
			height: 50%;
			background-size: cover;
			background-position: top;
			}
		</style>
	</head>
	<body class="state1 background-100-e">
		<div class="ext-nav background-95-h page-transition">
			<div class="view half-height">
				<img alt class="bg static" src="{{asset('/')}}front-end/images/placeholders/1920x1200-2.jpg" />
				<div class="content no-top-padding no-bottom-padding  full-height">
					<div class="container-fluid  full-height">
						<div class="row full-height">
							<a href="blog.html" class="col-md-12 colors-e background-95-e full-height">
								<div>
									<span class="side-label">All The Latest</span>
									<span class="side-title">Blog</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="page-border bottom colors-e background-solid"><a href="#top" class="hover-effect">To <span class="highlight">Top</span></a></div>
		<div class="page-border left colors-e background-solid">
			<ul>
				<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="http://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
				<li><a target="blank" href="https://www.fiverr.com/developer_kanok?up_rollout=true" target="_blank"><i> FI</i></a></li>
			</ul>
		</div>
		<!-- BEGIN: Top menu -->
		<div class="page-border right colors-e background-solid"></div>
		<nav class="navbar navbar-default navbar-fixed-top page-transition colors-e background-solid" role="navigation" id="top-nav">
			<div class="container">
				<div class="navbar-header">
					<!--<a class="menu-toggle ext-nav-toggle visible-xs-block" data-target=".ext-nav" href="#"><span></span></a>-->
					<a class="menu-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#"><span></span></a>
					<a class="navbar-brand" href="">MD KANOK<span class="highlight"> HOSSAIN</span></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home" class="hover-effect">Home</a></li>
						<li><a href="#about" class="hover-effect">About</a></li>
						<li><a href="#services" class="hover-effect">Services</a></li>
						<li><a href="#work" class="hover-effect">Work</a></li>
						<li><a href="#process" class="hover-effect">Process</a></li>
						<li><a href="#skills" class="hover-effect">Skills</a></li>
						<li><a href="#contact" class="hover-effect">Contact</a></li>
						<!--
						<li class="hidden-xs"><a class="menu-toggle ext-nav-toggle" data-target=".ext-nav" href="#"><span></span></a></li>
						-->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END: Top menu -->
		<ul id="dot-scroll" class="colors-e background-solid"></ul>
		<div class="overlay-window gallery-overlay colors-f background-95-f" data-overlay-zoom="#work .content">
			<div class="overlay-control background-85-d">
				<a class="previos" href="#"></a>
				<a class="next" href="#"></a>
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view" id="work-details"></div>
			<ul class="loader">
				<li class="background-100-d"></li>
				<li class="background-100-d"></li>
				<li class="background-100-d"></li>
			</ul>
		</div>
		<div class="overlay-window map-overlay colors-f background-95-f">
			<div class="overlay-control background-90-f">
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view">
				<div class="map-canvas" data-latitude="23.774659" data-longitude="90.362953" data-zoom="14">

				</div>
			</div>
		</div>
		<div class="overlay-window credits-overlay colors-g background-95-g">
			<div class="overlay-control background-85-d">
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view">
				<div class="content-container">
					<h3>Credits</h3>
					<ul>
						<li>
							Photos by:
							<ul>
								<li><a target="_blank" href="https://www.flickr.com/photos/katya_alagich/">Katya Alagich</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
								<li><a target="_blank" href="https://www.flickr.com/photos/65047661@N00/">Jim Lukach</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
								<li><a target="_blank" href="https://www.flickr.com/photos/johanl/">Johan Larsson</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
								<li><a target="_blank" href="https://www.flickr.com/photos/johny/">John Kraus</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
								<li><a target="_blank" href="https://www.flickr.com/photos/geishaboy500/">THOR</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
								<li><a target="_blank" href="https://www.flickr.com/photos/stf-o/">stephane</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
								<li><a target="_blank" href="http://www.pexels.com/">Pexels</a>, <a target="_blank" href="http://www.pexels.com/photo-license/">CC0 License</a></li>
								<li><a target="_blank" href="https://stocksnap.io/">Stocksnap</a>, <a target="_blank" href="https://stocksnap.io/license">CC0 License</a></li>
								<li><a target="_blank" href="http://picjumbo.com/">Picjumbo</a>, <a target="_blank" href="http://picjumbo.com/about-author/">Picjumbo License</a></li>
							</ul>
						</li>
						<li>
							Video by:
							<ul>
								<li><a target="_blank" href="http://mazwai.com/">Mazwai</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/3.0/">CC BY 3.0 License</a></li>
							</ul>
						</li>
						<li>
							Icons by:
							<ul>
								<li><a target="_blank" href="http://designmodo.com/">Designmodoh</a>, <a target="_blank" href="http://designmodo.com/linecons-free/">License</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="gate colors-e background-solid">
			<div class="gate-bar background-highlight-e"></div>
			<ul class="loader">
				<li class="background-100-g"></li>
				<li class="background-90-c"></li>
				<li class="background-100-f"></li>
			</ul>
		</div>
		<!-- BEGIN: Page content -->
		<div class="youtube-bg" data-video="2zLQI4Dfi_w" data-mute="yes" data-volume="50" data-alternative="{{asset('/')}}front-end/images/placeholders/1920x1200-0.jpg"></div>
		<section id="home">
			<div class="view">
				<div class="content home-mary full-size colors-a">
					<div class="container">
						<div class="textillate text-center heading  hidden-xs hidden-sm" data-textillate-options="{loop:true, in:{effect:'flipInY', reverse:false}, out:{effect:'flipOutY', reverse:false}}">
							<ul class="texts">
								<li>React JS</li>
								<li>Vue JS</li>
								<li>Laravel</li>
								<li>Codeigniter</li>
								<li>PHP</li>
							</ul>
						</div>
						<h1 class="text-center">Software <span class="highlight">DEVELOPER</span></h1>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<p class="lead text-center">
									I'M A PROFESSIONAL SOFTWARE DEVELOPER WITH +2 YEARS EXPERIENCED.
								</p>
								<p class="text-center"><a href="#about" class="button background-60-d heading-d border-hard">About Me</a><a href="#work" class="button background-60-f heading-f border-hard">My Work</a><a target="blank" href="https://www.fiverr.com/developer_kanok?up_rollout=true" class="button background-60-f heading-f border-hard">HIRE ME AT FIVERR</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="about">
			<div class="view">
				<!-- <img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-1.jpg" /> -->
				<div class="content pane">
					<div class="container-fluid">
						<div class="row hidden-xs hidden-sm">
							<div class="col-md-4 colors-b">
								<div class="row">
									<div class="col-xs-12 banner-cell">
										<h3 class="light-font-weight">Laravel</h3>
										<p class="title">PHP</p>
									</div>
									<div class="col-xs-12 success heading-b banner-cell">
										EXPERT
										<br /> 
									</div>
								</div>
							</div>
							<div class="col-md-4 colors-c">
								<div class="row">
									<div class="col-xs-12 banner-cell">
										<h3 class="light-font-weight">React Js</h3>
										<p class="title">FRAMEWORK</p>
									</div>
									<div class="col-xs-12 warning heading-c banner-cell">
										INTERMIDIATE
										<br /> 
									</div>
								</div>
							</div>
							<div class="col-md-4 colors-d">
								<div class="row">
									<div class="col-xs-12 banner-cell">
										<h3 class="light-font-weight">Vue js</h3>
										<p class="title">Framework</p>
									</div>
									<div class="col-xs-12 info heading-d banner-cell">
										EXPERT
										<br /> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="view">
				<img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-2.jpg" /><img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-0.jpg" />
				<div class="content colors-e">
					<div class="container">
						<h2>About</h2>
						<p class="header-details"><span class="highlight">I Create</span> Awesome Stuff</p>
						<p class="lead">I'm a Software developer with<span class="highlight"> +2 Years experienced</span>. I am expert in React js, Vue js and php framework (Laravel, CodeIgniter). i would like to help you to make web software. I always make sure my clients are satisfied with the work i do. lastly, I take a great pride in my prompt and professional communication. I would love to discuss the job with you further and hope here from you soon.
						</p>
						<!-- new line add-->
						<h5 class="header-details"><span class="highlight">Professional</span> Experience</h5>
						<div class="row">
							<div class="col-md-4">
								<div class="col-icon">
									<i class="fa fa-suitcase"></i>
								</div>
								<div class="col-content">
									<h4><span class="">Dhrubok Infotech Services Ltd.</span>
										<span class="circle w ringring" ></span>
									</h4>
									<h6>Software<span class="highlight"> Engineer</span></h6>
									<p class="font"><span class="highlight">SEPTEMBER 23, 2020 - PRESENT</span></p>
									<p class="font"><span class="highlight fa fa-map-marker"></span> 4th Floor, Khan Niketon, 9/2 Ring Road, Dhaka 1207</p>
									<p><span class="work">Developing software in PHP (Framework:Laravel ) and MySQL Database.</span></p>
									<p><span class="work">User access control base on role (ACL).</span></p>
									<p><span class="work">Use database transaction for safe data storage in multiple dependend table.</span></p>
									<p><span class="work">SRS Base Application development and modification.</span></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="col-icon">
									<i class="fa fa-suitcase"></i>
								</div>
								<div class="col-content">
									<h4><span class="">Braintech System Limited.</span></h4>
									<h6>Web<span class="highlight"> Developer</span></h6>
									<p class="font"><span class="highlight">DECEMBER 15, 2019 - SEPTEMBER 23, 2020</span></p>
									<p class="font"><span class="highlight fa fa-map-marker"></span> H#260, Malibag, Dhaka-1217 ,Dhaka</p>								
									<p><span class="work">Developing software in PHP (Framework: CodeIgniter, laravel) and MySQL Database &amp; VUE js</span></p>
									<p><span class="work">Use database transaction for safe data storage in multiple dependend table.</span></p>
									<p><span class="work">SRS Base Application development and modification.</span></p>
									<p><span class="work">Supporting existing software products and making progress on new products.</span></p>		
								</div>
							</div>
							<div class="col-md-4">
								<div class="col-icon">
									<i class="fa fa-suitcase"></i>
								</div>
								<div class="col-content">
									<h4><span class="">Euro Bangla IT Limited.</span></h4>
									<h6>Laravel<span class="highlight"> Developer</span></h6>
									<p class="font"><span class="highlight">NOVEMBER 2018- DECEMBER 15, 2019</span></p>
									<p class="font"><span class="highlight fa fa-map-marker"></span> R#30,H#436,Mohakhali DOHS,Dhaka</p>
									<p><span class="work">Developing software in PHP (Framework:Laravel ) and MySQL Database, Vue Js.</span></p>
									<p><span class="work">User access control base on role (ACL).</span></p>
									<p><span class="work">Use database transaction for safe data storage in multiple dependend table.</span></p>
									<p><span class="work">SRS Base Application development and modification.</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="view" id="how-we-work">
				<div class="content colors-h">
					<div class="container">
						<h3><span class="highlight">How</span> I Work</h3>
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<p class="text-center">I would be appreciated if you give me an opportunity to work with you and to execute myself with your support.</p>
							</div>
						</div>
						<div class="row icon-set">
							<div class="col-md-3 text-center">
								<p>
									<i class="li_eye circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
								</p>
								<p class="title"><span class="underline-text">Awesome</span></p>
								<p>“Just one small positive thought in the morning can change your whole day.”
									Dalai Lama.</p>
							</div>
							<div class="col-md-3 text-center">
								<p>
									<i class="li_like circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
								</p>
								<p class="title"><span class="underline-text">Innovative</span></p>
								<p>“What is now proved was once only imagined.” William Blake.</p>
							</div>
							<div class="col-md-3 text-center">
								<p>
									<i class="li_paperplane circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
								</p>
								<p class="title"><span class="underline-text">Creative</span></p>
								<p>"Creativity doesn't wait for that perfect moment. It fashions its own perfect moments out of ordinary ones." Bruce Garrabrandt.</p>
							</div>
							<div class="col-md-3 text-center">
								<p>
									<i class="li_lab circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
								</p>
								<p class="title"><span class="underline-text">Experimental</span></p>
								<p>"The true method of knowledge is experiment". William Blake.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="services">
			<div class="view">
				{{-- <img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-0.jpg" /><img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-1.jpg" /> --}}
				<div class="content colors-h">
					<div class="container">
						<h2>Services</h2>
						<p class="header-details"><span class="highlight">I am Here</span> For You</p>
						<p class="lead">I've been developing applications for the web using mostly PHP.</p>
						<div class="row icon-set" class="content colors-h">
							<div class="col-md-3 text-center">
								<p>
									<i class="circle scroll-in-animation background-20 heading" data-animation="fadeInUp">
										<svg width="100" height="50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="0.97em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 264"><path d="M255.856 59.62c.095.351.144.713.144 1.077v56.568c0 1.478-.79 2.843-2.073 3.578L206.45 148.18v54.18a4.135 4.135 0 0 1-2.062 3.579l-99.108 57.053c-.227.128-.474.21-.722.299c-.093.03-.18.087-.278.113a4.15 4.15 0 0 1-2.114 0c-.114-.03-.217-.093-.325-.134c-.227-.083-.464-.155-.68-.278L2.073 205.938A4.128 4.128 0 0 1 0 202.36V32.656c0-.372.052-.733.144-1.083c.031-.119.103-.227.145-.346c.077-.216.15-.438.263-.639c.077-.134.19-.242.283-.366c.119-.165.227-.335.366-.48c.119-.118.274-.206.408-.309c.15-.124.283-.258.453-.356h.005L51.613.551a4.135 4.135 0 0 1 4.125 0l49.546 28.526h.01c.165.104.305.232.454.351c.134.103.284.196.402.31c.145.149.248.32.371.484c.088.124.207.232.279.366c.118.206.185.423.268.64c.041.118.113.226.144.35c.095.351.144.714.145 1.078V138.65l41.286-23.773V60.692c0-.36.052-.727.145-1.072c.036-.124.103-.232.144-.35c.083-.217.155-.44.268-.64c.077-.134.19-.242.279-.366c.123-.165.226-.335.37-.48c.12-.118.269-.206.403-.309c.155-.124.289-.258.454-.356h.005l49.551-28.526a4.13 4.13 0 0 1 4.125 0l49.546 28.526c.175.103.309.232.464.35c.128.104.278.197.397.31c.144.15.247.32.37.485c.094.124.207.232.28.366c.118.2.185.423.267.64c.047.118.114.226.145.35zm-8.115 55.258v-47.04l-17.339 9.981l-23.953 13.792v47.04l41.297-23.773h-.005zm-49.546 85.095V152.9l-23.562 13.457l-67.281 38.4v47.514l90.843-52.3zM8.259 39.796v160.177l90.833 52.294v-47.505L51.64 177.906l-.015-.01l-.02-.01c-.16-.093-.295-.227-.444-.34c-.13-.104-.279-.186-.392-.3l-.01-.015c-.134-.129-.227-.289-.34-.433c-.104-.14-.227-.258-.31-.402l-.005-.016c-.093-.154-.15-.34-.217-.515c-.067-.155-.154-.3-.196-.464v-.005c-.051-.196-.061-.403-.082-.604c-.02-.154-.062-.309-.062-.464V63.57L25.598 49.772l-17.339-9.97v-.006zM53.681 8.893L12.399 32.656l41.272 23.762L94.947 32.65L53.671 8.893h.01zm21.468 148.298l23.948-13.786V39.796L81.76 49.778L57.805 63.569v103.608l17.344-9.986zM202.324 36.935l-41.276 23.762l41.276 23.763l41.271-23.768l-41.27-23.757zm-4.13 54.676l-23.953-13.792l-17.338-9.981v47.04l23.948 13.787l17.344 9.986v-47.04zm-94.977 106.006l60.543-34.564l30.264-17.272l-41.246-23.747l-47.489 27.34l-43.282 24.918l41.21 23.325z" fill="#FF2D20"/></svg>

									</i>
								</p>
								<p class="title"><span class="underline-text">Laravel</span></p>
							</div>
							<div class="col-md-3 text-center">
								<p>
									<i class="circle scroll-in-animation background-20 heading" data-animation="fadeInUp">
										<svg  width="100" height="50"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.16em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 221"><path d="M204.8 0H256L128 220.8L0 0h97.92L128 51.2L157.44 0h47.36z" fill="#41B883"/><path d="M0 0l128 220.8L256 0h-51.2L128 132.48L50.56 0H0z" fill="#41B883"/><path d="M50.56 0L128 133.12L204.8 0h-47.36L128 51.2L97.92 0H50.56z" fill="#35495E"/></svg>
									</i>
								</p>
								<p class="title"><span class="underline-text">Vue Js</span></p>
							</div>
							<div class="col-md-3 text-center">
								<p>
									<i class="li_like circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
								</p>
								<p class="title"><span class="underline-text">React Js</span></p>
							</div>
							<div class="col-md-3 text-center">
								<p>
									<i class="circle scroll-in-animation background-20 heading" data-animation="fadeInUp">
										<svg   width="100" height="50"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.9em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 135"><defs><radialGradient id="IconifyId-173ab104d49-d8aa10-5" cx=".837" cy="-125.811" r="363.057" gradientTransform="matrix(.463 0 0 .463 76.464 81.918)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset=".5" stop-color="#4c6b97"/><stop offset="1" stop-color="#231f20"/></radialGradient></defs><ellipse fill="url(#IconifyId-173ab104d49-d8aa10-5)" cx="128" cy="67.3" rx="128" ry="67.3"/><ellipse fill="#6181B6" cx="128" cy="67.3" rx="123" ry="62.3"/><g fill="#FFF"><path d="M152.9 87.5l6.1-31.4c1.4-7.1.2-12.4-3.4-15.7c-3.5-3.2-9.5-4.8-18.3-4.8h-10.6l3-15.6c.1-.6 0-1.2-.4-1.7s-.9-.7-1.5-.7h-14.6c-1 0-1.8.7-2 1.6l-6.5 33.3c-.6-3.8-2-7-4.4-9.6c-4.3-4.9-11-7.4-20.1-7.4H52.1c-1 0-1.8.7-2 1.6L37 104.7c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h14.7c1 0 1.8-.7 2-1.6l3.2-16.3h10.9c5.7 0 10.6-.6 14.3-1.8c3.9-1.3 7.4-3.4 10.5-6.3c2.5-2.3 4.6-4.9 6.2-7.7l-2.6 13.5c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h14.6c1 0 1.8-.7 2-1.6l7.2-37h10c4.3 0 5.5.8 5.9 1.2c.3.3.9 1.5.2 5.2L134.1 87c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h15c.9-.3 1.7-1 1.9-1.9zm-67.6-26c-.9 4.7-2.6 8.1-5.1 10c-2.5 1.9-6.6 2.9-12 2.9h-6.5l4.7-24.2h8.4c6.2 0 8.7 1.3 9.7 2.4c1.3 1.6 1.6 4.7.8 8.9z"/><path d="M215.3 42.9c-4.3-4.9-11-7.4-20.1-7.4h-28.3c-1 0-1.8.7-2 1.6l-13.1 67.5c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h14.7c1 0 1.8-.7 2-1.6l3.2-16.3h10.9c5.7 0 10.6-.6 14.3-1.8c3.9-1.3 7.4-3.4 10.5-6.3c2.6-2.4 4.8-5.1 6.4-8c1.6-2.9 2.8-6.1 3.5-9.6c1.7-8.7.4-15.5-3.9-20.5zM200 61.5c-.9 4.7-2.6 8.1-5.1 10c-2.5 1.9-6.6 2.9-12 2.9h-6.5l4.7-24.2h8.4c6.2 0 8.7 1.3 9.7 2.4c1.4 1.6 1.7 4.7.8 8.9z"/></g><g fill="#000004"><path d="M74.8 48.2c5.6 0 9.3 1 11.2 3.1c1.9 2.1 2.3 5.6 1.3 10.6c-1 5.2-3 9-5.9 11.2c-2.9 2.2-7.3 3.3-13.2 3.3h-8.9l5.5-28.2h10zM39 105h14.7l3.5-17.9h12.6c5.6 0 10.1-.6 13.7-1.8c3.6-1.2 6.8-3.1 9.8-5.9c2.5-2.3 4.5-4.8 6-7.5s2.6-5.7 3.2-9c1.6-8 .4-14.2-3.5-18.7s-10.1-6.7-18.6-6.7H52.1L39 105z"/><path d="M113.3 19.6h14.6l-3.5 17.9h13c8.2 0 13.8 1.4 16.9 4.3c3.1 2.9 4 7.5 2.8 13.9L151 87.1h-14.8l5.8-29.9c.7-3.4.4-5.7-.7-6.9c-1.1-1.2-3.6-1.9-7.3-1.9h-11.7l-7.5 38.7h-14.6l13.1-67.5z"/><path d="M189.5 48.2c5.6 0 9.3 1 11.2 3.1c1.9 2.1 2.3 5.6 1.3 10.6c-1 5.2-3 9-5.9 11.2c-2.9 2.2-7.3 3.3-13.2 3.3H174l5.5-28.2h10zM153.7 105h14.7l3.5-17.9h12.6c5.6 0 10.1-.6 13.7-1.8c3.6-1.2 6.8-3.1 9.8-5.9c2.5-2.3 4.5-4.8 6-7.5s2.6-5.7 3.2-9c1.6-8 .4-14.2-3.5-18.7s-10.1-6.7-18.6-6.7h-28.3L153.7 105z"/></g></svg>

									</i>
								</p>
								<p class="title"><span class="underline-text">Php</span></p>
							</div>
							<div class="col-md-3 text-center">
								<p>
									<i class="circle scroll-in-animation background-20 heading" data-animation="fadeInUp">
										<svg width="100" height="50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="0.85em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 304"><path d="M13.104 287.306c-5.204 0-6.717-3.03-6.717-7.57c0-1.513.19-3.22.424-5.018c1.14-7.851 3.923-12.343 10.64-12.343c4.543 0 6.758 2.032 6.758 5.722v1.799h4.507c.05 0 .05-1.656.05-2.033c0-5.392-3.265-10.506-11.308-10.506c-10.929 0-15.423 5.937-17.079 17.576c-.237 1.562-.379 3.02-.379 4.576c0 6.86 2.699 13.1 12.349 13.1c7.332 0 11.687-3.575 14.24-7.975l-4.306-2.9c-2.79 4.401-5.82 5.572-9.179 5.572zm29.57-21.668c-8.754 0-12.536 4.492-13.813 13.432a23.325 23.325 0 0 0-.24 3.124c0 5.77 2.697 10.362 10.17 10.362c8.754 0 12.587-4.685 13.864-13.486c.142-1.134.237-2.175.237-3.215c.002-5.865-2.788-10.217-10.218-10.217zm3.643 13.435c-.947 6.483-2.979 8.47-6.814 8.47c-3.073 0-4.586-1.278-4.586-5.11c0-.947.096-2.081.284-3.36c.947-6.433 2.839-8.42 6.718-8.42c3.123 0 4.682 1.277 4.682 5.156c0 .946-.096 2.035-.284 3.264zm28.58-21.246l-1.465 8.685c-.094.755-.046.504.24 1.214c-1.372-1.04-3.834-1.728-5.49-1.728c-7.854 0-12.252 3.555-13.67 13.49a19.414 19.414 0 0 0-.237 3.171c0 7.241 4.257 9.94 9.98 9.94c2.416 0 4.78.05 6.623-1.509l.471 2.943h4.543l5.298-36.206h-6.293zm-4.494 28.342c-2.127 1.274-4.207 1.562-5.484 1.562c-3.454 0-4.4-1.799-4.4-4.683c0-1.089.142-2.363.333-3.739c1.086-7.521 3.5-8.848 6.623-8.848c2.032 0 3.592.333 5.062 1.139l-2.134 14.569zm24.603-20.531c-8.66 0-12.725 4.113-14.099 13.432c-.144 1.137-.239 2.226-.239 3.266c0 6.387 3.266 10.22 10.454 10.22c5.583 0 9.75-2.32 11.972-6.578l-4.779-1.94c-1.37 2.08-3.215 3.5-6.48 3.5c-3.5 0-4.92-.942-4.92-4.065c0-.616.048-1.511.143-1.511h17.076c.24-2.414.52-4.12.52-5.535c0-4.728-1.796-10.79-9.648-10.79zm3.263 11.499H87.861c1.043-2.414 2.79-6.15 6.387-6.15c2.79 0 4.164 1.631 4.164 4.422c-.003.473-.046 1.728-.143 1.728zm24.591-12.069l.567-4.827h-13.343l-.565 4.827h3.5l-3.782 24.137h-3.505l-.564 4.828h13.34l.57-4.828h-3.503l3.783-24.137h3.502zm27.11 7.241l1.705-4.827h-4.589l-3.309.683c-1.846-1.18-4.354-2.066-6.717-2.066c-6.768 0-12.537 3.268-12.537 10.697c0 2.084.756 3.766 1.653 4.903c-1.416.755-2.647 2.02-2.647 3.726c0 .756.282 1.53.852 2.238c-2.841 1.706-4.586 4.533-4.586 7.842c0 6.39 6.669 7.753 11.778 7.753c6.433 0 14.099-1.47 14.099-9.655c0-2.79-1.75-4.97-6.812-5.916l-9.13-1.706c-1.04-.191-1.277-.522-1.277-.995c0-.71.43-1.086 1.136-1.086l.616.094c1.23.283 2.65.427 4.115.427c6.578 0 12.443-2.84 12.443-10.22c0-1.042-.188-1.747-.661-2.884c.803.38 1.846.995 2.268.995h1.6v-.003zm-13.007 19.583c1.796.333 2.41.994 2.41 2.177c0 3.833-4.116 4.306-7.095 4.306c-4.542 0-6.244-1.086-6.244-3.502c0-2.13.613-3.121 2.035-4.637l8.894 1.656zM135.02 279.5c-2.744 0-4.258-.992-4.258-3.36c0-3.5 2.035-5.535 5.583-5.535c2.839 0 4.212 1.183 4.212 3.498c0 3.502-1.989 5.397-5.537 5.397zm31.757-13.862c-2.65 0-5.013 1.3-7.948 3.616l-.425-1.772h-5.206l-3.642 26.55h6.292l2.745-20.134c1.846-1.135 4.115-2.783 6.055-2.783c2.364 0 3.218 1.141 3.218 3.316c0 .521-.05 2.064-.145 2.631l-2.315 16.97h6.293l2.315-17.108c.096-.8.19-2.119.19-2.874c.003-4.5-2.129-8.412-7.427-8.412zm19.38 21.743l.048-.65l2.742-19.249h-10.456l-.659 4.827h4.586c-.379 0-.615.423-.661.804l-1.893 12.82c-.094.617-.14 1.901-.14 2.418c0 3.311 1.796 5.682 5.484 5.682h3.218l.71-4.828h-2.033c-.712 0-.946-1.257-.946-1.824zm4.067-29.554h-6.15c-.379 0-.379-1.393-.425-.92l-.854 6.802c-.049.428-.049 1.36.33 1.36h6.153c.379 0 .379-1.654.425-2.084l.854-5.25c.048-.473.048.092-.333.092zm12.831 29.715c-1.559 0-2.317-.663-2.317-2.08l.048-.097l1.987-13.056h7.19l2.175-4.827h-8.704l1.465-10.623l-6.62 2.117l-1.185 8.506h-3.831l-.661 4.827h4.446c-.425 2.414-.852.848-.898 1.323l-1.704 11.448c-.094.522-.094.9-.094 1.371c0 4.495 3.311 6.177 7.289 6.177c3.688 0 6.669-1.077 8.989-3.02l-2.935-3.61c-1.47.897-2.462 1.544-4.64 1.544zm23.087-21.904c-8.657 0-12.725 4.113-14.098 13.432c-.142 1.137-.237 2.226-.237 3.266c0 6.387 3.264 10.22 10.454 10.22c5.583 0 9.75-2.32 11.97-6.578l-4.777-1.94c-1.37 2.08-3.217 3.5-6.483 3.5c-3.498 0-4.92-.942-4.92-4.065c0-.616.051-1.511.146-1.511h17.077c.236-2.414.52-4.12.52-5.535c0-4.728-1.797-10.79-9.652-10.79zm3.266 11.499H219c1.04-2.414 2.788-6.15 6.387-6.15c2.79 0 4.164 1.631 4.164 4.422c-.003.473-.049 1.728-.143 1.728zm23.797-11.5c-2.271 0-4.4 1.302-6.53 3.332l-.378-1.487h-5.202l-3.644 26.55h6.34l2.79-20.56c1.657-.991 3.549-1.838 5.347-1.838c1.137 0 2.223-.181 3.263-.04l.809-5.485c-.951-.189-1.897-.471-2.795-.471zM92.54 238.81c-14.32-6.19-27.72-21.922-27.752-38.019c-.039-17.55 11.083-32.45 24.916-42.242c-1.663 6.283-2.57 12.03 1.55 17.65c3.83 5.225 10.538 7.764 16.872 6.386c14.8-3.24 15.479-19.51 6.705-28.989c-8.675-9.387-17.067-19.99-13.765-33.603c1.653-6.824 5.843-13.216 11.151-17.785c-4.08 10.722 7.514 21.296 15.153 26.563c13.251 9.138 27.79 16.044 39.974 26.756c12.816 11.258 22.28 26.48 20.369 44.135c-2.071 19.136-17.277 32.445-34.333 39.164c36.042-7.955 73.283-35.928 74.046-75.9c.632-32.885-21.927-58.193-49.872-72.682l-1.46-.797c.767 1.861 1.018 3.444.989 4.861c.25-1.045.42-2.119.468-3.227a15.728 15.728 0 0 1-.512 3.9l.044-.673a16.383 16.383 0 0 1-2.069 4.931l.41-.441c-5.575 9.247-20.668 11.255-28.124 1.68c-11.986-15.402.251-32.008 1.963-48.318c2.143-20.441-10.676-40.285-26.57-52.16c8.754 14.161-2.779 32.896-12.006 43.37C101.74 53.523 90.859 62 80.982 71.225c-10.61 9.908-20.81 20.345-29.531 31.974c-17.442 23.276-28.12 52.55-20.273 81.588c7.842 29.018 32.978 47.49 61.363 54.022z" fill="#EE4323"/></svg>

									</i>
								</p>
								<p class="title"><span class="underline-text">Codeigniter</span></p>
							</div>
							<div class="col-md-3 text-center">
								<p>
									<i class="circle scroll-in-animation background-20 heading" data-animation="fadeInUp">
										<svg width="100" height="50"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.01em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 255"><path d="M18.124 127.5c0 43.296 25.16 80.711 61.646 98.442L27.594 82.986a108.965 108.965 0 0 0-9.47 44.514zm183.221-5.52c0-13.517-4.856-22.879-9.02-30.165c-5.545-9.01-10.742-16.64-10.742-25.65c0-10.055 7.626-19.415 18.368-19.415c.485 0 .944.06 1.417.088c-19.46-17.829-45.387-28.714-73.863-28.714c-38.213 0-71.832 19.606-91.39 49.302c2.566.077 4.984.13 7.039.13c11.44 0 29.15-1.387 29.15-1.387c5.897-.348 6.592 8.312.702 9.01c0 0-5.926.697-12.52 1.042L100.32 194.7l23.937-71.79l-17.042-46.692c-5.89-.345-11.47-1.042-11.47-1.042c-5.894-.346-5.203-9.358.691-9.01c0 0 18.064 1.388 28.811 1.388c11.44 0 29.151-1.388 29.151-1.388c5.9-.348 6.594 8.312.702 9.01c0 0-5.938.697-12.52 1.042l39.529 117.581l10.91-36.458c4.728-15.129 8.327-25.995 8.327-35.36zm-71.921 15.088l-32.818 95.363a109.376 109.376 0 0 0 30.899 4.456c12.737 0 24.952-2.202 36.323-6.2a9.605 9.605 0 0 1-.779-1.507l-33.625-92.112zm94.058-62.045c.47 3.484.737 7.224.737 11.247c0 11.1-2.073 23.577-8.317 39.178l-33.411 96.6c32.518-18.963 54.39-54.193 54.39-94.545c.002-19.017-4.856-36.9-13.4-52.48zM127.505 0C57.2 0 0 57.196 0 127.5c0 70.313 57.2 127.507 127.505 127.507c70.302 0 127.51-57.194 127.51-127.507C255.014 57.196 197.808 0 127.506 0zm0 249.163c-67.08 0-121.659-54.578-121.659-121.663c0-67.08 54.576-121.654 121.659-121.654c67.078 0 121.652 54.574 121.652 121.654c0 67.085-54.574 121.663-121.652 121.663z" fill="#464342"/></svg>
									</i>
								</p>
								<p class="title"><span class="underline-text">WORDPRESS</span></p>
							</div>
							<div class="col-md-3 text-center">
								<p>
									<i class="circle scroll-in-animation background-20 heading" data-animation="fadeInUp">
										<svg width="100" height="50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path d="M0 0h32v32H0zm29.38 24.37c-.234-1.464-1.188-2.688-4.005-3.833c-.979-.458-2.073-.781-2.396-1.521c-.12-.438-.141-.677-.063-.938c.203-.865 1.219-1.12 2.021-.88c.521.161 1 .557 1.302 1.198c1.38-.901 1.38-.901 2.339-1.5c-.359-.557-.536-.802-.781-1.036c-.839-.943-1.958-1.422-3.776-1.38l-.943.12c-.901.219-1.76.698-2.281 1.339c-1.516 1.719-1.078 4.719.76 5.964c1.818 1.359 4.479 1.656 4.823 2.938c.318 1.563-1.161 2.063-2.625 1.88c-1.078-.24-1.677-.781-2.339-1.781l-2.438 1.401c.276.641.599.917 1.078 1.479c2.318 2.339 8.12 2.219 9.161-1.339c.036-.12.318-.943.099-2.198zm-11.979-9.662h-2.995c0 2.583-.016 5.151-.016 7.74c0 1.641.083 3.151-.182 3.615c-.443.917-1.573.802-2.089.641c-.526-.26-.797-.62-1.104-1.141c-.089-.141-.151-.26-.172-.26l-2.432 1.5c.406.839 1 1.563 1.766 2.021c1.141.682 2.672.901 4.276.542c1.042-.302 1.943-.922 2.411-1.88c.682-1.24.536-2.76.531-4.464c.016-2.74 0-5.479 0-8.24z" fill="black"/></svg>
									</i>
								</p>
								<p class="title"><span class="underline-text">Javascript</span></p>
							</div>
							<div class="col-md-3 text-center">
								<p>
									<i class="li_like circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
								</p>
								<p class="title"><span class="underline-text">Rest Api</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="view">
				<!--
				<img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-2.jpg" /><img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-0.jpg" /><img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-1.jpg" />
				-->
				<div class="content half-size colors-h">
					<div class="container">
						<div class="show-list slogan">
							<div class="show-item">I Am Programmers</div>
							<div class="show-item">I Am Coders</div>
							<div class="show-item">I Am Developers</div>
							<div class="show-item">I Am Creative</div>
						</div>
						<div class="separator"></div>
						<p class="text-center big-font">
							<em>— Md Kanok Hossain —</em>
						</p>
					</div>
				</div>
			</div>
		</section>
		<section id="work">
			<div class="view">
				<!--
				<img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-2.jpg" /><img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-0.jpg" />
				-->
				<div class="content no-bottom-padding colors-e">
					<div class="container">
						<h2>My <span class="highlight">Work</span></h2>
						<p class="header-details"><span class="highlight">Some Recent</span> Projects</p>
						{{-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p> --}}
					</div>
					<div class="gallery background-e" data-default-group="all" data-overlay=".gallery-overlay">
						<div class="container-fluid">
							<div class="filter">
								<ul class="nav nav-pills text-center">
									<li><a class="hover-effect" data-group="all" href="#">All</a></li>
									<li><a class="hover-effect" data-group="web" href="#">Web</a></li>
								</ul>
							</div>
							<div class="row">
								<div class="grid">
                                    @foreach($works as $key=>$row)
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["web"]'>
                                    <a onclick="handleClick({{$row->id}})" class="hover-overlay">
											<img height="500px" width="400px" alt="Project 1" src="{{$row->image_url}}" />
											<div class="overlay background-90-e">
												<div class="hidden-xs">
													<p class="text-center heading-e"><strong>{{$row->title}}.</strong></p>
													<p class="text-center"><i class="fa fa-link heading-e"></i></p>
												</div>
											</div>
										</a>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="process">
			<div class="view">
				<img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-1.jpg" /><img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-2.jpg" />
				<div class="content colors-e">
					<div class="container">
						<h2>MY <span class="highlight">Process</span></h2>
						<p class="header-details"><span class="highlight">I Make</span> My Customers Happy</p>
						{{-- <p class="lead">Curabitur eget nulla ut neque aliquam dictum. Nam sollicitudin leo dui, non malesuada felis aliquam non. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus finibus tempor neque vel scelerisque. Cras nec ex ut eleifend mollis ut a nibh. Vivamus commodo est sit amet ultricies.</p> --}}
						<div class="process">
							<div class="row process-row">
								<div class="col-md-3 process-step">
									<div class="process-box"><i class="li_search heading"></i></div>
									<p class="title">Research</p>
								</div>
								<div class="col-md-3 process-step">
									<div class="process-box"><i class="li_pen heading"></i></div>
									<p class="title">Concept</p>
								</div>
								<div class="col-md-3 process-step">
									<div class="process-box"><i class="li_settings heading"></i></div>
									<p class="title">Develop</p>
								</div>
								<div class="col-md-3 process-step">
									<div class="process-box"><i class="li_paperplane heading"></i></div>
									<p class="title">Test</p>
								</div>
							</div>
						</div>
						<!--<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<p class="text-center">Aliquam fermentum massa ac est sollicitudin, at ultricies ligula tristique. Cras finibus, nulla ac convallis feugiat, nisl nisl lobortis est, eget auctor velit magna vel nunc. Donec nec eros rhoncus.</p>
							</div>
						</div>-->
					</div>
				</div>
			</div>
			<div class="view" id="numbers">
				<div class="content half-size colors-h">
					<div class="container-fluid">
						<h3>My <span class="highlight">Numbers</span></h3>
						<p class="title"><span class="highlight">Some of the</span> cool facts about Me</p>
						<div class="row counters">
							<div class="col-md-3 counter background-25-b">
								<div class="count player row heading background-10-light">50</div>
								<div class="caption">Projects</div>
							</div>
							<div class="col-md-3 counter background-35-g">
								<div class="count player row heading background-10-light">40</div>
								<div class="caption">Clients</div>
							</div>
							<div class="col-md-3 counter background-25-b">
								<div class="count player row heading background-10-light">1000</div>
								<div class="caption">Followers</div>
							</div>
							<div class="col-md-3 counter background-35-g">
								<div class="count player row heading background-10-light"><span></span>2</div>
								<div class="caption">Years</div>
							</div>
						</div>
					</div>
					<div class="container">
						<!--<p class="text-center ">Donec vulputate sit amet dolor vel pharetra donec pharetra.</p>-->
					</div>
				</div>
			</div>
		</section>
		<section id="skills">
			<div class="view">
				<img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-0.jpg" /><img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-1.jpg" />
				<div class="content colors-e">
					<div class="container">
						<h2>My <span class="highlight">Skills</span></h2>
						{{-- <p class="header-details"><span class="highlight">My Main</span> Skills</p> --}}
						{{-- <p class="lead">Aliquam scelerisque vestibulum mi, eu commodo sem vestibulum convallis. Proin sed mi vehicula, porta nisi eu, facilisis nisl. Etiam tristique mi nec fermentum vestibulum. Nullam in nisi ut tellus laoreet ultrices. In ullamcorper dictum interdum vestibulum etiam tristique mi nec fermentum commodo sem vestibulum laoreet ultrices.</p> --}}
						<div class="row">
							<!--
							<div class="col-md-6">
								<ul class="widget-tabs nav nav-tabs background-lite-e">
									<li class="active"><a href="#html5" data-toggle="tab">HTML5</a></li>
									<li class=""><a href="#css3" data-toggle="tab">CSS3</a></li>
									<li class=""><a href="#jquery-skill" data-toggle="tab">jQuery</a></li>
									<li class=""><a href="#wordpress" data-toggle="tab">Wordpress</a></li>
									<li class=""><a href="#seo" data-toggle="tab">SEO</a></li>
									<li class=""><a href="#photoshop" data-toggle="tab">Photoshop</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade active in" id="html5">
										<p>Fusce hendrerit enim et lacus rutrum, fermentum consectetur mauris hendrerit. Mauris scelerisque, est eget convallis blandit, lorem est scelerisque dolor, non dapibus orci enim ut risus. Praesent rhoncus ex sit amet nunc luctus, nec eleifend erat suscipit. In feugiat dui eget gravida dignissim. Quisque sed dictum felis. Integer viverra iaculis nulla, a euismod est. Nulla nec felis ipsum. Phasellus sed scelerisque nisl, eu condimentum metus. Aenean convallis risus nec eleifend pharetra. Vivamus rhoncus eleifend mi in imperdiet. Nullam a justo quis dolor viverra elementum. Nam eleifend leo quis elementum cursus.</p>
									</div>
									<div class="tab-pane fade" id="css3">
										<p>Sed dapibus, leo ut egestas convallis, leo purus condimentum ipsum, sit amet lobortis odio nisi id enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi suscipit, mi in interdum volutpat, quam mi porta nisi, dapibus placerat sapien tortor eleifend arcu. Cras sit amet euismod mi, non imperdiet felis. Praesent eros nibh, ullamcorper ut suscipit sit amet, mattis sollicitudin lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis in enim sit amet nibh placerat consectetur id et enim. Nunc nec dui ac ligula posuere posuere vel id metus. Integer maximus eros nec lobortis tempor.</p>
									</div>
									<div class="tab-pane fade" id="jquery-skill">
										<p>Nam eget ex mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam blandit, enim nec rutrum maximus, odio purus maximus odio, vel mattis nisi ante ut velit. Nam ut turpis vel dolor maximus dictum. Donec blandit turpis ut vulputate facilisis. Nam est nisi, posuere vitae posuere in, viverra non tellus. Pellentesque congue, sapien eget sollicitudin sollicitudin, est leo imperdiet ante, facilisis viverra mi augue in leo. Vestibulum felis urna, pharetra et eros ut, mattis consequat mi. Curabitur id tortor mattis, aliquet eros hendrerit, mattis metus. Ut dignissim vel augue in congue. Nulla a ante ut mi scelerisque suscipit. Aenean condimentum turpis mi, sit amet ullamcorper mi commodo non.</p>
									</div>
									<div class="tab-pane fade" id="php">
										<p>Nulla egestas eu odio ac dictum. Phasellus eu odio lectus. Fusce luctus tempor mauris, vel accumsan leo. Nam libero velit, ultrices vel malesuada nec, euismod nec dolor. Maecenas congue erat sed maximus semper. Aliquam vestibulum magna sit amet pulvinar vestibulum. Cras semper condimentum ante, eget suscipit sapien. Sed ac urna nunc. Aenean viverra sem sit amet dolor pretium fringilla. Nam luctus tempus nibh vitae efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
									</div>
									<div class="tab-pane fade" id="wordpress">
										<p>Fusce non commodo sapien, quis ultrices enim. Proin in placerat urna. Nulla luctus leo nec massa vestibulum consequat quis a quam. Maecenas et leo ut orci fringilla ornare non sit amet lectus. Donec ornare eros tortor, sit amet condimentum lectus placerat ut. Duis lacus neque, lacinia non nunc id, aliquet tincidunt orci. In tellus felis, posuere non est rhoncus, tincidunt elementum sapien. Sed non sagittis ante. Duis ultricies mi dolor, feugiat blandit metus ullamcorper nec. Nullam semper gravida consequat. Suspendisse potenti. Mauris sit amet nisi at enim lacinia dignissim. Aenean suscipit pulvinar ex, eu venenatis magna dapibus sit amet.</p>
									</div>
									<div class="tab-pane fade" id="seo">
										<p>Proin non augue posuere, iaculis tortor in, molestie lorem. Praesent ut gravida sem. Aenean sit amet lorem leo. Curabitur risus ante, pulvinar vel erat viverra, porttitor volutpat turpis. Praesent et sapien interdum, sollicitudin nisi non, bibendum leo. Duis posuere lectus velit, vel volutpat massa blandit non. Donec pellentesque vel magna ut dignissim. Pellentesque luctus fringilla eros, in tempus neque venenatis consectetur. Pellentesque purus mauris, laoreet eget augue in, pellentesque sagittis arcu. Etiam at blandit lectus, sit amet volutpat tellus.</p>
									</div>
									<div class="tab-pane fade" id="photoshop">
										<p>Donec ac consectetur neque, vel eleifend nisi. In et nibh at neque convallis tincidunt. Aliquam sodales odio vel malesuada interdum. Duis auctor malesuada lorem. Nulla sed neque ut dui imperdiet congue ut sit amet enim. Phasellus vel commodo dui. Aliquam eu eleifend diam, vitae dapibus velit. Suspendisse ac est hendrerit, mollis lectus vel, accumsan urna. Quisque sit amet iaculis libero, sed maximus justo. Nunc laoreet non libero eu vehicula. Vestibulum ex lectus, pharetra non elementum et, gravida quis mauris. Donec sodales odio eget accumsan blandit.</p>
									</div>
								</div>
							</div>
						-->
							<div class="col-md-4">
								<div class="losange">
									<div class="los1">
									  <div class="bg-img"></div>
									</div>
								</div>
								<p class="header-details"><span class="highlight">Who's this</span> guy?</p>
								<div style="color: rgb(97, 97, 97); font-family: Raleway; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">I&apos;m a Software Enginner for&nbsp;<a class="highlight" href="" style="color: rgb(0, 154, 218); text-decoration: none;" target="_blank">Dhrubok Infotech</a> in Dhaka, Bangladesh.<br>I have serious passion for web development.<br><span class="page-link highlight" style="cursor: pointer; color: rgb(0, 154, 218);">Let&apos;s make something special.</span></div>
							</div>
							<div class="col-md-8">
								<div class="skillbars">
									<div class="skillbar clearfix background-d" data-percent="80%">
										<div class="skillbar-title background-b heading-b"><span>PHP</span></div>
										<div class="skillbar-bar background-b"></div>
										<div class="skill-bar-percent heading-d">80%</div>
									</div>
									<div class="skillbar clearfix background-d" data-percent="70%">
										<div class="skillbar-title background-c heading-c"><span>laravel</span></div>
										<div class="skillbar-bar background-c"></div>
										<div class="skill-bar-percent heading-d">70%</div>
									</div>
									<div class="skillbar clearfix background-d" data-percent="60%">
										<div class="skillbar-title background-b heading-b"><span>jQuery</span></div>
										<div class="skillbar-bar background-b"></div>
										<div class="skill-bar-percent heading-d">60%</div>
									</div>
									<div class="skillbar clearfix background-d" data-percent="60%">
										<div class="skillbar-title background-c heading-c"><span>Vue Js</span></div>
										<div class="skillbar-bar background-c"></div>
										<div class="skill-bar-percent heading-d">60%</div>
									</div>
									<div class="skillbar clearfix background-d" data-percent="60%">
										<div class="skillbar-title background-b heading-b"><span>Wordpress</span></div>
										<div class="skillbar-bar background-b"></div>
										<div class="skill-bar-percent heading-d">60%</div>
									</div>
									<div class="skillbar clearfix background-d" data-percent="60%">
										<div class="skillbar-title background-c heading-c"><span>React Js</span></div>
										<div class="skillbar-bar background-c"></div>
										<div class="skill-bar-percent heading-d">60%</div>
									</div>
									<div class="skillbar clearfix background-d" data-percent="70%">
										<div class="skillbar-title background-b heading-b"><span>CodeIgniter</span></div>
										<div class="skillbar-bar background-b"></div>
										<div class="skill-bar-percent heading-d">70%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="contact">
			<div class="view">
				<!--
				<img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-2.jpg" /><img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-0.jpg" /><img alt class="bg" src="{{asset('/')}}front-end/images/placeholders/1920x1200-1.jpg" />
				-->
				<div class="content full-size colors-h">
					<div class="container">
						<h2>Contact</h2>
						<p class="header-details">Keep In Touch</p>
						<div class="row">
							<div class="col-md-6">
								<div class="text-right scroll-in-animation" data-animation="fadeInLeft">
									<p class="big-font uppercase">
										Tel: <strong class="highlight font">+01521254239</strong>
									</p>
									<p class="big-font uppercase">
										Mohammadpur, 
										<br/> Dhaka, Bangladesh, Dhaka-1207
									</p>
									<p class="big-font">
									<b>
										<a href="mailto:kanokhossain.developer.786@gmail.com">kanokhossain.developer.786@gmail.com</a><br/>
									</b>
									</p>
									<p class="big-font">
										<a target="_blank" href="https://www.facebook.com/"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i class="fa fa-linkedin fa-stack-1x text-background"></i></span></a>
										<a target="_blank" href="http://www.youtube.com/"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i class="fa fa-youtube fa-stack-1x text-background"></i></span></a>
										<a target="_blank" href="http://www.youtube.com/"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i class="fa-stack-1x text-background">FI</i></span></a>
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-left scroll-in-animation" data-animation="fadeInRight">
									<form  data-message-class="colors-d background-95 heading border" action="{{route('contact.us')}}" method="post">
										@csrf	
										<div class="row">
											<div class="col-md-6 control-group">
												<div class="alt-placeholder">Name</div>
												<input type="text" name="your_name" value="" size="40" placeholder="Name" data-validation-required-message="Please fill the required field." required>
												<div class="help-block"></div>
											</div>
											<div class="col-md-6 control-group">
												<div class="alt-placeholder">Email</div>
												<input type="email" name="your_email" value="" size="40" placeholder="Email" data-validation-required-message="Please fill the required field." required>
												<div class="help-block"></div>
											</div>
											<div class="col-md-12 control-group">
												<div class="alt-placeholder">Message</div>
												<textarea name="your_message" placeholder="Message" data-validation-required-message="Please fill the required field." required></textarea>
												<div class="help-block"></div>
											</div>
											<div class="col-md-12 form-actions">
												<input class="button" type="submit" value="Send">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center">
							<a class="map-open button background-lite-b border-heading-b heading-b" data-map-overlay=".map-overlay" href="#">Locate Me on Map</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END: Page content -->
		<!-- BEGIN: Footer -->
		<footer class="colors-g page-transition non-preloading">
			<div class="container scroll-in-animation" data-animation="fadeInDown">
				<div class="row">
					<div class="col-md-6">
						<h4>FIND<span class="highlight">KANOK</span></h4>
						<p class="social-links">
							<a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube"></i></a>
							<a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
							<a target="_blank" href="https://www.fiverr.com/developer_kanok?up_rollout=true"><i>FI</i></a>
						</p>
					</div>
					<div class="col-md-6">
						<h5>Additional Links</h5>
						<ul class="simple">
							<li><a href="#how-we-work">How I Work</a></li>
							<li><a href="#who-we-are">Who I AM</a></li>
							<li><a href="#numbers">MY Numbers</a></li>
						</ul>
					</div>
					<!--
					<div class="col-md-4">
						<h5>Recent Posts</h5>
						<ul class="simple">
							<li><a href="blog-single-1.html">Post with Featured Image</a></li>
							<li><a href="blog-single-2.html">And Post with Slider</a></li>
							<li><a href="blog-single-3.html">Post with Vimeo Video</a></li>
							<li><a href="blog-single-4.html">Another Post with Image</a></li>
							<li><a href="blog.html">More...</a></li>
						</ul>
					</div>
					-->
				</div>
			</div>
			<div class="bottom text-center background-10-b">
				Md Kanok Hossain© 2020 All Rights Reserved.
			</div>
		</footer>
		<!-- END: Footer -->
		<script>
		if (typeof(atob) == "undefined")
		{
			document.write('<script src="{{asset('/')}}front-end/lib/stringencoders-v3.10.3/javascript/base64.js"><\/script>');
			var atob = function(x)
			{
				return base64.decode(x);
			}
		}
		</script>
		<script src="{{asset('/')}}front-end/bower_components/less.js/dist/less.min.js"></script>
		<script src="{{asset('/')}}front-end/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="{{asset('/')}}front-end/lib/tween/tween.min.js"></script>
		<script src="{{asset('/')}}front-end/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="{{asset('/')}}front-end/bower_components/modernizr/modernizr.js"></script>
		<script src="{{asset('/')}}front-end/lib/SmoothScroll-1.2.1/SmoothScroll.js"></script>
		<script src="{{asset('/')}}front-end/bower_components/jquery-cookie/jquery.cookie.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="{{asset('/')}}front-end/bower_components/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js"></script>
		<script src="{{asset('/')}}front-end/bower_components/minicolors/jquery.minicolors.min.js"></script>
		<script src="{{asset('/')}}front-end/bower_components/slick.js/slick/slick.min.js"></script>
		<script src="{{asset('/')}}front-end/bower_components/shufflejs/dist/jquery.shuffle.min.js"></script>
		<script src="{{asset('/')}}front-end/bower_components/textillate/assets/jquery.lettering.js"></script>
		<script src="{{asset('/')}}front-end/bower_components/textillate/assets/jquery.fittext.js"></script>
		<script src="{{asset('/')}}front-end/bower_components/textillate/jquery.textillate.js"></script>
		<script src="{{asset('/')}}front-end/lib/prism/prism.js"></script>
		<script>
		@if(session()->get('success'))
        var message= "{{ session()->get('success') }}";
        swal({
            title: "Success",
            text: message,
            html: true,
            icon:'success',
            timer:1500
        });
    	@endif
		(function()
		{
			var disableMobileAnimations = true;
			var isWin = navigator.appVersion.indexOf("Win") !== -1;
			if (isWin) $('html').addClass('win');
			var ua = navigator.userAgent.toLowerCase();
			var isChrome = ua.indexOf('chrome') > -1;
			if (isChrome) $('html').addClass('chrome');
			var isAndroidBrowser4_3minus = ((ua.indexOf('mozilla/5.0') > -1 && ua.indexOf('android ') > -1 && ua.indexOf('applewebkit') > -1) && !(ua.indexOf('chrome') > -1));
			if (isAndroidBrowser4_3minus) $('html').addClass('android-browser-4_3minus');
			var isSafari = !isChrome && ua.indexOf('safari') !== -1;
			if (isSafari) $('html').addClass('safari');
			var isMobile = Modernizr.touch;
			if (isMobile)
			{
				$('html').addClass('mobile');
				if (disableMobileAnimations) $('html').addClass('poor-browser');
			}
			else
			{
				$('html').addClass('non-mobile');
			}
			if (isWin && isSafari)
			{
				$('html').addClass('flat-animation');
			}
		})();
		</script>
		<script src="{{asset('/')}}front-end/scripts/script-bundle.js"></script>
		<script>
		if (Function('/*@cc_on return document.documentMode===9@*/')())
		{
			$('html').addClass('ie9');
		}
		if (Function('/*@cc_on return document.documentMode===10@*/')())
		{
			$('html').addClass('ie10');
		}
		if (!!navigator.userAgent.match(/Trident.*rv\:11\./))
		{
			$('html').addClass('ie11');
		}
		function handleClick($id){
			$.ajax({
				url: "{{route('admin/work/details')}}",
				type: "get",
				data : {id:$id},
				success: function (data){
					console.log(data);
					$("#work-details").html("");
					$("#work-details").html(data);
				},
			});
		}
		</script>
	</body>
</html>
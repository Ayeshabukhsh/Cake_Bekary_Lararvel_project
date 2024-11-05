
<script>
		addEventListener("load", function () {
			 
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />

	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<!-- //Web-Fonts -->
	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<!-- flexSlider css (for testimonials) -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
	<!-- //Custom-Files -->
	<!----------------------->

	<link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> 

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

	
	<link href="lib2/animate/animate.min.css" rel="stylesheet">
    <link href="lib2/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<!-------MENU PAGE-->
	<!-- Custom-Files -->
	<link rel="stylesheet" href="css2/bootstrap.css">
	
	<link rel="stylesheet" href="css2/style2.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<style>
		.nn1{
			background: linear-gradient(to bottom, #ffc845,#742934);
			height:60px !important;
			/* position:fixed !important; */
		}
	</style>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light nn1 fixed-top" >
				<div class="logo text-left">
					<h1>
						<a class="navbar-brand" href="index.html">
							<img src="" alt="" class="img-fluid">Cakes Bakery</a>
					</h1>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">

					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto text-lg-right text-center">
						
						<li class="nav-item">
							<a class="" href=""> </a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							    aria-haspopup="true" aria-expanded="false">
								Admin 
							</a>
							<div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
							<a href="{{url('admin/login')}}">AdminLogin</a>
							<a href="{{url('admin/register')}}">AdminRegister</a>
							</div>
							
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							    aria-haspopup="true" aria-expanded="false">
								User 
							</a>
							<div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
							<a href="{{url('login')}}" class="theme-btn btn-style-one"><span class="txt">UserLogin</span></a>
							<a href="{{url('register')}}" class="theme-btn btn-style-one"><span class="txt">UserRegister</span></a>
							</div>
							
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							    aria-haspopup="true" aria-expanded="false"> Name
								{{ Auth::user()->name ??  ' ' }}
							</a>
							<div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
							<x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
						<!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>	
							</div>
							
						</li>

					</ul> 
				</div>
			</nav>
	<div class="mian-content mt-1">
		<!-- header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="logo text-left">
					<h1>
						<a class="navbar-brand" href="index.html">
							<img src="images/logo2-.png" alt=""  style="height:200px; margin-left:-100px !important;" class=""></a>
					</h1>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">

					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto text-lg-right text-center">
						<li class="nav-item active">
							<a class="nav-link" href="{{url('index')}}">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('about')}}">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('menu')}}">Menu</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							    aria-haspopup="true" aria-expanded="false">
						 Pages
							</a>
							<div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
								<a class="dropdown-item scroll" href="#services">Services</a>
								<a class="dropdown-item scroll" href="#products" title="">New Products</a>
								<a class="dropdown-item scroll" href="#news" title="">Company News</a>
								<a class="dropdown-item" href="{{url('cartt')}}" title="">Team</a>
							</div>
							
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="{{url('gallery')}}">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('contactus')}}">Contact Us</a>
						</li>

<!-- 
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							    aria-haspopup="true" aria-expanded="false">
								Admin 
							</a>
							<div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
							<a href="{{url('admin/login')}}">AdminLogin</a>
							<a href="{{url('admin/register')}}">AdminRegister</a>
							</div>
							
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							    aria-haspopup="true" aria-expanded="false">
								User 
							</a>
							<div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
							<a href="{{url('login')}}" class="theme-btn btn-style-one"><span class="txt">UserLogin</span></a>
							<a href="{{url('register')}}" class="theme-btn btn-style-one"><span class="txt">UserRegister</span></a>
							</div>
							
						</li> -->





						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							    aria-haspopup="true" aria-expanded="false">
								{{ Auth::user()->name ?? 'UserAcount'}}
							</a>
							<div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
							<x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
							<a href="{{url('admin/register')}}">Admin Register</a>
							</div>
							
						</li> -->

					</ul> 
<!-- 
					<li class="dropdown"><a href="javascript:void(0)">{{ Auth::user()->name ?? 'UserAcount'}}</a>
                    <ul>
                      <li> <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link></li>
                      <li>         <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form></li>
                    </ul>
                  </li>  -->
					<!-- menu button -->
					<!-- <div class="menu">
						<a href="#" class="navicon"></a>
						<div class="toggle">
							<ul class="toggle-menu list-unstyled">
								<li>
									<a href="index.html">Index Page</a>
								</li>
								<li>
									<a class="scroll" href="#products">New Products</a>
								</li>
								<li>
									<a href="gallery.html">Latest Cakes</a>
								</li>
								<li>
									<a class="scroll" href="#order">Order Cake</a>
								</li>
								<li>
									<a class="scroll" href="#faqs">Faqs</a>
								</li>
								<li>
									<a href="contact.html">Contact Us</a>
								</li>
							</ul>
						</div>
					</div> -->
					<!-- //menu button -->
				</div>
			</nav>
		</header>
		<!-- //header -->

	
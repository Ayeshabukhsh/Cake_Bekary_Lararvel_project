@extends('layout.main')
@section('main-content')
<!-- banner -->
		<!-- main image slider container -->
		<div id="slider-main">
			<div class="banner-text-agile text-center">
				<div class="container">
					<h3 class="text-brown font-weight-bold mb-3">The Taste Of Our Amazing Cakes</h3>
					<p class="text-light">I've been ordering cakes from this store and they are the best in the business..</p>
					<button type="button" class="btn btn-primary button mt-md-5 mt-4" data-toggle="modal" data-target=".bd-example-modal-lg">
						<span>Watch Our Video</span>
					</button>
				</div>
			</div>
			<!-- previous button -->
			<button id="prev">
				<i class="fas fa-chevron-left"></i>
			</button>

			<!-- image container -->
			<div id="slider"></div>

			<!-- next button -->
			<button id="next">
				<i class="fas fa-chevron-right"></i>
			</button>

			<!-- small circles container -->
			<div id="circles"></div>

		</div>
		<!-- end of main image slider container -->
		<!-- Modal -->
		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-center" id="exampleModalCenterTitle">Cake Bakery</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body p-0">
						<iframe src="https://player.vimeo.com/video/58582025" style="border:none"></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- //Model -->
		<!-- //banner -->

		<!-- banner bottom icons -->
		<div class="icons-banner-botom">
			<div class="container">
				<ul class="list-unstyled my-4">
					<li class="icons-mkw3ls">
						<p class="mb-2">Chocolate</p>
						<img src="images/img1.png" class="img-fluid" alt="">
					</li>
					<li class="icons-mkw3ls">
						<p class="mb-2">Strawberry</p>
						<img src="images/img2.png" class="img-fluid" alt="">
					</li>
					<li class="icons-mkw3ls">
						<p class="mb-2">Pista</p>
						<img src="images/img3.png" class="img-fluid" alt="">
					</li>
					<li class="icons-mkw3ls">
						<p class="mb-2">Vanilla</p>
						<img src="images/img4.png" class="img-fluid" alt="">
					</li>
					<li class="icons-mkw3ls">
						<p class="mb-2">Muffins</p>
						<img src="images/img5.png" class="img-fluid" alt="">
					</li>
				</ul>
			</div>
		</div>
		<!-- //banner bottom icons -->
	</div>
	<!-- //main -->

	<!-- banner-bottom -->
	<section class="banner-main-agiles py-5">
		<div class="banner-bottom-w3layouts" id="about">
			<div class="container pt-xl-5 pt-lg-3">
				<div class="row mt-5">
					<div class="col-lg-6">
						<p class="text-uppercase">A few words</p>
						<h3 class="aboutright">Welcome to our Cakes Bakery</h3>
						<h4 class="aboutright">Nemo enim ipsam voluptatem quia voluptas dolore magna aliqua</h4>
						<p>I make buttercream frosting with real butter and our custom cakes, cinnamon rolls, and cookies made completely from scratch with farm-fresh local eggs and
							mollis. Mauris porroinit consectetur cursus tortor vel interdum. Suspendisse interdum velit vel qu dapibus
							condimentum.</p>
						<button type="button" class="btn btn-primary button mt-md-5 mt-4" onclick="window.location='about.html'">
							<span>Learn More</span>
						</button>
					</div>
					<div class="col-lg-6 about-img text-lg-enter">
						<img src="images/about.png" alt="" class="img-fluid">
					</div>
				</div>
			</div>


		</div>
		<!-- //banner-bottom-w3layouts -->
		<div class="some-another text-center pb-5">
			<div class="container pb-xl-5 pb-lg-3">
				<i class="fas fa-utensils"></i>
				<p class="text-uppercase mb-4 mt-2">A few words about our Site</p>
				<h4 class="aboutright about-right-2">Nemo enim ipsam voluptatem quia voluptas dolore magna aliqua Suspendisse
					interdum velit vel qu dapibus condimentum.</h4>
				<h5 class="text-uppsecase font-weight-bold text-dark mt-4">Chloe Jack
					<span class="text-secondary font-weight-normal">(Master Chef)</span>
				</h5>
			</div>
		</div>
		<!-- cake -->
		<img src="images/cake7.png" alt="" class="img-fluid cake-style">

		<!-- //cake -->
	</section>
<!--   middle slider -->
	<div class="projects py-55">
		<div class="projects-grids py-xl-5 py-lg-3">
			<div class="sreen-gallery-cursual">
				<ul id="flexiselDemo2">
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/c4.png" alt="" style="height: 150px;"  class="img-fluid"/>
								<div class="projects-grid-caption text-center mt-4">
									<h4>Chocolate Cake</h4>
									<p class="my-2">Add some text here</p>
									<a href="cart.html">View Menu</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/c2.png" alt="" style="height: 150px;" class="img-fluid" />
								<div class="projects-grid-caption text-center mt-4">
									<h4>Chocolate Cake</h4>
									<p class="my-2">Add some text here</p>
									<a href="cart.html">View Menu</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/c3.png" alt="" style="height: 150px;" class="img-fluid" />
								<div class="projects-grid-caption text-center mt-4">
									<h4>Chocolate Cake</h4>
									<p class="my-2">Add some text here</p>
									<a href="cart.html">View Menu</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/c5.png" alt="" style="height: 150px;" class="img-fluid" />
								<div class="projects-grid-caption text-center mt-4">
									<h4>Chocolate Cake</h4>
									<p class="my-2">Add some text here</p>
									<a href="menu.html">View Menu</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/c11.png" alt="" style="height: 150px;" class="img-fluid" />
								<div class="projects-grid-caption text-center mt-4">
									<h4>Chocolate Cake</h4>
									<p class="my-2">Add some text here</p>
									<a href="menu.html">View Menu</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //middle slider -->
    @endsection
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
        	<!-- services -->
	<div class="serives-agile py-5 bg-light border-top" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="row support-bottom text-center">
				<div class="col-md-4 support-grid">
					<i class="far fa-heart"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Made With Love</h5>
					<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
				</div>
				<div class="col-md-4 support-grid my-md-0 my-4">
					<i class="fas fa-birthday-cake"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Seasonal Pastries</h5>
					<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
				</div>
				<div class="col-md-4 support-grid">
					<i class="far fa-calendar"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Event Catering</h5>
					<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->
	

	
    <!-- Service Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="text-primary text-uppercase mb-2">// Our Services</p>
                    <h1 class="display-6 mb-4">What Do We Offer For You?</h1>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-bread-slice text-white"></i>
                                </div>
                                <h5 class="mb-0">Quality Products</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-birthday-cake text-white"></i>
                                </div>
                                <h5 class="mb-0">Custom Products</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-cart-plus text-white"></i>
                                </div>
                                <h5 class="mb-0">Online Order</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-truck text-white"></i>
                                </div>
                                <h5 class="mb-0">Home Delivery</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="images/service-1.jpg" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="images/service-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


		<!-- //cake -->
	</section>
    @endsection
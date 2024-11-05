

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

	 <!-- Facts Start -->
	 <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-secondary mb-4"></i>
                        <p class="mb-2">Years Experience</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">50</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-secondary mb-4"></i>
                        <p class="mb-2">Skilled Professionals</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">175</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-bread-slice fa-4x text-secondary mb-4"></i>
                        <p class="mb-2">Total Products</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">135</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-cart-plus fa-4x text-secondary mb-4"></i>
                        <p class="mb-2">Order Everyday</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">9357</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->



	
	<!----------------------end-----Menu Page------------------------------->

	<!-- new products -->
	
	<div class="featured-section py-5" id="products">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="text-dark mb-2">New Products</h3>
				<p>Ut enim ad minim veniam, quis nostrud ullam.</p>
			</div>
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					<li>
						<div class="w3l-specilamk">
							<div class="row">
								<div class="col-lg-6 product-name-w3l">
									<h4 class="font-weight-bold">Strawberry Cakes</h4>
									<p class="dont-inti-w3ls mt-4 mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
										accuslaudantium.</p>
									<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto vitae dicta sunt explicabo, Sed ut
										perspiciatis
										unde omnis iste natus error sit voluptatem accuslaudantium.</p>
									<a href="#order" class="button-3 active mt-5 py-4 scroll">Order Now</a>
								</div>
								<div class="col-lg-6 speioffer-agile">
									<img src="images/product1.jpg" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="row">
								<div class="col-lg-6 product-name-w3l">
									<h4 class="font-weight-bold">Dessert Cakes</h4>
									<p class="dont-inti-w3ls mt-4 mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
										accuslaudantium.</p>
									<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto vitae dicta sunt explicabo, Sed ut
										perspiciatis
										unde omnis iste natus error sit voluptatem accuslaudantium.</p>
									<a href="#order" class="button-3 active mt-5 py-4 scroll">Order Now</a>
								</div>
								<div class="col-lg-6 speioffer-agile">
									<img src="images/product2.jpg" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="row">
								<div class="col-lg-6 product-name-w3l">
									<h4 class="font-weight-bold">Vanilla Cakes</h4>
									<p class="dont-inti-w3ls mt-4 mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
										accuslaudantium.</p>
									<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto vitae dicta sunt explicabo, Sed ut
										perspiciatis
										unde omnis iste natus error sit voluptatem accuslaudantium.</p>
									<a href="#order" class="button-3 active mt-5 py-4 scroll">Order Now</a>
								</div>
								<div class="col-lg-6 speioffer-agile">
									<img src="images/product3.jpg" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="row">
								<div class="col-lg-6 product-name-w3l">
									<h4 class="font-weight-bold">Roller Coaster</h4>
									<p class="dont-inti-w3ls mt-4 mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
										accuslaudantium.</p>
									<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto vitae dicta sunt explicabo, Sed ut
										perspiciatis
										unde omnis iste natus error sit voluptatem accuslaudantium.</p>
									<a href="#order" class="button-3 active mt-5 py-4 scroll">Order Now</a>
								</div>
								<div class="col-lg-6 speioffer-agile">
									<img src="images/product4.jpg" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="row">
								<div class="col-lg-6 product-name-w3l">
									<h4 class="font-weight-bold">Chocolate Cakes</h4>
									<p class="dont-inti-w3ls mt-4 mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
										accuslaudantium.</p>
									<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto vitae dicta sunt explicabo, Sed ut
										perspiciatis
										unde omnis iste natus error sit voluptatem accuslaudantium.</p>
									<a href="#order" class="button-3 active mt-5 py-4 scroll">Order Now</a>
								</div>
								<div class="col-lg-6 speioffer-agile">
									<img src="images/product5.jpg" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //new products	-->

	<!-- news -->
	<div class="news-agile bg-cream py-5" id="news">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<!-- order form -->
				<div class="col-lg-4 order-form-w3ls pl-lg-0" id="order">
					<div class="agile_its_registration bg-white">
						<h3 class="title-2 mb-3">Order a Cake</h3>
						<p class="mb-4"><b>Save Money..</b><br> It can also save you money. At several bakeries, ordering online means paying a much more affordable price than going into the bakery itself..</p>
						<form method="POST" id="contactForm" action="{{route('form.store')}}" enctype="multipart/form-data">
						@csrf
							<div class="agileits-location form-group">
								<label>Shape</label>
								<select required name="shape">
									<option value="">Round</option>
									<option value="1">rectangle</option>
									<option value="2">square</option>
									<option value="2">custom</option>
								</select>
								<div class="clear"></div>
							</div>
							<div class="agileits-location w3ls-1 form-group">
								<label>Levels</label>
								<select required name="level">
									<option value="">1</option>
									<option value="1">2</option>
									<option value="2">3</option>
									<option value="2">4</option>
								</select>
								<div class="clear"></div>
							</div>
							<div class="agileits-location form-group">
								<label>Size</label>
								<select required name="size">
									<option value="">4 inch</option>
									<option value="">6 inch</option>
									<option value="">8 inch</option>
									<option value="">10 inch</option>
								</select>
								<div class="clear"></div>
							</div>
							<div class="agileits-location w3ls-1 form-group">
								<label>Flavor</label>
								<select required name="flovar">
									<option value="">Chocolate</option>
									<option value="">Butterscotch </option>
									<option value="">Strawberry</option>
									<option value="">Vanilla</option>
								</select>
								<div class="clear"></div>
							</div>
							<input type="submit" value="Order" class="agileinfo-order btn" />
						</form>
					</div>
				</div>
				<!-- //order form -->
				<!-- news -->
				<div class="col-lg-8 news-blog mt-lg-0 mt-5">
					<h3 class="title-2 mb-md-5 mb-4">Company News</h3>
					<div class="row">
						<div class="col-sm-6 news-grids-agile">
							<div class="news-top">
								<a href="single.html">
									<img src="images/news1.jpg" alt="" class="img-fluid" />
								</a>
							</div>
							<div class="price-bottom bg-white p-4">
								<a href="single.html" class="text-dark">Sep 21st, 2018</a>
								<h5 class="mt-3">Sit voluptatem accusantium doloremque</h5>
							</div>
						</div>
						<div class="col-sm-6 news-grids-agile mt-sm-0 mt-5">
							<div class="news-top">
								<a href="single.html">
									<img src="images/news2.jpg" alt="" class="img-fluid" />
								</a>
							</div>
							<div class="price-bottom bg-white p-4">
								<a href="single.html" class="text-dark">Sep 21st, 2018</a>
								<h5 class="mt-3">Sit voluptatem accusantium doloremque</h5>
							</div>
						</div>
					</div>
					<!-- //news -->
					<!-- faqs -->
					<div class="faq-w3agile mt-5" id="faqs">
						<h3 class="title-2 mb-md-5 mb-4">Frequently asked questions</h3>
						<ul class="faq list-unstyled">
							<li class="item1">
								<a href="#" title="click here" class="text-dark border-bottom pb-3">Why is my cake texture gummy? 
									<i class="fas fa-plus float-right"></i>
								</a>
								<ul class="list-unstyled">
									<li class="subitem1">
										<p class="pt-3 pb-4"> This cake layer was made with too much flour and was over-mixed.
											The crumb isn't tender or soft, and the texture is dense with an oddly gummy center. It causes the cake layer to almost 
											look underbaked once it's leveled,
											even though it's cooked through..									</li>
								</ul>
							</li>
							<li class="item2 my-3">
								<a href="#" title="click here" class="text-dark border-bottom pb-3">What's the difference between baking powder and baking soda?
									<i class="fas fa-plus float-right"></i>
								</a>
								<ul class="list-unstyled">
									<li class="subitem1">
										<p class="pt-3 pb-4"> Baking soda is pure sodium bicarbonate,
											 whereas baking powder also contains an acid, such as cream of tartar, and cornstarch. 
											 Baking soda is a raising agent that contains one or more acid ingredients,
											 such as cocoa powder or buttermilk. Baking powder is better for recipes that 
											 contain little or no acid ingredients.30-Jun-2022.</p>
									</li>
								</ul>
							</li>
							<li class="item3 my-3">
								<a href="#" title="click here" class="text-dark border-bottom pb-3">What is the temperature of a cake?
									<i class="fas fa-plus float-right"></i>
								</a>
								<ul class="list-unstyled">
									<li class="subitem1">
										<p class="pt-3 pb-4">210°F.  <br><br>
											One other way to see if your cake is cooked is to use a thermometer to check the internal temperature of your cake.
											 For most cakes, the centre should be around 98°C/210°F..</p>
									</li>
								</ul>
							</li>
							<li class="item4">
								<a href="#" title="click here" class="text-dark border-bottom pb-3">
									What is purpose of baking powder?
									<i class="fas fa-plus float-right"></i>
								</a>
								<ul class="list-unstyled">
									<li class="subitem1">
										<p class="pt-3">
											Baking powder is used to increase the volume and lighten the texture of baked goods. It works by releasing carbon dioxide gas into a batter or dough through an acid–base reaction, 
											causing bubbles in the wet mixture to expand and thus leavening the mixture.</p>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- //faqs -->
				</div>
			</div>
		</div>
	</div>
	<!-- //news -->

	
	
	
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
									<a href="{{url('cart')}}">View Menu</a>
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
									<a href="{{url('cart')}}">View Menu</a>
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
									<a href="{{url('cart')}}">View Menu</a>
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
									<a href="{{url('cart')}}">View Menu</a>
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
									<a href="{{url('cart')}}">View Menu</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //middle slider -->

	<!-- support -->
	<div class="serives-agile py-5" id="support">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="text-dark mb-2">Help & Support</h3>
				<p>Ut enim ad minim veniam, quis nostrud ullam.</p>
			</div>
			<div class="row support-bottom text-center">
				<div class="col-md-4 support-grid">
					<i class="fas fa-headphones"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Online Support</h5>
					<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
					<button type="button" class="button button-2" onclick="window.location='contact.html'">
						<span>Call Us</span>
					</button>
				</div>
				<div class="col-md-4 support-grid my-md-0 my-5">
					<i class="far fa-comments"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Live Chat 24/7</h5>
					<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
					<button type="button" class="button button-2 active" onclick="window.location='contact.html'">
						<span>Let's Chart</span>
					</button>
				</div>
				<div class="col-md-4 support-grid">
					<i class="fas fa-question"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Any Questions</h5>
					<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
					<button type="button" class="button button-2" onclick="window.location='contact.html'">
						<span>Learn More</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- support -->


	    <!-- Testimonial Start -->
		<div class="container-xxl bg-light my-6 py-6 pb-0">
			<div class="container">
				<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
					<p class="text-primary text-uppercase mb-2">// Client's Review</p>
					<h1 class="display-6 mb-4">More Than 20000+ Customers Trusted Us</h1>
				</div>
				<div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
					<div class="testimonial-item bg-white rounded p-4">
						<div class="d-flex align-items-center mb-4">
							<img class="flex-shrink-0 rounded-circle border p-1" src="images/testimonial-1.jpg" alt="">
							<div class="ms-4">
								<h5 class="mb-1">Client Name</h5>
								<span>Profession</span>
							</div>
						</div>
						<p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
					</div>
					<div class="testimonial-item bg-white rounded p-4">
						<div class="d-flex align-items-center mb-4">
							<img class="flex-shrink-0 rounded-circle border p-1" src="images/testimonial-2.jpg" alt="">
							<div class="ms-4">
								<h5 class="mb-1">Client Name</h5>
								<span>Profession</span>
							</div>
						</div>
						<p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
					</div>
					<div class="testimonial-item bg-white rounded p-4">
						<div class="d-flex align-items-center mb-4">
							<img class="flex-shrink-0 rounded-circle border p-1" src="images/testimonial-3.jpg" alt="">
							<div class="ms-4">
								<h5 class="mb-1">Client Name</h5>
								<span>Profession</span>
							</div>
						</div>
						<p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
					</div>
					<div class="testimonial-item bg-white rounded p-4">
						<div class="d-flex align-items-center mb-4">
							<img class="flex-shrink-0 rounded-circle border p-1" src="images/testimonial-4.jpg" alt="">
							<div class="ms-4">
								<h5 class="mb-1">Client Name</h5>
								<span>Profession</span>
							</div>
						</div>
						<p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
					</div>
				</div>

					<br>
	 
				<div  class=" text-light rounded-top p-5 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s"  style="background-color:#522c1b;">
					<div class="row align-items-center">
						<div class="col-md-6">
							<h1 class="display-4 text-light mb-0">Subscribe Our Newsletter</h1>
						</div>
						<div class="col-md-6 text-md-end">
							<div class="position-relative">
								<input class="form-control bg-transparent border-light w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
								<button type="button" class="btn btn-dark py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonial End -->

	
		
@endsection




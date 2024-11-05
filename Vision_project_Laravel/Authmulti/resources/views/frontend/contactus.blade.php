@extends('layout.main')
@section('main-content')
		<!-- banner 2 -->
		<div class="banner2-w3ls">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- main -->
	<!-- page details -->
	<div class="breadcrumb-agile">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb m-0">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
			</ol>
		</nav>
	</div>
	<!-- //page details -->

	<!-- contact page -->
	<div class="address py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h2 class="text-dark mb-2">Contact Us</h2>
				<p>Ut enim ad minim veniam, quis nostrud ullam.</p>
			</div>
			<div class="row address-row">
				<div class="col-lg-6 address-right">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
						<h4 class="font-weight-bold mb-3">Address</h4>
						<p>123 San Sebastian, Hill Towers 4567 New York City USA.</p>
					</div>
					<div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s">
						<h4 class="font-weight-bold mb-3">Phone </h4>
						<p>+222 111 333 4444</p>
						<p>+222 111 333 5555</p>
					</div>
					<div class="address-info agileits-info wow fadeInRight animated" data-wow-delay=".6s">
						<h4 class="font-weight-bold mb-3">Mail</h4>
						<p>
							<a href="mailto:example@mail.com"> Mail1@example.com</a>
						</p>
						<p>
							<a href="mailto:example@mail.com"> Mail2@example.com</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6 address-left mt-lg-0 mt-5">
					<div class="address-grid">
						<h4 class="font-weight-bold mb-3">Get In Touch</h4>
						<form method="POST" id="contactForm" action="{{route('contact.store')}}" enctype="multipart/form-data">
						@csrf

						<div class="form-group">
								<input type="text" class="form-control" placeholder="Name" name="name" required="">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" required="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Subject" name="subject" required="">
							</div>
							<div class="form-group">
								<textarea placeholder="Message" class="form-control" name="message" required=""></textarea>
							</div>
							<!-- <input type="submit" value="SEND"> -->
							<div class="col-lg-12">
                  <div class="contact-btn-left custom-form">
                    <button type="submit" id="contactBtn" class="btn btn-outline-danger">Send Message</button>
                  </div>
                </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2513.5588531024528!2d6.926104315807983!3d50.950370979547415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bf25139c136161%3A0x40466a2b892ec6e7!2sCologne%2C+Ehrenfeld+Gutenbergstr.!5e0!3m2!1sen!2sin!4v1516624585853"></iframe>
	</div>
	<!--// map -->
	<!-- //contact page -->


	@endsection
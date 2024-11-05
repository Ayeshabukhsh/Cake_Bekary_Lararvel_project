@extends('layout.main')
@section('main-content')
<style>
  span{
    color:brown;
  }
</style>

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
	<br><br><br><br>
  <br><br><br><br>
<div class="container mt-5  ">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                   <h3><center><b>ContactUs<span> Details<span></b></center></h3>
                </div>
                <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Subject</td>
                        <td>Message</td>
                    </tr>
                    @foreach($contact as $item)
         <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->subject}}</td>
            <td>{{$item->message}}</td>
           
</tr>
@endforeach
</table>            
</div>
</div>
</div>
</div>
</div>

@endsection
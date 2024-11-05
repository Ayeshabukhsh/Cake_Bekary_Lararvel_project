<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .hero {
	background-color: #000000;
	background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/g3.jpg);
  background-position: center;
	background-size: cover;
	color: #ffffff;
	padding: 1em;
	text-align: center;
    height:100vh;
}
.txt{
    margin-top:15%;
    text:bold;

}
a{
   padding:10px !important; 
   width: 110px;
    
}
</style>
</head>
<body>
<div class="hero">
	<h1 class="txt">Thank you  <br>for subscribing to our Cake Shop updates!</h1>
	<p>"

We're thrilled to have you as part of our community. Get ready for delicious updates on new cake flavors,<br> special offers, and more delivered straight to your inbox.
<br>
Stay tuned for sweet surprises! 🍰🎉"</p>
    <a class=" btn btn-outline-danger" href="{{url('/index')}}" >GO BACK</a>
</div>
</body>
</html>
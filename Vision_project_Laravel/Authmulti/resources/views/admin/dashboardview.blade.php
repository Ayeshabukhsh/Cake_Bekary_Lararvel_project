@extends('admin.layout.main')
@section('main-content')
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
  span{
    color:brown;
  }

</style>
</head>
<body>
                 <div class="container">
                 <div class="row">
                 <div class="col-md-12 m-auto ">

                 <div class="card">
            <div class="card-header">
                 <h3><b><u><center> <span> Status<span></b></u></center>
                     </h3>
                </div>
               
   
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Categories</h5>
                        <p class="card-text">{{ $categoryCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Products</h5>
                        <p class="card-text">{{ $productCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Users</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Customers</h5>
                        <p class="card-text">{{ $userCount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

  <br>
  
</div>
</div>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

@endsection
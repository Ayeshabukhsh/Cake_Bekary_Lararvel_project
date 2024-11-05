@extends('admin.layout.main')
@section('main-content')
<x-admin-layout>
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
                 <div class="col-md-12 m-auto mt-5">

                 <div class="card">
            <div class="card-header">
                 <h3><b><u><center>Add New <span> Product<span></b></u></center>
                     </h3>
                </div>

   <div class="container">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" id="name">
      <br>
      <label for="description">Description:</label>
      <textarea name="description" class="form-control" id="description"></textarea>
      <br>
      <label for="image">Image:</label>
      <input type="file" name="image" class="form-control" accept="image/*" required>
      <br>
      <label for="category">Category:</label>
      <select name="category" id="category" class="form-control">
          @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
      </select>
      <br>
      <button type="submit" class="btn btn-success">Submit</button>
      <br>
  </form>
   </div>
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
</x-admin-layout>

@endsection
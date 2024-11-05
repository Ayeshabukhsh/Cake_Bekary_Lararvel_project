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
                 <h3><b><u><center>Edit <span> Product<span></b></u></center>
                     </h3>
                </div>
                <div class="container">
                  <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
              
                      <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                      </div>
              
                      <div class="form-group">
                          <label for="description">Description:</label>
                          <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                      </div>
              
                      <div class="form-group">
                          <label for="image">Current Image:</label>
                          @if ($product->image)
                              <img src="{{ asset('images/' . $product->image) }}" width="199px" alt="Product Image" class="img-thumbnail">
                          @else
                              <p>No image available</p>
                          @endif
                      </div>
              
                      <div class="form-group">
                          <label for="new_image">New Image:</label>
                          <input type="file" class="form-control" id="new_image" name="image">
                      </div>
              
                      <div class="form-group">
                          <label for="category">Category:</label>
                          <select class="form-control" id="category" name="category">
                              @foreach ($categories as $category)
                                  <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                      {{ $category->name }}
                                  </option>
                              @endforeach
                          </select>
                      </div>
              
                      <button type="submit" class="btn btn-primary">Update Product</button>
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
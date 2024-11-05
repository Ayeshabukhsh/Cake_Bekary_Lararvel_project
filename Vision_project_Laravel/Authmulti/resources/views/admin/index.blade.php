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
            span {
                color: brown;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto ">

                    <div class="card">
                        <div class="card-header">
                            <h3><b><u>
                                <center>View <span> Product<span></b></u></center>
                            </h3>
                        </div>
                        <div class="container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td> <img src="./images/{{ $product->image }}" width="80px" alt="jj">
                                            </td>
                                            <td> {{ $product->category->name }}</td>
                                            <td>
                                                {{-- <a href="{{ route('products.show', $product->id) }}" >SHow</a> --}}
                                                <a href="{{ route('products.edit', $product->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <hr>
                            <!-- <div class="container">
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-4">
                                            <div class="card">
                                                <img src="./images/{{ $product->image }}" width="80px" alt="jj">
                                                <div class="card-body">
                                                    <div class="card-text">{{ $product->id }}</div>
                                                    <div class="card-text">{{ $product->name }}</div>
                                                    <div class="card-text">{{ $product->description }}</div>

                                                    <button type="submit">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="d-flex justify-content-end">
                                    {{ $products->links() }}
                                </div>
                            </div> -->
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

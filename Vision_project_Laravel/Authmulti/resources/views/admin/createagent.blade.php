@extends('admin.layout.main')
@section('main-content')

<x-admin-layout>
<h1>Add Product</h1>
  <div class="container">
    <form action="" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
        <br>
        <label for="image">Image:</label>
        <input type="file" name="image" id="image">
        <br>
        <label for="category">Category:</label>
        <select name="cat" id="category">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
    
  </div>
 </x-admin-layout>


@endsection



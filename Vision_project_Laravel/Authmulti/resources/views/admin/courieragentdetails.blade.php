@extends('admin.layout.main')
@section('main-content')
<x-admin-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <title>Insert data</title>
</head>
<body>

    
    <div class="container">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Record Update</th>
                <th>Record Delete</th>
        </tr>
        @foreach($courieragent as $item)
         <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>



 <td><a href="{{route('agent.edit',$item->id)}}" class="btn btn-outline-secondary">Edit</a></td>
 
     <form action="{{route('agent.destroy',$item->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td><input type="submit" value="Delete" class="btn btn-outline-danger"></td>
            </form>
        </td>
    </tr>
</tr>          @endforeach
  </table>
               </div>
            </div>
          </div>
       </div><div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-md- ">
<div class="text-center ">
 <a href ="{{url('agent/create')}}" class="btn btn-outline-danger" width="30px">Back To Add New Cake category</a>
    </div>
    <br><br>
</body>
</html>
</x-admin-layout>

@endsection
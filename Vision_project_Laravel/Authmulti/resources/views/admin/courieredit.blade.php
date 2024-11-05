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
    <title>Insert Data</title>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 m-auto mt-5">
        @if(session('status'))
            <h6  class="alert alert-success">{{session('status')}}</h6>
            @endif
        <!-- <div class="text-center">
 <a href ="{{url('/courieragentdetails/')}}" class="btn btn-outline-primary" width="30px">Go To All Show Courier Details</a>
    </div>
    <br> -->
     <div class="card">
            <div class="card-header">
                 <h3><b><u><center>Add New Category</b></u></center>
                     </h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('agent.update',$category->id)}}" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')
                         <label for="">Id:</label>
                           <div class="row">
                          <div class="col">
                          <input type="text" value="{{$category->id}}"  name="id" class="form-control" placeholder="Id">
                          </div>
                          <label for="">Name:</label>
                         <div class="col">
                    <input type="text" value="{{$category->name}}" name="name" class="form-control" placeholder="Name">
                  </div>
              </div><br>
                       
                </div>
                <br>

            <br>
    
                
    </div>
                <!-- <div class="row md-4">
                            <label class="col-sm-2 col-label-form"> Image:</label>
                            <div class="col-sm-10">
                            <input type="file" name="image"/> 
                         </div>  -->
                         
                    </div>    
                    <br><br>
                         <div class="text-center ">
                           <button type="submit" class="btn btn-primary">Update New Category</button>
                           </div>   
                         </form>
                         </div> 
                    </div>
                 </div> 
           </div>
      </div>
</body>
</html>
</x-admin-layout>

@endsection
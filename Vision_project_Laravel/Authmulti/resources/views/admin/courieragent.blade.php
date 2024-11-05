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
<style>
  span{
    color:brown;
  }
</style>
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-md-12 m-auto mt-1">
        @if(session('status'))
            <h6  class="alert alert-success">{{session('status')}}</h6>
            @endif
        <!-- <div class="text-center">
 <a href ="{{url('/courieragentdetails/')}}" class="btn btn-outline-primary" width="30px">Go To All Show Courier Details</a>
    </div>
    <br> -->
     <div class="card">
            <div class="card-header">
                 <h3><b><u><center>Add New <span>Category<span></b></u></center>
                     </h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('agent.store')}}" enctype="multipart/form-data">
                         @csrf

                           <div class="row">
                          <div class="col">
                          <input type="hidden" name="id" class="form-control" placeholder="Id">
                          </div>
                          <label for="">Name:</label>
                         <div class="col">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                  </div>
              </div><br>
                       
                </div>
                <br>

            <br>
    
                
    </div>
                  
                    <br><br>
                         <div class="text-center ">
                           <button type="submit" class=" btn btn-outline-danger">Submit</button>
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
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
   

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
            <h6  class="alert alert-success">{{session('status')}}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                   <h3><center><b>Update New  Agent</b></center></h3>
                </div>
                <div class="card-body">
                <form method="post" action="{{route('agent.update',$agent->id)}}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <label for="">Name:</label>
                           <div class="row">
                          <div class="col">
                          <input type="text" name="fname"  value="{{$agent->fname}}"class="form-control" placeholder="First name">
                          </div>
                         <div class="col">
                    <input type="text" name="lname" value="{{$agent->lname}}" class="form-control" placeholder="Last name">
                  </div>
              </div><br>
              <div class="container bg-light">
                            <label for="">Email</label>
                            <input type="text" name="email"  value="{{$agent->email}}" class="form-control"  placeholder="Ex:myname@example.com" >
                          <p>exampl@example.com</p></div>
                            <div class="form-group-md-3">
                            <label for="">Company/Egency Name:</label>
                            <input type="text" name="ce_Name"  value="{{$agent->ce_Name}}" class="form-control" placeholder="" >
                        </div><br>
                         <div class="form-group-md-3">
                       <label for="">Phone/Number:</label>
                      <input type="text" name="phone_no" value="{{$agent->phone_no}}" class="form-control" placeholder="(_____)__ ____">
                       </div><br>
                       <div class="container bg-light">
                            <label for="">Describe Product Inserted In:</label>
                            <textarea name="prod_des" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <p>Please provide us with any additional information about the files you are submitting.</p>
                     </div>      
                     <div class="text-center">
                    <input type="submit" value="Update Manage Agent Details">                   
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

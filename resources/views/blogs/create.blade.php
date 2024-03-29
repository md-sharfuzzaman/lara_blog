@extends('layouts.app')

@section('content')

   <div class="container-fluid">
       <div class="jumbotron">
           <h1>create a new blog</h1>
       </div>
       <div class="col-md-12">
        <form action="{{route('blogs.store')}}" method="post">
               <div class="form-group">
                   <label for="title">Title</label>
                   <input type="text" name="title" class="form-control">
               </div>
               <div class="form-group">
                   <label for="body">Body</label>
                   <textarea class="form-control" name="body" id="" rows="3"></textarea>
               </div>
               <button class="btn btn-primary" type="submit">Create a new blog</button>
                {{csrf_field()}}
            </form>
       </div>
   </div>

@endsection
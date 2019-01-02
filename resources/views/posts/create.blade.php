@extends('layouts.master')

@section('content')

 <div class="row">
     <div class="col-md-9 offset-md-2">
         <h3>Create Post Form</h3>
         <hr>
         <form action="/posts" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
   
            <div class="form-group">
               <label for="body">Body</label>
               <textarea name="body" id="body" cols="30" rows="4" class="form-control"></textarea>
           </div>

            <div class="form-group">
                <input type="file" name="coverImage" id="coverImage" class="form-control-file">
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">Create</button>
           </div>
         </form>

       

         
     </div>
 </div>
@endsection
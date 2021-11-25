@extends('layouts.layout')

@section('content')

 <div class="container my-5">
     <div class="row">
         <div class="col-md-6 offset-3">
             <form>
                 <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" class="form-control" id="name" placeholder="Enter name">
                 </div>

                 <button type="submit" class="btn btn-primary">add group</button>
             </form>

         </div>
     </div>
 </div>

@endsection

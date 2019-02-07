@extends('logmaster')

@section('content')

<div class="col-sm-8 blog-main">

sign in

<form method="POST" action="/login">
	{{csrf_field()}}
	


	<div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>



  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  



  <button type="submit" class="btn btn-primary">Submit</button>
  

</form>
</div>


@endsection
@extends('templates.base')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('style_sisvent/css/loginComponent.css') }}">
@endsection
@section('body')
<div class="container">
    <div class="row justify-content-center align-items-center min-100">
        <div class="col-6">
        	<div class="row text-center">
        		<div class="col-12">
        			<div class="container bg-light border">
    					<div class="jumbotrom bg-secundary">
    						logo
    					</div>
	        			<div class="jumbotrom">
	        				<form>
	        					<div class="form-group">
	        						<div class="input-group mb-3">
									    <div class="input-group-prepend">
									      <span class="input-group-text">@</span>
									    </div>
									    <input type="text" class="form-control" placeholder="Username">
									  </div>
			        				<div class="input-group mb-3">
			        					 <div class="input-group-prepend">
									      <span class="input-group-text">Password</span>
									    </div>
									    <input type="text" class="form-control" placeholder="Your Email">
									    
									  </div>
									  <button type="button" class="btn btn-primary">login</button>
	        					</div>
	        				</form>
	        			</div>
        			</div>
        		</div>
        		<div class="col-12">
        			info
        		</div>
        	</div>
        </div>
       
    </div>
</div>
@endsection
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
	
</style>
</head>
<body style="background-color: #2e3b41;margin: 0px; ">
	<div class="box">
  		<div class="box__inner">
    		<div id="head" style="height: 30px; background-color:#106705;">

				<a href="" style="margin-left: 5px;"><img src="{{asset('img/a.jpeg')}}"></a>
		
				<a href="" style="float: right; margin-top: 4px; margin-right: 10px;">Login</a>

				<a href="{{url('signUp')}}" style="float: right; margin-top: 4px; margin-right: 10px; ">Sign Up</a>


			</div>
			<div id="body" style="height: 70% ">
		
			</div>
			<div id="end" style="height: 15% ">
		
			</div>
  		</div>
	</div>
	@if(count($errors)>0)
		<div style="color: red">
			@foreach($errors->all() as $err)
				{{$err}}<br>
			@endforeach
		</div>
	@endif
	@if(session('thongbao'))
		<div style="color: red">
			{{session('thongbao')}}
		</div>
	@endif

	<form action="{{url('login')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		<div style="text-align: center;background-color: #2e3b41;color: white;padding-top: 100px;">
			<legend>Login</legend>
			<p>Email <input type="email" name="email" id="email"></p>
			<p>Password <input type="password" name="password" id="password"></p>
			{!! csrf_field()!!}
			<button type="submit" >Login</button>
		</div>
	</form>
</body>
</html>



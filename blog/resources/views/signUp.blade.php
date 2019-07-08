<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="background-color: #2e3b41;margin: 0px;color: white; ">
	<div class="box">
  		<div class="box__inner">
    		<div id="head" style="height: 30px; background-color:#106705;">

				<a href=""><img src="{{asset('img/a.jpeg')}}"></a>
		
				<a href="{{url('login')}}" 
				style="float: right; margin-top: 4px; margin-right: 10px;">Login</a>

				<a href="" 
				style="float: right; margin-top: 4px; margin-right: 10px; ">Sign Up</a>


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

	<form action="{{url('signUp')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		<div style="padding-top: 50px;text-align: center;">
		<h1>Sign Up</h1>

		<div style="margin-right: 650px;text-align: right;">
			<p>Username 
				<input type="text" name="name" id="login_username" class="text" style="margin-left: 5px;"></p>
			<p>Email 
				<input type="email" name="email" id="login_email" class="text" style="margin-left: 5px;"></p>
			<p>Password 
				<input type="password" name="password" id="login_password" class="text" style="margin-left: 5px;">
			</p>
			<p>Password Again
				<input type="password" name="passwordAgain" id="login_password" class="text" style=" margin-left: 5px;">
			</p>
			<p>Country
				<input type="text" name="country" class="text" style=" margin-left: 5px;">
			</p>
			<p>Date of birth
				<input type="date" name="birthday" id="login_birth" class="text" style="margin-left: 20px;"></p>
			<form>
				<p>Sex
				<input type="radio" name="sex" value="Nam" 
				style="margin-left: 25px;"/>Men
				<input type="radio" name="sex" value="Nữ"
				style="margin-left: 25px;"/>Women
				</p>
			</form>
		</div>	
		<button type="submit">SignUp</button>
		</div>
	</form>
</body>
</html>
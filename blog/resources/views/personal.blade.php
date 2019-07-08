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
<body style="background-color: #2e3b41;margin: 0px;color: white; ">
	<div class="box">
  		<div class="box__inner">
    		<div id="head" style="height: 35px; background-color:#106705;">

				<a href="{{url('user')}}" style="margin-left: 5px;"><img src="public\img\a.jpeg"></a>
				
				<a href="{{url('login')}}" 
				style="float: right; margin-top: 4px; margin-right: 10px;">Logout</a>

				<a href="" style="float: right; margin-top: 4px; margin-right: 10px;">
					<img src="public\img\messenger.png"></a>

				<a style="float: right; margin-top: 4px; margin-right: 10px;">
					<img src="public\img\notification.png"></a>
				

				<a href="{{url('personal')}}" class="a" 
				style="float: right; margin-top: 4px; margin-right: 50px;">username</a>
				<a href="{{url('personal')}}" style="float: right; margin-top: 4px; margin-right: 10px;"><img src="public\img\anh.jpg"></a>
				
			</div>
			<div id="body" style="height: 70%;margin-left: 10px;
				margin-top: 5px;
			 ">
			 	<div style="">
				  <a href="{{url('personal')}}"><img src="anh.jpg">Username</a>
				</div>
				

			</div>
			<div id="end" style="height: 15% ">
		
			</div>
  		</div>
	</div>
	
</body>
</html>